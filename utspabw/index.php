<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Store</title>

    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">
    <?php require 'nav.php'; ?>    
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di Smart Store</h1>
                        <p>Nikmati Kemudahan Berbelanja Dari Rumah<br>
                        #StayAtHome</p>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Masuk</a>
                        <a href="register.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php require 'footer.php'; ?>