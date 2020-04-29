<?php
include "database.php";

$query ="DELETE FROM toko WHERE id='$_GET[id]'";
$data = $db ->prepare($query);
$data->execute();

header("location: crud.php");