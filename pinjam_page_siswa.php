

<!------------------------------------------------------------------------------------------------------------------------------------------->

<section id="history" class="atur history">
    <div class="h1">
        <div class="h2">


            <section id="siswapage" class="siswa">

                <h1 class="headh1">Peminjaman</h1>

                <div class="container">
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
                                        <span>STATUS</span>
                                    </div>
                                </td>
                            </tr>
                            </thead>

                            <!------------------------------------------TAPIL DATA---------------------------------------------->
                            <?php

                            require_once "koneksi.php";

                            $ambildata = mysqli_query($koneksi, "SELECT * FROM data_pinjaman WHERE data_pinjaman.username = '$_SESSION[username]'");

                            while ($tampil = mysqli_fetch_array( $ambildata))
                            {
                             ?>


                        <tr >
                            <td><?=$tampil['nis']?></td>
                            <td><?=$tampil['username']?></td>
                            <td><?=$tampil['kode']?></td>
                            <td><?=$tampil['judul']?></td>
                            <td><?= $tampil['tanggal_peminjaman']?></td>


                            <?php

                            }
                            ?>
                            <?php
                            $ambildata2 = mysqli_query($koneksi, "SELECT * FROM data_pinjaman WHERE CURDATE() > tengat_pengembalian ");
                            $ambildata2 = mysqli_query($koneksi, "SELECT * FROM data_pinjaman WHERE username='$_SESSION[username]'");


                            while($tampil = $ambildata2->fetch_assoc()) {
                            // untuk menghitung selisih hari terlambat

                            $t = date_create($tampil['tengat_pengembalian']);
                            $n = date_create(date('Y-m-d', strtotime("1 day", strtotime(date("Y-m-d")))));
//                            $terlambat = date_diff($t, $n);
//                            $hari = $terlambat->format("%a");

                            $keterangan =  $n > $t ? '<span style="font-family: sans-serif; color: red;">terlambat</span>' : '<span style="font-family: sans-serif; color: #00cc00;">Dipinjam</span>';

                            ?>

                                <td><?= $tampil['tengat_pengembalian']?></td>
                                <td><?= $keterangan?></td>
                            </tr>

                            <?php
                            }
                            ?>






                        </table>
                        <div class="Card__content">
                            <div class="Card__content-text">

                                <?php
                                $data_buku = mysqli_query($koneksi,"SELECT * FROM data_pinjaman WHERE data_pinjaman.username= '$_SESSION[username]'");

                                // menghitung data barang
                                $jumlah_buku = mysqli_num_rows($data_buku);
                                ?>
                                <p> <b><?php echo $jumlah_buku;?></b> result </p>

                            </div>
                        </div>
                    </div>
                </div>



            </section>



        </div>
    </div>
</section>

<!------------------------------------------------------------------------------------------------------------------------------------------->
