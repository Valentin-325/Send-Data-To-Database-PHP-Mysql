<?php

require 'dbcon.php';

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$gen = $_POST['gen'];
$varsta = $_POST['varsta'];


$sql = "INSERT INTO tabeldate (nume, prenume, gen, varsta) VALUES ('$nume', '$prenume', '$gen', '$varsta')";
$result = mysqli_query($conectare, $sql);

header ("Location: thanks.php"); 