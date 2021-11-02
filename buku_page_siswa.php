
<!------------------------------------------------------------------------------------------------------------------------------------------->

<section id="buku" class="atur">

    <div class="c1">
        <div class="c2">
            <section class="search-and-user">
                <form action="" method="post">
<!--                    <input type="search" name="query" placeholder="Search Books..." autocomplete="off">-->
<!--                    <button type="submit" name="submit" aria-label="submit form">-->
<!--                        <svg aria-hidden="true">-->
<!--                            <use xlink:href="#search"></use>-->
<!--                        </svg>-->
<!--                    </button>-->
                        <input type="" class="searchlah" style="background: transparent;" name="query" placeholder="Search Books...." autocomplete="off">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="input-group-text btn" aria-label="submit form">
                                <svg aria-hidden="true">
                                    <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/>
                                </svg>
                            </button>
                        </div>

                </form>
            </section>
        </div>
    </div>

    <?php

    require_once "koneksi.php";

    ?>



    <div class="b1" id="b1">
        <div class="b2">


                <?php

                require_once "koneksi.php";

                $select = mysqli_query($koneksi, "select stok from data_pinjaman where username='$_SESSION[username]' ");


                if (mysqli_num_rows($select)) {

                    echo "<div > <p style='background-color: #A9D5FF; padding: 0 5px;'>Anda Sudah Meminjam Buku!</p> </div>";

                } else {


                    $query = $_POST['query'];
                    if($query != ''){
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM buku WHERE judul LIKE '%$query%' OR pengarang LIKE '%$query%'");
                    }else{
                        $ambildata = mysqli_query($koneksi, "select * from buku ");
                    }
                    if(mysqli_num_rows($ambildata)){
                        while($tampil=mysqli_fetch_array($ambildata)):

                            echo "
        
                            
                         
                            
                                 <div class='book'>
                                 
                                     <a class='link' style='text-decoration: none; ' href='detail_buku.php?kode=$tampil[kode]'> 
                                            <div class='imgbuku'>
                                                <img src='img_buku/$tampil[img]'/>
                                            </div>
                                            <div class='desc'>
                                                <div class='namabuku'>
                                                     <h1 style='text-transform: capitalize' class='namabuku'>$tampil[judul]</h1>
                                                </div>
                                                <div class='pengarang'>
                                                     <a style='text-transform: capitalize' href='#' class='pengarang'>$tampil[pengarang]</a>
                                                </div>
                                            </div>
                                      </a>
                                
                                </div>
                         
                            
                               
                               
                                
                      ";

                        endwhile;}else{
                        echo '<p>Tidak ada data yang di cari</p>';
                    }

                }

                ?>

        </div>
    </div>



</section>

<!------------------------------------------------------------------------------------------------------------------------------------------->
