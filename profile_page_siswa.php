
<!--------------------------------------------------------------------------------------------------------------------------------------->



<section id="profile" class="atur profile">
    <div class="p1">
        <div class="p2">


            <div class="atas">

                <div class="bungkus">
                    <div class="coverimg">
                        <svg  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" >
                            <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                            <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                        </svg>
                    </div>
                </div>

                <div class="textatas">
                    <span class="dataprofile">Profile</span>

                    <?php

                    require_once "koneksi.php";

                    $ambildata = mysqli_query($koneksi, "SELECT * FROM tabel_data_siswa WHERE tabel_data_siswa.username = '$_SESSION[username]'");

                    while ($tampil = mysqli_fetch_array( $ambildata))
                    {
                        echo "

                                <table class='data'>
                              
                                    <tr>
                                        <td class='fullname'>$tampil[fullname]</td>
                                    </tr>
                                   
                                    <tr >
                                        <td class='level'>$tampil[level]</td>
                                    </tr>
                    
                                </table>

                              ";
                    }



                    ?>
                </div>

            </div>

            <div class="bawah">

                <div class="textatas2">
                    <?php

                    require_once "koneksi.php";

                    $ambildata = mysqli_query($koneksi, "SELECT * FROM tabel_data_siswa WHERE tabel_data_siswa.username = '$_SESSION[username]'");

                    while ($tampil = mysqli_fetch_array( $ambildata))
                    {
                        echo "

                                <div class='aturdata'>
                                
                                    <table class='data data2'>
                                        <tr>
                                            <th>Nis</th>
                                            <td>: $tampil[nis]</td>
                                        </tr>
                                        <tr>
                                            <th>Fullname</th>
                                            <td>: $tampil[fullname]</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>: $tampil[username]</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: $tampil[email]</td>
                                        </tr>
                                        
                                    </table>
                                    <table class='data data2 datakanan'>
                                        <tr>
                                            <th>password</th>
                                            <td>: $tampil[password]</td>
                                        </tr>
                                      
                                        <tr>
                                            <th>Gender</th>
                                            <td>: $tampil[gender]</td>
                                        </tr>
                                        <tr >
                                            <th>Level</th>
                                            <td>: $tampil[level]</td>
                                        </tr>
                                    </table>
                                    
                                    
                    
                                </div>
                                <div class='aturaction'>
                                    <td><a class='action edit' href='editsiswa_siswa.php?kode=$tampil[nis]'>Edit</a></td>
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

