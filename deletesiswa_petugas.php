<?php

require_once "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM tabel_data_siswa WHERE nis='$_GET[nis]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tabel_data_siswa WHERE nis='$_GET[nis]'");

if($ambil) {
    echo "<script>alert('Berhasil Delete!'); window.location.href='pagepetugas.php?halaman=siswa_petugas';</script>";
}