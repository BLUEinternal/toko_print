<?php
session_start();
require 'functions.php';

if(isset($_POST["tambah"])){
    if(tambahProduk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('yay! data berhasil ditambahkan');
                window.location = 'produk.php';
            </script>
        ";
        
    }else{
        echo"
            <script type='text/javascript'>
                alert('data gagal ditambahkan');
                window.location = 'produk.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PRODUK</title>
</head>
<body>
 <div class="content">
    <h3>TAMBAH DATA PRODK- PRINTER RENDY</h3>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">nama produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control"><br><br>
        
        <label for="harga">harga</label>
        <input type="text" name="harga" id="harga" class="form-control"><br><br>

        <label for="foto">foto</label>
        <input type="file" name="foto" id="foto" class="form-control"><br><br>

        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok" class="form-control"><br><br>

        <label for="deskripsi">deskripsi</label>
        <textarea type="text" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea><br><br>

        <button type="submit" name="tambah">tambah data</button>

    </form>


 </div>
   
</body>
</html>