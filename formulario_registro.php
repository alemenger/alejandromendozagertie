<?php

include("conexion_bd.php");
if( isset($_POST['register'])){
if (strlen($_POST['name']) >= 1 &&
	strlen($_POST['email'])>=1) {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$fecha_reg = date("d/m/y"); 	
 	$consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fecha_reg')";
 	$resultado =mysqli_query($conexion,$consulta);

   if ($resultado) {
	    	?> 
	    	<h3 class="ok">Te has registrado correctamente</h3>
           <?php
    	} 
    } else {
    		?> 
	    	<h3 class="empty"> Complete sus datos</h3>
           <?php
    }

}

?>