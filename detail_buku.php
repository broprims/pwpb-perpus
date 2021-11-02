
<!------------------------------------------------------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="css/pagesiswa.css">
<!------------------------------------------------------------------------------------------------------------------------------------------->

<section id="detailsection">

    <div class="db1">
        <div class="db2">



            <div class="atas_detail">

                <?php

                require_once "koneksi.php";

                $select = mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]' ");
                $tampil = mysqli_fetch_array($select);
                $select = $tampil['stok'];


                if ($select>0) {

                    $ambildata = mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]' ");

                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        echo "
    
                            <div class='detailbuku'>
                            
                                <table class='coverbuku'>
                                    <tr> 
                                        <td> 
                                            <img src='img_buku/$tampil[img]' alt=''>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <table class='teksjudul'>
                                    <tr class=''>
                                        <td>
                                            <span class='dataprofile'>$tampil[jenis]</span>
                                        </td>          
                                    </tr>
                                    
                                    <tr class='bookname'>
                                        <td>
                                            <h1>$tampil[judul]</h1>
                                        </td>          
                                    </tr>
                                    <tr class='penulis'>
                                        <td>
                                            <a href='#'>$tampil[pengarang]</a>
                                        </td>
                                    </tr>
                                </table>
                            
                            </div>
                            
                  ";
                    }


                } else {

                }








                ?>

            </div>

            <div class="bawah_detail">

                <div class="none">

                    <?php

                    require_once "koneksi.php";

                    $select = mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]' ");
                    $tampil = mysqli_fetch_array($select);
                    $select = $tampil['stok'];




                    if ($select>0) {

                        $ambildata = mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]' ");


                        while ($tampil = mysqli_fetch_array($ambildata)) {
                            echo "
        
                                <div class='datadetail'>
                                
                                    <table class='detailnya'> 
                                        <tr>
                                            <td>
                                                <span>Details</span>
                                            </td>          
                                        </tr>
                                    </table>
                                    
                                    <table class='teksjudul2'>
                                        
                                         <tr>
                                            <th>Jumlah Halaman</th>
                                            <td>: $tampil[halaman]</td>
                                        </tr>
                                        <tr>
                                            <th>Penerbit</th>
                                            <td>: $tampil[penerbit]</td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Terbit</th>
                                            <td>: $tampil[tahunterbit]</td>
                                        </tr>
                                        <tr>
                                            <th>Bahasa</th>
                                            <td>: $tampil[bahasa]</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis</th>
                                            <td>: $tampil[jenis]</td>
                                        </tr>
                                         <tr>
                                            <th>Kategori</th>
                                            <td>: $tampil[kategori]</td>
                                        </tr>
                                  
                                    </table>
                                
                                </div>
                                
                                
                                 <div class='aturactiondetail'>
                                    <td>
                                        <a id='pinjam' href='pinjam.php?kode=$tampil[kode]'> 
                                            <input class='actiondetail pinjamdetail'  id='pinjam' type='submit' value='Pinjam' name='proses'>
                                        </a>
                                    </td>
                                    <td><a class='actiondetail backdetail' href='pagesiswa.php?halaman=buku_siswa'>Back</a></td>
                                </div>
                                
                                ";

                        }

                    } else {
                        echo "Stok Habis!
                        
                            <div class='aturactiondetail'>
                                <td><a class='actiondetail backdetail' href='pagesiswa.php?halaman=buku_siswa'>Back</a></td>
                            </div>
                    
                        ";


                    }





                    ?>

                </div>

            </div>






        </div>
    </div>

</section>

<!------------------------------------------------------------------------------------------------------------------------------------------->
