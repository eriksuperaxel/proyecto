<?php 
session_start();
if (isset($_SESSION['username'])) {
	echo "Bienvenido, ".$_SESSION['username'];
}else{
	echo "No tiene acceso a esta página";
}



 ?>