<section class="KANAN grid">





    <section class="buku" id="bukupage">



        <h1 id="headh2" class="headh1" >Data Keterlambatan</h1>




        <nav class="nav">

            <ul class="ul">
                <li class="li">
                    <a class="a" id="terlambat"  href="pageadmin.php?halaman=peminjaman" >Pinjam</a>
                    <a class="a" id=""  href="pageadmin.php?halaman=terlambat" >Terlambat</a>
                </li>

            </ul>

        </nav>

        <style>

            .nav {
                width: 100%;
                background-color: #fff;
                display: flex;
                justify-content: center;
                margin-bottom: 4vh;
                padding: 3vh;
                text-align: center;
            }

            .ul {
                display: flex;
                align-items: center;
            }

            .li {
                list-style: none;
            }

            .a {
                text-decoration: none;
                color: black;
                font-family: sans-serif;
                padding: 1vh;
                cursor: pointer;
            }

            .a:hover {
                color: blue;
            }

        </style>



        <div class="container " id="container2">
            <div class="Card">
                <div class="Card__content Card__content--border">

                    <a href=" ">

                        <button class="Button">
                            <svg aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.994.004c.555 0 1.006.448 1.006 1a.997.997 0 0 1-.212.614l-5.782 7.39L9 13.726a1 1 0 0 1-.293.708L7.171 15.97A.1.1 0 0 1 7 15.9V9.008l-5.788-7.39A.996.996 0 0 1 1.389.214a1.01 1.01 0 0 1 .617-.21z" fill-rule="evenodd"></path>
                            </svg>
                            <span>Refresh</span>
                        </button>

                    </a>


                </div>
                <table class="Card__table Table">
                    <thead>
                    <tr>
                        <td>
                            <div class="Table__header-item">
                                <span>NIS</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>USERNAME</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>KODE BUKU</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>JUDUL BUKU</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>TANGGAL PEMINJAMAN</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>TENGAT PENGEMBALIAN</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>TERLAMBAT</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>DENDA</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item ">
                                <span>STATUS</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item ">
                                <span>ACTION</span>
                            </div>
                        </td>
                    </tr>
                    </thead>


                    <!------------------------------------------TAPIL DATA---------------------------------------------->
                    <?php

                    require_once "koneksi.php";


                    $query = $_POST['query'];
                    if($query != ''){
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM data_pinjaman WHERE username LIKE '%$query%' OR judul LIKE '%$query%'");
                    }else{
                        $ambildata = mysqli_query($koneksi, "select * from data_pinjaman ");
                    }

                    $ambildata = mysqli_query($koneksi, "SELECT * FROM data_pinjaman WHERE CURDATE() > tengat_pengembalian ");


                    while($tampil = $ambildata->fetch_assoc()) {
                        // untuk menghitung selisih hari terlambat

                        $t = date_create($tampil['tengat_pengembalian']);
                        $n = date_create(date('Y-m-d'));
                        $terlambat = date_diff($t, $n);
                        $hari = $terlambat->format("%a");

                        // menghitung denda
                        $denda = $hari * 1000;

                        echo "

                        <tr >
                            <td> $tampil[nis]</td>
                            <td> $tampil[username]</td>
                            <td> $tampil[kode]</td>
                            <td> $tampil[judul]</td>
                            <td> $tampil[tanggal_peminjaman]</td>
                            <td> $tampil[tengat_pengembalian]</td>
                            <td> $hari hari</td>
                            <td> $denda</td>
                            <td> <span style='color: red; font-family: sans-serif'>Terlambat</span> </td>
                            <td> <a class='action hapus' href='pengembalian_admin.php?id=$tampil[id]'> Dikembalikan </a> </td>
                        </tr>

                      ";
                    }
                    ?>


                </table>
                <div class="Card__content">
                    <div class="Card__content-text">

                        <?php

                        // menghitung data barang
                        $jumlah_buku = mysqli_num_rows($ambildata);
                        ?>
                        <p> <b><?php echo $jumlah_buku;?></b> result </p>

                    </div>
                </div>
            </div>
        </div>








    </section>





</section>