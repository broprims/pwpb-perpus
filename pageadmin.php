<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adminpage</title>
    <link rel="stylesheet" href="css/pageadmin.css">
</head>
<body>

<?php

session_start();

include "koneksi.php";

if(!isset($_SESSION['Login']) AND ($_SESSION['level'] ="admin")) {
    header('location:index.php');
    exit;
}

?>








<header class="page-header">
    <nav>
        <a href="#0" aria-label="forecastr logo" class="logo">
            <img src="img/library.svg" alt="library">
            <h2 class="username"></h2>
        </a>

        <ul id="btndahsboard" class="dashboard">
            <li>
                <a href="pageadmin.php?halaman=dashboard">
                    <svg x="0px" y="0px" viewBox="0 0 306.773 306.773" style="enable-background:new 0 0 306.773 306.773;">
                        <path d="M302.93,149.794c5.561-6.116,5.024-15.49-1.199-20.932L164.63,8.898
                            c-6.223-5.442-16.2-5.328-22.292,0.257L4.771,135.258c-6.092,5.585-6.391,14.947-0.662,20.902l3.449,3.592
                            c5.722,5.955,14.971,6.665,20.645,1.581l10.281-9.207v134.792c0,8.27,6.701,14.965,14.965,14.965h53.624
                            c8.264,0,14.965-6.695,14.965-14.965v-94.3h68.398v94.3c-0.119,8.264,5.794,14.959,14.058,14.959h56.828
                            c8.264,0,14.965-6.695,14.965-14.965V154.024c0,0,2.84,2.488,6.343,5.567c3.497,3.073,10.842,0.609,16.403-5.513L302.93,149.794z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>

        <ul  class="admin-menu" >
            <li class="menu-heading">
                <h3>Admin</h3>
            </li>
            <li id="btnadmin" >
                <a href="pageadmin.php?halaman=admin">
                    <svg  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >
                        <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                        <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                    </svg>
                    <span>Admin</span>
                </a>
            </li>
            <li id="btnpetugas">
                <a href="pageadmin.php?halaman=petugas">
                    <svg  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >
                        <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                        <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                    </svg>
                    <span>Petugas</span>
                </a>
            </li>
            <li id="btnsiswa">
                <a href="pageadmin.php?halaman=siswa">
                    <svg  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >
                        <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                        <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                    </svg>
                    <span>Siswa</span>
                </a>
            </li>



            <li class="menu-heading">
                <h3>Settings</h3>
            </li>
            <li id="btnbook">
                <a href="pageadmin.php?halaman=buku">
                    <svg enable-background="new 0 0 513.124 513.124"  viewBox="0 0 513.124 513.124" >
                        <path d="m503.685 29.49h-64.92c-5.213 0-9.439 4.326-9.439 9.663v27.841h83.799v-27.842c-.001-5.336-4.227-9.662-9.44-9.662z"/>
                        <path d="m385.852 75.652h-64.919c-5.213 0-9.439 4.326-9.439 9.663v48.474h83.798v-48.474c-.001-5.337-4.227-9.663-9.44-9.663z"/>
                        <path d="m429.325 101.832h83.799v338.833h-83.799z"/>
                        <path d="m311.493 168.628h83.798v343.63h-83.798z"/>
                        <path d="m429.325 475.504h83.799v36.754h-83.799z"/>
                        <path d="m97.647 97.062h-88.208c-5.213 0-9.439 4.326-9.439 9.663v36.444h107.086v-36.444c0-5.337-4.226-9.663-9.439-9.663z"/>
                        <path d="m0 178.007h107.086v334.251h-107.086z"/>
                        <path d="m141.12 431.634h136.34v80.624h-136.34z"/>
                        <path d="m141.12 116.749h136.34v280.047h-136.34z"/>
                        <path d="m268.021.867h-117.462c-5.213 0-9.439 4.326-9.439 9.663v71.381h136.34v-71.382c0-5.336-4.226-9.662-9.439-9.662z"/>
                    </svg>
                    <span>Books</span>
                </a>
            </li>
            <li id="btnhistory">
                <a href="pageadmin.php?halaman=peminjaman">
                    <svg enable-background="new 0 0 513.124 513.124"  viewBox="0 0 513.124 513.124" >
                        <path d="m503.685 29.49h-64.92c-5.213 0-9.439 4.326-9.439 9.663v27.841h83.799v-27.842c-.001-5.336-4.227-9.662-9.44-9.662z"/>
                        <path d="m385.852 75.652h-64.919c-5.213 0-9.439 4.326-9.439 9.663v48.474h83.798v-48.474c-.001-5.337-4.227-9.663-9.44-9.663z"/>
                        <path d="m429.325 101.832h83.799v338.833h-83.799z"/>
                        <path d="m311.493 168.628h83.798v343.63h-83.798z"/>
                        <path d="m429.325 475.504h83.799v36.754h-83.799z"/>
                        <path d="m97.647 97.062h-88.208c-5.213 0-9.439 4.326-9.439 9.663v36.444h107.086v-36.444c0-5.337-4.226-9.663-9.439-9.663z"/>
                        <path d="m0 178.007h107.086v334.251h-107.086z"/>
                        <path d="m141.12 431.634h136.34v80.624h-136.34z"/>
                        <path d="m141.12 116.749h136.34v280.047h-136.34z"/>
                        <path d="m268.021.867h-117.462c-5.213 0-9.439 4.326-9.439 9.663v71.381h136.34v-71.382c0-5.336-4.226-9.662-9.439-9.662z"/>
                    </svg>
                    <span>Pinjaman</span>
                </a>
            </li>
            <li id="btnhistory">
                <a href="pageadmin.php?halaman=pengembalian">
                    <svg enable-background="new 0 0 513.124 513.124"  viewBox="0 0 513.124 513.124" >
                        <path d="m503.685 29.49h-64.92c-5.213 0-9.439 4.326-9.439 9.663v27.841h83.799v-27.842c-.001-5.336-4.227-9.662-9.44-9.662z"/>
                        <path d="m385.852 75.652h-64.919c-5.213 0-9.439 4.326-9.439 9.663v48.474h83.798v-48.474c-.001-5.337-4.227-9.663-9.44-9.663z"/>
                        <path d="m429.325 101.832h83.799v338.833h-83.799z"/>
                        <path d="m311.493 168.628h83.798v343.63h-83.798z"/>
                        <path d="m429.325 475.504h83.799v36.754h-83.799z"/>
                        <path d="m97.647 97.062h-88.208c-5.213 0-9.439 4.326-9.439 9.663v36.444h107.086v-36.444c0-5.337-4.226-9.663-9.439-9.663z"/>
                        <path d="m0 178.007h107.086v334.251h-107.086z"/>
                        <path d="m141.12 431.634h136.34v80.624h-136.34z"/>
                        <path d="m141.12 116.749h136.34v280.047h-136.34z"/>
                        <path d="m268.021.867h-117.462c-5.213 0-9.439 4.326-9.439 9.663v71.381h136.34v-71.382c0-5.336-4.226-9.662-9.439-9.662z"/>
                    </svg>
                    <span>Pengembalian</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >

                        <path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0
                                    c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333
                                    h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251
                                    l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z"/>
                        <path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437
                                    l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128
                                    C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512
                                    c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715
                                    C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992
                                    c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907
                                    l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491
                                    v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z"/>
                    </svg>

                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</header>
