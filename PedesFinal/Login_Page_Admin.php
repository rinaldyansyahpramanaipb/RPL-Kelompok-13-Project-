<?php
    ob_start();
    session_start();
    if(isset($_SESSION['sipil_nama'])) header("Location: Home_Page_Admin.php");
    include("config.php");

    if(isset($_POST['login'])) {
        $nip = $_POST['nip'];
        $pw = $_POST['pswd'];
        $query = pg_query($db, "SELECT * FROM sipil WHERE nip = '$nip' AND pswd = '$pw'");

        if(pg_num_rows($query)>0){
            $data = pg_fetch_array($query);
            $_SESSION['sipil_nip'] = $data['nip'];
            $_SESSION['sipil_nama'] = $data['nama'];
            $_SESSION['sipil_jabatan'] = $data['jabatan'];
            $_SESSION['sipil_alamat'] = $data['alamat'];
            header("Location: Home_Page_Admin.php");
        } else {
            header("Location: Login_Page_Admin.php?gagal");
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
            <h1>Login Admin</h1>

        <form action="" method="POST">
            <input type="nip" name="nip" placeholder="NIP"><br>
            <input type="password" name="pswd" placeholder="Password"><br>
            <input type="submit" value="Login" name="login"><br>
        </form><br>

        <?php
            if(isset($_GET['gagal'])){?>
        <center><p>Maaf, NIP / Password yang Anda Masukkan Salah</p></center>
        <?php }?>
        <?php
            if(isset($_GET['sukses'])){?>
        <center><p>Registrasi Berhasil</p></center>
        <?php }?>
        <center><a href="Regist_Page_Admin.php">Belum punya akun?</a></center><br>
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