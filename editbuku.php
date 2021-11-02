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


<?php

include "koneksi.php";
$sql=mysqli_query($koneksi, "select * from buku where kode='$_GET[kode]' ");
$data=mysqli_fetch_array($sql);



?>



<section id="section1">

    <div id="transparent">  </div>

    <div id="wadah">

        <div id="kanan">

            <h1>Edit buku</h1>

            <form action=" " enctype="multipart/form-data" method="POST" id="input">

                <input disabled style="border: 2px solid #808080" type="text" name="kode" class="input input1" placeholder="Kode buku" value="<?php echo $data['kode']; ?>">
                <input type="text" name="judul" class="input input2" placeholder="Judul buku" required value="<?php echo $data['judul']; ?>">
                <input type="file" accept="image/png, image/jpeg" name="img" class="input input3" value="<?php echo $data['img']; ?>">

                <input type="text" name="pengarang" class="input input4" placeholder="Pengarang buku" required value="<?php echo $data['pengarang']; ?>">
                <input type="text" name="penerbit" id="password" class="input input5" placeholder="Penerbit buku" required value="<?php echo $data['penerbit']; ?>">
                <input type="text" name="tahunterbit" class="input input6" placeholder="Tahun terbit" required value="<?php echo $data['tahunterbit']; ?>">
                <input type="text" name="bahasa" class="input input7" placeholder="Bahasa" required value="<?php echo $data['bahasa']; ?>">
                <input type="text" name="halaman" class="input input8" placeholder="Jumlah halaman" required value="<?php echo $data['halaman']; ?>">
                <input type="text" name="jenis" class="input input9" placeholder="Jenis buku" required value="<?php echo $data['jenis']; ?>">
                <input type="text" name="kategori" class="input input10" placeholder="Kategori buku" required value="<?php echo $data['kategori']; ?>">


                <div class="btn2" alt="buttonlah">
                    <input id="register" type="submit" value="Update" class="buttonbawah registerbtn" name="proses">
                    <a href="pageadmin.php?halaman=buku">
                        <input type=" " class="buttonbawah cancelbtn" value="Back">
                    </a>
                </div>

            </form>


            <?php


             if(isset($_POST['proses'])){
                    include "koneksi.php";

                    $namafoto = $_FILES['img']['name'];
                    $lokasifoto = $_FILES['img']['tmp_name'];
                    //jika foto di rubah
                    if(!empty($lokasifoto))
                    {
                        move_uploaded_file($lokasifoto,"img_buku/".$namafoto);
                        $query =$koneksi->query("UPDATE buku SET judul='$_POST[judul]',img='$namafoto',pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]', tahunterbit='$_POST[tahunterbit]', bahasa='$_POST[bahasa]', halaman='$_POST[halaman]', jenis='$_POST[jenis]', kategori='$_POST[kategori]' WHERE kode='$_GET[kode]' ");
                    }
                    else
                    {
                        move_uploaded_file($lokasifoto,"img_buku/".$namafoto);
                        $query =$koneksi->query("UPDATE buku SET judul='$_POST[judul]',img='$namafoto',pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]', tahunterbit='$_POST[tahunterbit]', bahasa='$_POST[bahasa]', halaman='$_POST[halaman]', jenis='$_POST[jenis]', kategori='$_POST[kategori]' WHERE kode='$_GET[kode]'");
                    }

                    if($query){
                        echo "<script>alert('Berhasil Mengubah Data!'); window.location.href='pageadmin.php?halaman=buku';</script>";
                    }
                }





            ?>




        </div>

    </div>


</section>

<script>
    function hilang() {
        document.getElementById("register").style.display = "none";
    }
</script>


</body>
</html>
