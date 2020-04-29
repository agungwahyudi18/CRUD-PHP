<?php
include "database.php";

$query ="SELECT * FROM toko WHERE id='$_GET[id]'";
$data = $db->prepare($query);
$data->execute();

$toko = $data->fetch();
?>
<?php require 'header.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h2>Form Ubah Data</h2>
        </div>
        <div class="card-body">
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $toko['id'] ?>"/>
                <div class="form-group">
                    <label for="name"> Nama Toko  </label>
                    <input type="text" name="nama" value="<?php echo $toko['nama'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis"> Jenis Dagangan   </label>
                    <input type="text" name="jenis" value="<?php echo $toko['jenis'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat"> Alamat  </label>
                    <input type="text" name="alamat" value="<?php echo $toko['alamat'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nohp"> Nomor HP </label>
                    <input type="text" name="nohp" value="<?php echo $toko['nohp'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>