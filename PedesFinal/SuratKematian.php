<!DOCTYPE html>
<html>
    <head>
        <title>Surat Keterangan Kematian</title>
        <link rel="stylesheet" type="text/css" href="SuratKematian.css">
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
        <p> Masukkan Data Surat Keterangan Kematian</p>
        <br>
        <p id="subb">Yang bertandatangan di bawah ini Kepala Desa menerangkan dengan sebenarnya bahwa:</p>
        <form>
            <input type="text" name="" placeholder="Nama Lengkap"><br>
            <input type="text" name="" placeholder="Tempat, tanggal lahir"><br>
            <input type="text" name="" placeholder="Jenis Kelamin"><br>
            <input type="text" name="" placeholder="Agama"><br>
            <input type="text" name="" placeholder="Alamat"><br>        
        <br>
        <p id="subbb">Menurut sepengetahuan kami bahwa nama tersebut di atas telah meninggal dunia pada:</p>
            <input type="text" name="" placeholder="Hari, tanggal"><br>
            <input type="text" name="" placeholder="Disebabkan oleh"><br>
            <input type="text" name="" placeholder="Dimakamkan di"><br>
            <br>
        </form>
        <br>
        <button onclick="" class="button">Simpan</button>
        </div>
    </div>

    </body>
</html>