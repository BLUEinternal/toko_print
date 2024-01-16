<?php

require 'functions.php';

$id = $_GET["id"];

if(hapusproduk($id) > 0){ 
    echo "
        <script type='text/javascript'>
            alert('data berhasil di apus');
            window.location = 'produk.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('data gagal di hapus');
        window.location = 'produk.php';
    </script>
";
}

?>