<section class="grid KANAN">

<!--------------------------------------------------------------------------------------------------------------------------------------->

    <section id="siswapage" class="siswa">

        <h1 class="headh1">Data Siswa</h1>

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


                    <a href="registersiswa_petugas.php">

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
                                <span>FULLNAME</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>EMAIL</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>PASSWORD</span>
                            </div>
                        </td>
                        <td>
                            <div class="Table__header-item">
                                <span>GENDER</span>
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
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM tabel_data_siswa WHERE username LIKE '%$query%' OR fullname LIKE '%$query%'");
                    }else{
                        $ambildata = mysqli_query($koneksi, "select * from tabel_data_siswa ");
                    }
                    if(mysqli_num_rows($ambildata)){
                        while($tampil=mysqli_fetch_array($ambildata)):

                        echo "

                                    <tr >
                        <td>$tampil[nis]</td>
                        <td>$tampil[username]</td>
                        <td>$tampil[fullname]</td>
                        <td>$tampil[email]</td>
                        <td>$tampil[password]</td>
                        <td>$tampil[gender]</td>
                        <td> <a class='action edit' href='editsiswa_petugas.php?kode=$tampil[nis]'>Edit</a> <span> | </span> <a class='action hapus' href='deletesiswa_petugas.php?nis=$tampil[nis]'> Hapus </a> </td>
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
                        $jumlah_siswa = mysqli_num_rows($ambildata);
                        ?>
                        <p> <b><?php echo $jumlah_siswa;?></b> result </p>

                    </div>
                </div>
            </div>
        </div>



    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------->

</section>



