<?php

require_once "koneksi.php";
//
//$ambildata = mysqli_query($koneksi, "select * from data_pinjaman where id='$_GET[id]'");
//
//$tampil=mysqli_fetch_array($ambildata);
//
//if(isset($_POST[$tampil=mysqli_fetch_array($ambildata)])){
//
//    $query = $koneksi->query("INSERT INTO data_pemngembalian select * from data_pinjaman where id='$_GET[id]' ");
//
//    if($query) {
//        echo "<script>alert('Berhasil Menambah!'); window.location.href='pagepetugas.php?halaman=history_petugas';</script>";
//    } else {
//        echo "<script>alert('Gagal Menambah!');</script>";
//    }
//
//} else { }

$ambil = $koneksi->query("SELECT * FROM data_pengembalian");

$ambil = $koneksi->query("SELECT * FROM data_pinjaman WHERE id='$_GET[id]'");


$today = date('d-m-Y');


if(isset($ambil)){

    $query = $koneksi->query("INSERT INTO data_pengembalian select id, nis, username, kode, judul, tanggal_peminjaman, '$today', stok from data_pinjaman WHERE id='$_GET[id]' ");

    if($query) {
        echo "<script>window.location.href='deletehistory_petugas.php?id=$_GET[id]'</script>";
    } else {
        echo "<script>alert('Gagal Menambah!');</script>";
    }

}




?>