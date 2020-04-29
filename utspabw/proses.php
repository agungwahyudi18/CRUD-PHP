<?php
 include "database.php";

$query = "INSERT INTO toko VALUES('', '$_POST[nama]', '$_POST[jenis]', '$_POST[alamat]', ' $_POST[nohp]')";
$data = $db->prepare($query);
$data->execute();

header("location: crud.php");
