<!DOCTYPE html>
<html>
    <head>
        <title>Progress Pembuatan Surat</title>
        <link rel="stylesheet" type="text/css" href="progress_Admin.css">
        <link rel="icon" type="image/png" href="logoPedes.png"/>
    </head>
    <body>
        <div id="header">
            <h1>Halo, Admin!</h1> <img id="Logo" src="logoPedes.png">
        </div>

        <div id="sidebar">
            <a href="Home_Page_Admin.php"><img id="side" src="home.png"; width="20px"; height="20px">Dashboard</a> <br> <!--sidebar dashboard-->
            <a href="Data_Surat_Admin.php"><img id="side" src="email.png"; width="21px"; height="24px">Data Surat-surat</a> <br> <!--sidebar surat-surat-->
            <a href="progress_Admin.php"><img id="side" src="notifications.png"; width="20px"; height="20px">Data Progress Surat</a> <br> <!--sidebar progress-->
            <a href="laporan_Admin.php"><img id="side" src="exclamation-mark.png"; width="20px"; height="20px">Periksa Laporan</a> <br> <!--sidebar laporan-->
            <a href="Login_Page_Admin.php"><img id="side" src="logout.png"; width="20px"; height="20px">Logout</a> <!--sidebar logout-->
        </div>

    <div class="kanan">
        <p> Progress Surat</p>

        <table id="tabell">
            <tr>
                <th id="nomor">No. Surat</th>
                <th id="namasurat">Nama Surat</th> 
                <th id="status">Status</th>
                <th id="status">Aksi</th>      
            </tr>
             <tr>
                <td>Contoh No 1</td>
                <td>Contoh nama surat(surat pindah, dll)</td>
                <td>Selesai, bisa diambil pada 18 April 2020</td>
                <td><a href="" id="aksi">Update | Lihat | Hapus</a></td>
            </tr>
        </table>

    </div>

    </body>
</html>