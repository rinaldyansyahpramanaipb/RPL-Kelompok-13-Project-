<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['sipil_nip'])) header("Location: Login_Page_Admin.php");
    include("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="Homepage_style.css">
    </head>
    <body>
        <div id="header">
            <h1>Halo, Admin!</h1> <img id="Logo" src="logoPedes.png">
        </div>
        <div id="sidebar">
            <a href="Home_Page_Admin.php"><img src="home.png"; width="20px"; height="20px">Dashboard</a> <br> <!--sidebar dashboard-->
            <a href="Data_Surat_Admin.php"><img src="email.png"; width="21px"; height="24px">Data Surat-surat</a> <br> <!--sidebar surat-surat-->
            <a href="progress_Admin.php"><img src="notifications.png"; width="20px"; height="20px">Data Progress Surat</a> <br> <!--sidebar progress-->
            <a href="laporan_Admin.php"><img src="exclamation-mark.png"; width="20px"; height="20px">Periksa Laporan</a> <br> <!--sidebar laporan-->
            <a href="Logout_Admin.php"><img src="logout.png"; width="20px"; height="20px">Logout</a> <!--sidebar logout-->
        </div>
    <div class="kanan">
        <p> Selamat datang di Sistem Pelayanan Desa (PeDes)</p>
        <p id="sub"> Silahkan pilih layanan berikut:</p>
        <a href="progress_Admin.php"><div id="progress"><img id="notip" src="notifications.png" width="100px" height="100px"> <p id="notip">Update perkembangan<br>pembuatan surat</p></div></a> <div><a href="Data_Surat_Admin.php"><div id="surat"><img id="surat" src="email.png" width="100px" height="100px"> <p id="surat">Lihat permohonan<br>pengajuan surat</p></div></a></div> <div><a href="laporan_Admin.php"><div id="laporan"><img id="surat" src="exclamation-mark.png" width="100px" height="100px"> <p id="laporan">Lihat keluhan<br>warga desa</p></div></a></div> <div><a href="Login_Page_Admin.php"><div id="logout"><img id="logout" src="logout.png" width="100px" height="100px"> <p id="logout">Logout</p></div></a></div>

   <p id="footer"style="font-family: Calibri; font-size: 12; margin-left:13px; margin-top:310px">©2020 Aplikasi Pelayanan Desa(PeDes) | Credit by Admin | App. Version 1.0 </p>
    </div>
    </body>
</html>
<?php
    pg_close($db);
    ob_end_flush();
?>