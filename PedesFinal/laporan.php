<!DOCTYPE html>
<html>
    <head>
        <title>Buat Laporan</title>
        <link rel="stylesheet" type="text/css" href="laporan.css">
        <link rel="icon" type="image/png" href="logoPedes.png"/>
    </head>
    <body>
        <div id="header">
            <h1>Halo, User!</h1> <img id="Logo" src="logoPedes.png">
        </div>

        <div id="sidebar">
            <a href="Home_Page.php"><img id="side" src="home.png"; width="20px"; height="20px">Dashboard</a> <br> <!--sidebar dashboard-->
            <a href="Surats.php"><img id="side" src="email.png"; width="21px"; height="24px">Surat-surat</a> <br> <!--sidebar surat-surat-->
            <a href="progress.php"><img id="side" src="notifications.png"; width="20px"; height="20px">Progress Pembuatan Surat</a> <br> <!--sidebar progress-->
            <a href="laporan.php"><img id="side" src="exclamation-mark.png"; width="20px"; height="20px">Buat Laporan</a> <br> <!--sidebar laporan-->
            <a href="Login_Page.php"><img id="side" src="logout.png"; width="20px"; height="20px">Logout</a> <!--sidebar logout-->
        </div>

    <div class="kanan"><br>
        <div id="background">
        <p> Buat Laporan</p>
        <form>
            <input type="text" name="" placeholder="Judul Laporan"><br>
            <textarea type="text" name="" placeholder="Isi Laporan"></textarea> <br>
        </form>
        <br>
        <button onclick="" class="button">Simpan</button>
        </div>
    </div>

    </body>
</html>