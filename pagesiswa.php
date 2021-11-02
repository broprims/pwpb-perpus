<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswapage</title>
    <link rel="stylesheet" href="css/pagesiswa.css">
</head>

<body>

<?php

session_start();

if (!isset($_SESSION['Login']) AND ($_SESSION['level'] ="siswa")) {
    header('location:index.php');
}

?>


<header class="atap">

    <nav class="nav">

        <ul>
            <li >
                <a href="pagesiswa.php?halaman=dashboard_siswa" >Dashboard</a>
            </li>
            <li>
                <a href="pagesiswa.php?halaman=buku_siswa" >Buku</a>
            </li>
            <li>
                <a href="pagesiswa.php?halaman=pinjam_siswa" >Pinjam</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="pagesiswa.php?halaman=profile_siswa" >Profile</a>
            </li>

            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>

    </nav>

</header>


<main>


<!------------------------------------------------------------------------------------------------------------------------------------------->


    <?php
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    switch ($queries['halaman'])
    {

        case 'buku_siswa':

            include 'buku_page_siswa.php';
            break;

        case 'pinjam_siswa':

            include 'pinjam_page_siswa.php';
            break;

        case 'profile_siswa':

            include 'profile_page_siswa.php';
            break;

        case 'detail_buku':

            include 'detail_buku.php';
            break;


        default:

            include 'dashboard_page_siswa.php';
            break;
    }
    ?>


    <!------------------------------------------------------------------------------------------------------------------------------------------->

    <!------------------------------------------------------------------------------------------------------------------------------------------->



</main>



</body>
</html>

