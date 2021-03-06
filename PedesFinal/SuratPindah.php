<!DOCTYPE html>
<html>
    <head>
        <title>Surat Pindah</title>
        <link rel="stylesheet" type="text/css" href="SuratPindah.css">
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
        <p> Masukkan Data Surat Pindah</p>
        <form>
            <input type="text" name="" placeholder="NIK"><br>
            <input type="text" name="" placeholder="Nama Lengkap"><br>
            <input type="text" name="" placeholder="No. Kartu Keluarga"><br>
            <input type="text" name="" placeholder="Nama Kepala Keluarga"><br>
            <input type="text" name="" placeholder="Alamat Sekarang"><br>

            <div id="alamaat">
                <form>
                    <input id="desa" type="text" name="" placeholder="Desa"> <input id="prov" type="text" name="" placeholder="Provinsi">
                    <input id="kota" type="text" name="" placeholder="Kab/Kota">            
                </form>    
            </div>

            <form>
            <input type="text" name="" placeholder="Alamat Tujuan Pindah"><br>

            <div id="alamaat">
                <form>
                    <input id="desa" type="text" name="" placeholder="Desa"> <input id="prov" type="text" name="" placeholder="Provinsi">
                    <input id="kota" type="text" name="" placeholder="Kab/Kota">            
                </form>
            </div>
            </form>
        </form>
        <br>
        <button onclick="" class="button">Simpan</button> <!-- Forward ke progress status surat -->
        <br>
        </div>
    </div>

    </body>
</html>