<section class="page-content">
    <section class="search-and-user">
        <form action="" method="post">
            <input type="" class="searchlah" style=" width: 100%;
                                                    height: 50px;
                                                    font-size: 1.5rem;
                                                    padding-left: 15px;
                                                    background: #fff;
                                                    color: #333;
                                                    border-radius: 4px;
                                                    box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.075);" name="query" placeholder="Search...." autocomplete="off">
            <div class="input-group-append">
                <button type="submit" name="submit" class="input-group-text btn" aria-label="submit form">
                    <svg aria-hidden="true">
                        <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                    </svg>
                </button>
            </div>
        </form>

        <a href="pageadmin.php?halaman=profile">
            <div id="profileadmin" class="admin-profile">
                <span class="greeting">Hello</span>
                <span class="greeting2"><?php echo $_SESSION['username']; ?></span>
                <div class="notifications">
                    <!--<span class="badge">1</span>-->

                    <svg  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >
                        <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                        <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                    </svg>

                </div>
            </div>
        </a>



    </section>

    <section class="grid KANAN">

        <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            switch ($queries['halaman'])
            {

                case 'admin':

                    include 'admin.php';
                    break;

                case 'petugas':

                    include 'petugas.php';
                    break;

                case 'siswa':

                    include 'siswa.php';
                    break;

                case 'buku':

                    include 'buku.php';
                    break;

                case 'peminjaman':

                    include 'tb_pinjam_admin_1.php';
                    break;

                case 'terlambat':

                    include 'tb_pinjam_admin_2.php';
                    break;

                case 'pengembalian':

                    include 'tampil_kembali_page_admin.php';
                    break;

                case 'profile':

                    include 'profile.php';
                    break;


                default:

                    include 'dashboard.php';
                    break;
            }
        ?>

    </section>

</section>

</body>
</html>

