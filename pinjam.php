

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tugas2</title>
    <link rel="stylesheet" href="css/editbuku.css">
</head>
<body>


<style>
    body{
        background-image: url("img/vector6.jpg");
        background-size: cover;
        background-position: center;
    }
    #section1 {
        background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5));
    }


</style>

<script>
    $(function() {
        $( "#date" ).datepicker({ dateFormat: 'yy-mm-dd', minDate: 2021-08-28, maxDate: "+1W +0D" }).val();
    });
</script>


<?php

include "koneksi.php";

$buku=mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]'");

$data=mysqli_fetch_array($buku);






?>



<section id="section1">

    <div id="transparent">  </div>

    <div id="wadah">

        <div id="kanan">

            <h1>Pinjam buku</h1>

            <form enctype="multipart/form-data"  action=" " method="POST" id="input">


                <select style="border: 1px solid rgb(9, 60, 95);" type="text" name="nis" class="input" autofocus required>
                    <option selected disabled class="" > Select NIS siswa </option>
                    <?php
                    $select = mysqli_query($koneksi,"SELECT nis FROM tabel_data_siswa");
                    while($data2=mysqli_fetch_array($select)):
                        ?>
                        <option multiple><?php echo $data2['nis']?></option>
                    <?php endwhile; ?>
                </select>
                <input type="text" name="username" class="input" placeholder="username" required value="">

                <input  type="text" name="kode" class="input" placeholder="Kode buku" value="<?php echo $data['kode']; ?>">
                <input type="text" name="judul" class="input" placeholder="Judul buku" required value="<?php echo $data['judul']; ?>">

                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="input" placeholder="" required value="" >


                <div class="btn2" alt="buttonlah">
                    <input id="register" type="submit" value="Pinjam" class="buttonbawah registerbtn" name="proses">
                    <a href="pagesiswa.php?halaman=buku_siswa">
                        <input type=" " class="buttonbawah cancelbtn" value="Back">
                    </a>
                </div>

            </form>


            <?php

            require_once "koneksi.php";


            if (isset($_POST['proses'])) {

                $tgl_pinjam = $_POST['tanggal_peminjaman'];
                $tgl_kembali = strtotime("+6 day", strtotime($tgl_pinjam)); // +7 hari dari tgl peminjaman
                $tgl_kembali = date('Y-m-d', $tgl_kembali); // format tgl peminjaman tahun-bulan-hari

                $stok =1;


                mysqli_query($koneksi, "insert into data_pinjaman set
                nis = '$_POST[nis]',
                username = '$_POST[username]',
                kode = '$_POST[kode]',
                judul = '$_POST[judul]',
                tanggal_peminjaman='$tgl_pinjam',
                tengat_pengembalian='$tgl_kembali',
                stok='$stok'");
//
//                $query = $koneksi->query("INSERT INTO data_pinjaman(nis, userneme, kode, judul, tanggal_peminjaman, tengat_pengembalian, stok)
//                VALUES('$_POST[nis]','$_POST[username]','$_POST[kode]','$_POST[judul]','$tgl_pinjam','$_POST[$tgl_kembali]','$_POST[stok]' )");



                if($_POST['proses']) {

                    echo " 
                          <script>alert('Berhasil Meminjam buku!'); window.location.href='pagesiswa.php?halaman=pinjam_siswa';</script>";
                } else {
                    echo "<script>alert('Gagal meminjam!');</script>";
                }

            } else { }



            ?>




        </div>

    </div>


</section>


</body>
</html>



