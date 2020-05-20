<?php
    ob_start();
    include("config.php");

    if(isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
	    $alamat = $_POST['alamat'];
	    $pw = $_POST['pswd'];
        $query = pg_query($db, "INSERT INTO masyarakat (nama, nik, alamat, pswd) VALUEs ('$nama', '$nik', '$alamat', '$pw')");

        if($query==TRUE){
            header("Location: Login_Page.php?sukses");
        } else {
            header("Location: Regist_Page.php?gagal");
        }
    }  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="Regist_style.css">
        <link rel="icon" type="image/png" href="logoPedes.png"/>
    </head>
    <body>
        <div id="main">
            <h1>Register</h1>

        <form action="" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap"><br>
            <input type="text" name="nik" placeholder="NIK"><br>
            <input type="text" name="alamat" placeholder="Alamat"><br>
            <input type="password" name="pswd" placeholder="Password"><br>
            <input type="submit" value="Daftar" name="daftar"><br>
        </form><br>
        <?php
            if(isset($_GET['gagal'])){?>
        <center><p>Registrasi Gagal!</p></center>
        <?php }?>
        </div>
    <img src="logoPedes.png">

    <p style="font-family: Calibri; font-size: 12; margin-left: 550px">©2020 Aplikasi Pelayanan Desa(PeDes) | Credit by Admin | App. Version 1.0
    </p>
        </body>
    </body>
</html>
<?php
    pg_close($db);
    ob_end_flush();
?>