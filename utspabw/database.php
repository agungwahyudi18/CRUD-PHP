<?php

$dsn ='mysql:host=103.29.215.230;dbname=agungmyi_cruddatabase';
$username ='agungmyi_agung';
$password = 'agung181100';
$options =[];
try{
$db = new PDO($dsn, $username, $password, $options);

}catch(PDOException $e){
    
    die("Terjadi Masalah: " . $e->getMessage());
}