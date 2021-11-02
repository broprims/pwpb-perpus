<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tugas2</title>
    <link rel="stylesheet" href="css/tambahbuku.css">
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



<section id="section1">

    <div id="transparent">  </div>

    <div id="wadah">

        <div id="kanan">

            <h1>Tambah buku</h1>

            <form enctype="multipart/form-data" action=" " method="POST" id="input">

                <input type="text" name="kode" class="input input1" placeholder="Kode buku" required>
                <input type="text" name="judul" class="input input2" placeholder="Judul buku" required>
                <input type="file"  accept="image/png, image/jpeg" name="img" class="input input3" required>

                <input type="text" name="pengarang" class="input input4" placeholder="Pengarang buku" required>
                <input type="text" name="penerbit" id="password" class="input input5" placeholder="Penerbit buku" required>
                <input type="text" name="tahunterbit" class="input input6" placeholder="Tahun terbit" required>
                <input type="text" name="bahasa" class="input input7" placeholder="Bahasa" required>
                <input type="text" name="halaman" class="input input8" placeholder="Jumlah halaman" required>
                <input type="text" name="jenis" class="input input9" placeholder="Jenis buku" required>
                <input type="text" name="kategori" class="input input10" placeholder="Kategori buku" required>


                <div class="btn2" alt="buttonlah">
                    <input id="register" type="submit" value="Tambah" class="buttonbawah registerbtn" name="proses">
                    <a href="pageadmin.php?halaman=buku">
                        <input type=" " class="buttonbawah cancelbtn" value="Back">
                    </a>
                </div>

            </form>


            <?php


            if(isset($_POST['proses'])){

                include "koneksi.php";

                $nama =$_FILES['img']['name'];
                $lokasi =$_FILES['img']['tmp_name'];
                move_uploaded_file($lokasi,"img_buku/".$nama);

                $query = $koneksi->query("INSERT INTO buku(kode, judul, img, pengarang, penerbit, tahunterbit, bahasa, halaman, jenis, kategori)
                VALUES('$_POST[kode]','$_POST[judul]','$nama','$_POST[pengarang]','$_POST[penerbit]','$_POST[tahunterbit]','$_POST[bahasa]','$_POST[halaman]','$_POST[jenis]','$_POST[kategori]'  )");

                if($query) {
                    echo "<script>alert('Berhasil Menambah!'); window.location.href='pageadmin.php?halaman=buku';</script>";
                } else {
                    echo "<script>alert('Gagal Menambah!');</script>";
                }

            } else { }

            ?>




        </div>

    </div>


</section>



</body>
</html>
