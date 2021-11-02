<?php

require_once "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM tabel_data_petugas WHERE id='$_GET[kode]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tabel_data_petugas WHERE id='$_GET[kode]'");

if($ambil) {
    echo "<script>alert('Berhasil Delete!'); window.location.href='pageadmin.php?halaman=petugas';</script>";
}