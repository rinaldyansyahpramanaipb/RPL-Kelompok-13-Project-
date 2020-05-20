<?php
    ob_start();
    session_start();
    if(isset($_SESSION['masyarakat_nama'])) header("Location: Home_Page.php");
    include("config.php");

    if(isset($_POST['login'])) {
        $nik = $_POST['nik'];
        $pw = $_POST['pswd'];
        $query = pg_query($db, "SELECT * FROM masyarakat WHERE nik = '$nik' AND pswd = '$pw'");

        if(pg_num_rows($query)>0){
            $data = pg_fetch_array($query);
            $_SESSION['masyarakat_nik'] = $data['nik'];
            $_SESSION['masyarakat_nama'] = $data['nama'];
            $_SESSION['masyarakat_alamat'] = $data['alamat'];
            header("Location: Home_Page.php");
        } else {
            header("Location: Login_Page.php?gagal");
        }
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="Login_style.css">
        <link rel="icon" type="image/png" href="logoPedes.png"/>
    </head>

    <body>
        <div id="main">
            <h1>Login</h1>

        <form action="" method="POST">
            <input type="text" name="nik" placeholder="NIK"><br>
            <input type="password" name="pswd" placeholder="Password"><br>
            <input type="submit" value="Login" name="login"><br>
        </form><br>

        <?php
            if(isset($_GET['gagal'])){?>
        <center><p>Maaf, NIK / Password yang Anda Masukkan Salah</p></center>
        <?php }?>
        <?php
            if(isset($_GET['sukses'])){?>
        <center><p>Registrasi Berhasil</p></center>
        <?php }?>
        <center><a href="Regist_Page.php">Belum punya akun?</a></center><br>
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
