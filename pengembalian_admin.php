<?php

require_once "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM data_pengembalian");

$ambil = $koneksi->query("SELECT * FROM data_pinjaman WHERE id='$_GET[id]'");

$today = date('d-m-Y');

if(isset($ambil)){

    $query = $koneksi->query("INSERT INTO data_pengembalian select id, nis, username, kode, judul, tanggal_peminjaman, '$today', stok from data_pinjaman WHERE id='$_GET[id]' ");

    if($query) {
        echo "<script>window.location.href='deletehistory_admin.php?id=$_GET[id]'</script>";
    } else {
        echo "<script>alert('Gagal Menambah!');</script>";
    }

}

?>

