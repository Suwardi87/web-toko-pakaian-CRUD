<?php

$ambil = $koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = '$_GET[id]'");
    if ($ambil) {
        echo "<script>
                alert('Data Dihapus');
                document.location.href='index.php?halaman=pelanggan';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                document.location.href='index.php?barang=dataBarang';
            </script>";
    } 

?>