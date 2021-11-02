<?php



//mengaktifkan session pada php
session_start();

// menghubungkan dengan koneksi database
include 'koneksi.php';

if (isset($_POST['Login'])) {
//mengangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['Login'] = $_POST['Login'];

// menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "select * from tabel_data_siswa where username='$username' and password='$password'");
    $login2 = mysqli_query($koneksi, "select * from tabel_data_petugas where username='$username' and password='$password'");
    $login3 = mysqli_query($koneksi, "select * from tabel_data_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    $cek2 = mysqli_num_rows($login2);
    $cek3 = mysqli_num_rows($login3);

// cek apakah username dan password di temukan pada database
    if ($cek3 > 0) {

        $data = mysqli_fetch_assoc($login3);

        //cek jika user login sebagai admin
        if ($data['level'] == "admin") {

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            //alihkan ke halaman dashboard admin
            header("location:pageadmin.php");

        } else {

            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");

        }

    } elseif ($cek2 > 0) {

        $data = mysqli_fetch_assoc($login2);

        //cek jika user login sebagai admin
        if ($data['level'] == "petugas") {

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            //alihkan ke halaman dashboard admin
            header("location:pagepetugas.php");

        } else {

            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");

        }

    } elseif ($cek > 0) {

        $data = mysqli_fetch_assoc($login);

        //cek jika user login sebagai admin
        if ($data['level'] == "siswa") {

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "siswa";
            //alihkan ke halaman dashboard admin
            header("location:pagesiswa.php");

        } else {

            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");

        }

    } else {
        header("location:index.php?pesan=gagal");
    }

}

?>