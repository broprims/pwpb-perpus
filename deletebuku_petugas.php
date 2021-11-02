<?php

require_once "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM buku WHERE kode='$_GET[kode]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM buku WHERE kode='$_GET[kode]'");

if($ambil) {
    echo "<script>alert('Berhasil Delete!'); window.location.href='pagepetugas.php?halaman=buku_petugas';</script>";
}