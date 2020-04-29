<?php
include "database.php";

$query = "UPDATE toko SET nama='$_POST[nama]', jenis='$_POST[jenis]', alamat='$_POST[alamat]', nohp='$_POST[nohp]' WHERE id='$_POST[id]'";
$data = $db->prepare($query);
$data->execute();

header("location: crud.php");