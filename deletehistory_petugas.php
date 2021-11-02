<?php

require_once "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM data_pinjaman WHERE id='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM data_pinjaman WHERE id='$_GET[id]'");

if($ambil) {
    echo "<script>alert('Berhasil Delete!'); window.location.href='pagepetugas.php?halaman=pinjam_petugas';</script>";
}

