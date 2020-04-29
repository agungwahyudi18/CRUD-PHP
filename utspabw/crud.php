<?php
include "database.php";
?>
<?php require_once("auth.php"); ?>
<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>


<div class="container mt-5">
    <h1 class="text-center"> Toko Yang Melayani Pesan Antar Saat Masa Pandemi Covid-19 Di Kota Pekanbaru</h1>
    <h2 class="text-center"> Nikmati Kemudahan Belanja Dari Rumah </h2>
    <h3 class="text-center text-primary">Selamat Datang <?php echo  $_SESSION["user"]["name"] ?> #StayAtHome</h3>
    <div class="card mt-5">
        <div class="card-header bg-primary text-white" >
            <h2>Form Pendaftaran</h2>
        </div>
        <div class="card-body">
            <form method="post" action="proses.php">
                <div class="form-group">
                    <label for="name"> Nama Toko  </label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis"> Jenis Dagangan   </label>
                    <input type="text" name="jenis" id="jenis" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat"> Alamat  </label>
                    <textarea  name="alamat" id="alamat" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="nohp"> Nomor HP </label>
                    <input type="text" name="nohp" id="nohp" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mt-5">
        <div class="card-header bg-info text-white">
        <h2>Toko Pesan Antar Di Kota Pekanbaru</h2>
        </div>
        <div class="card-body"></div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Toko </th>
                        <th> Jenis Dagangan </th>
                        <th> Alamat </th>
                        <th> No HP </th>
                        <th> Ubah </th>
                        <th> Hapus </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = " SELECT * FROM toko";
                $data = $db->prepare($query);
                $data->execute();
        
                $nomor =1;
                while($toko = $data->fetch()){
                ?>
                    <tr>
                        <td> <?php echo $nomor ?> </td>
                        <td> <?php echo $toko['nama'] ?> </td>
                        <td> <?php echo $toko['jenis'] ?> </td>
                        <td> <?php echo $toko['alamat'] ?> </td>
                        <td> <?php echo $toko['nohp'] ?> </td>
                        <td> <a href ="ubah.php?id=<?php echo $toko['id'] ?>" class="btn btn-info"> Ubah </a></td>
                        <td> <a href ="delete.php?id=<?php echo $toko['id'] ?>" class="btn btn-danger"> Hapus </a></td>
                    </tr> 
                <?php 
                    $nomor++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>