<section class="grid KANAN">

<!--------------------------------------------------------------------------------------------------------------------------------------->

    <section id="bukupage" class="buku">

        <h1 class="headh1">Data buku</h1>

        <div class="container ">
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


                    <a href="tambahbuku_petugas.php">
                        <button class="Button ml-auto">
                            <svg aria-hidden="true" height="12" width="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 7h6a1 1 0 0 1 0 2H9v6a1 1 0 0 1-2 0V9H1a1 1 0 1 1 0-2h6V1a1 1 0 1 1 2 0z" fill-rule="evenodd"></path>
                            </svg>
                            <span>New</span>
                        </button>
                    </a>


                </div>
                <table class="Card__table Table">
                    <thead>
                    <tr>

                        <td>
                            <div class="Table__header-item">
                                <span>KODE</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>JUDUL</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>IMG</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>PENGARANG</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>PENERBIT</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>TAHUN-TERBIT</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>BAHASA</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>HALAMAN</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>JENIS</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>KATEGORI</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>STOK</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item aksi">
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
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM buku WHERE judul LIKE '%$query%' OR 
                    pengarang LIKE '%$query%'");
                    }else{
                        $ambildata = mysqli_query($koneksi, "select * from buku ");
                    }
                    if(mysqli_num_rows($ambildata)){
                        while($tampil=mysqli_fetch_array($ambildata)):

                        echo "

                        <tr >
                        <td>$tampil[kode]</td>
                        <td>$tampil[judul]</td>
                        <td> <img style='width: 100px;height: 166px;' src='img_buku/$tampil[img]' alt='tampil-gambar'> </td>
                        <td>$tampil[pengarang]</td>
                        <td>$tampil[penerbit]</td>
                        <td>$tampil[tahunterbit]</td>
                        <td>$tampil[bahasa]</td>
                        <td>$tampil[halaman]</td>
                        <td>$tampil[jenis]</td>
                        <td>$tampil[kategori]</td>
                        <td>$tampil[stok]</td>
                        <td> <a class='action edit' href='editbuku_petugas.php?kode=$tampil[kode]'>Edit</a> <span> | </span> <a class='action hapus' href='deletebuku_petugas.php?kode=$tampil[kode]'> Hapus </a> </td>
                        </tr>

                        ";

                    endwhile;}else{
                        echo '<p>Tidak ada data yang di cari</p>';
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

<!--------------------------------------------------------------------------------------------------------------------------------------->

</section>

