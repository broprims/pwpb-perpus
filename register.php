<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tugas2</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<style>
    body{
        background-image: url("img/vector5.jpg");
        background-size: cover;
        /*background-color: rgba(255, 255, 255, 0.5);*/
    }
    #section1 {
        background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5));
    }
</style>


<section id="section1">

    <div id="transparent">  </div>

    <div id="wadah">

        <div id="kiri">

            <h2>Punya Akun ?</h2>
            <p>Jika anda sudah memiliki akun,
                silahkan anda masuk menggunakan
                akun anda. Klik tombol
                di bawah untuk masuk.</p>
            <a href="index.php"> <button href="#">Login</button> </a>

        </div>

        <div id="kanan">

            <h1>Register Siswa</h1>

            <form action=" " method="POST" id="input">

                <input type="text" maxlength="5" minlength="5" name="nis" autofocus class="input input1" placeholder="nis" required>
                <input type="text" name="username" class="input input2" placeholder="username" required>

                <input type="text" name="fullname" class="input input3" placeholder="fullname" required>
                <input type="text" name="email" class="input input4" placeholder="e-mail" required>

                <div class="input_box">
                    <input type="password" name="password" id="password" class="input input5" placeholder="password" required>
                    <div class="eye" onclick="myFunction()">
                        <svg id="openeye" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                            <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                                    c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                                    C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                                    c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                                     M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                                    c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                                    c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                        </svg>
                        <svg id="slasheye" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481;">

                            <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                            <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                                    C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                                    c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                            <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                                    c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                                    c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                                    l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                                    C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                                    c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>

                        </svg>

                    </div>
                </div>

                <select name="gender" class="input" id="selectgender" required>
                    <option selected disabled default> </option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <input id="level" type="hidden" name="level" value="siswa">


                <div>
                    <input type="submit" value="Register" id="registerbtn" name="proses">
                </div>

            </form>


            <?php


            require_once "koneksi.php";

            if (isset($_POST['proses'])) {
                mysqli_query($koneksi, "insert into tabel_data_siswa set
                nis = '$_POST[nis]',
                username = '$_POST[username]',
                fullname = '$_POST[fullname]',
                email = '$_POST[email]',
                password = '$_POST[password]',
                gender = '$_POST[gender]',
                level = '$_POST[level]'");

                if($_POST['proses']){
                    echo "<script>alert('Berhasil Register!'); window.location.href='index.php?';</script>";
                }
            } else { }

            ?>




        </div>

    </div>


</section>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("openeye");
        var z = document.getElementById("slasheye");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        } else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>


</body>
</html>
