<?php

$conectare = mysqli_connect('localhost', 'root', '', 'senddata'); 	

if(!$conectare) {
	echo '<script> alert("Conectarea la baza de date a esuat!") </script>';
}

?>