<?php
	/*
		Diesño de la matriz: 
		$_SESSION["productos"][X][0] = CodigoProducto
		$_SESSION["productos"][X][1] = Precio
		$_SESSION["productos"][X][2] = Cantidad
	*/
	error_reporting(E_PARSE);
	include '../conexion/configServer.php';
	include '../conexion/consultaSQL.php';
	session_start();
	$suma = 0;
	$Existe = false;
	if(isset($_GET['CodProd']) && isset($_GET['Cantidad']))
	{
	    $_SESSION['contador']++;
	    /*Obtener precio*/
	    $consulta = ejecutarSQL::consultar("select * from producto where CodigoProd='".$_GET['CodProd']."'");
		while($fila = mysqli_fetch_array($consulta)) 
	    {
	       $Precio = $fila['Precio'] * $_GET['Cantidad'];
	    }

	    /*Recorrer a matriz*/
	    for ($i = 0; $i < $_SESSION['contador']; $i++) 
	    { 
	    	//Comprobar si el producto ya esta en el carrito
	    	if($_GET['CodProd'] == $_SESSION["productos"][$i+1][0])
	    	{
	    		//Añadir en la posicion si el producto existe
				$_SESSION["productos"][$i+1][0] = $_GET['CodProd'];
				$_SESSION["productos"][$i+1][1] += $Precio;
				$_SESSION["productos"][$i+1][2] += $_GET['Cantidad'];
				$Existe = true;
	    	}
	    	//Si no existe
	    	if($i == ($_SESSION['contador']-1) && !$Existe)
	    	{
	    		//Si no existe añadirlo a la ultima posicion de la matriz
				$_SESSION["productos"][$_SESSION['contador']][0] = $_GET['CodProd'];
				$_SESSION["productos"][$_SESSION['contador']][1] = $Precio;
				$_SESSION["productos"][$_SESSION['contador']][2] = $_GET['Cantidad'];
	    	}
	    }	   
		//PRUEBA IMPRIMIR
		//echo $_GET['CodProd']." - ".$Precio." - ".$_GET['Cantidad']." -----";
	}

	if(isset($_SESSION['productos']))
	{
		//Mostrar el primer supermecado
		$consulta = ejecutarSQL::consultar("select * from producto where CodigoProd='".$_SESSION["productos"][1][0]."'");
		while($fila = mysqli_fetch_array($consulta)) 
	    {
	       $_SESSION['supermercado'] = $fila['NombreAdmin'];
	    }
	    //Comprobar si ya hay un supermercado
		if($_SESSION['supermercado'] != "")
		{
			echo "Supermercado: ".$_SESSION['supermercado']."<br><br>";
			$supermercado = $_SESSION['supermercado'];
			//Cookie de supernercado de 1 hora
			setcookie('Supermercado', $supermercado, time() + 3600, "/");
		}
	
		//Imprimir la matriz
		echo '
			<table class="table table-bordered text-center">
			<thead class="">
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>			
			</thead>
			<tbody>
		';
		for($i = 0; $i < $_SESSION['contador']; $i++)
		{
			$consulta = ejecutarSQL::consultar("select * from producto where CodigoProd='".$_SESSION["productos"][$i+1][0]."'");
			while($fila = mysqli_fetch_array($consulta)) 
		    {
		    	if($_SESSION['supermercado'] == $fila['NombreAdmin'])
		    	{
		    		if($_SESSION["productos"][$i+1][0] != "")
		    		{
		    			echo "
							<tr>
								<td>".$fila['NombreProd']."</td>
								<td>".number_format($_SESSION["productos"][$i+1][1], 2)." Bs.</td>
								<td>";

						//Comprobar que la cantidad en el carrito sea menor que el stock 
						if ($_SESSION["productos"][$i+1][2] < $fila['Stock'])
						{
							echo "<button value='".$_SESSION["productos"][$i+1][0]."' class='btn btn-success btn-xs botonAñadirCarrito'><i class='fa fa-plus'></i></button>";
						}
						echo "		&nbsp;&nbsp;x".$_SESSION["productos"][$i+1][2]."&nbsp;&nbsp;&nbsp;";

						//Comprobar que la cantida en el carrito sea 1
						if ($_SESSION["productos"][$i+1][2] == 1)
						{
							echo "<button value='".$_SESSION["productos"][$i+1][0]."' class='btn btn-danger btn-xs botonQuitarCarrito'><i class='fa fa-trash'></i></button>";
						}
						else
						{
							echo "<button value='".$_SESSION["productos"][$i+1][0]."' class='btn btn-danger btn-xs botonQuitarCarrito'><i class='fa fa-minus'></i></button>";
						}
						echo "	</td>
							</tr>
						";
			    		$suma += $_SESSION["productos"][$i+1][1];
			    		//$_SESSION['mensaje'] = "El producto se añadio al carrito correctamente.";
			    		//<a href='procesos/quitarProductoCarrito?CodProd=".$_SESSION["productos"][$i+1][0]."' class='btn btn-danger btn-block btn-xs'><i class='fa fa-trash'></i></a>
		    		}	
		    	}
		        else
		        {
		        	$_SESSION['contador']--;
		        	//$_SESSION['mensaje'] = "Todos los productos deben ser del mismo supermercado.";
		        	//echo "Todos los productos deben ser del mismo supermercado.";
		        }
		    }
		}
		echo "
				<tr>
					<td><b>Total</b></td>
					<td>".number_format($suma, 2)." Bs.</td>
				</tr>
				</tbody>
			</table>";
		$_SESSION['sumaTotal'] = $suma;
	}
	else
	{
		echo "
			<p class='text-center'><i class='fa fa-question-circle fa-4x'></i></p>
			<h3 class='text-center'>Su carrito esta vacio.</h3>
			";
	}
?>
<script>
	$(document).ready(function(){
	    //Cuando se muestran todos los productos
	    $(".botonQuitarCarrito").click(function(){
	        $('#carrito-compras-tienda').load("procesos/deladdProductoCarrito?CodProd="+$(this).val()+"&Accion=Disminuir");
	    });
	    $(".botonAñadirCarrito").click(function(){
	        $('#carrito-compras-tienda').load("procesos/deladdProductoCarrito?CodProd="+$(this).val()+"&Accion=Aumentar");
	    });
	    $(".botonVaciarCarrito").click(function(){
	        $('#carrito-compras-tienda').load("procesos/vaciarCarrito");
	    });
	});
</script>