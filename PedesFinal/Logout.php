<?php
    session_start();
    $_SESSION["masyarakat_nik"];
    $_SESSION["masyarakat_nama"];
    $_SESSION["masyarakat_alamat"];

    unset($_SESSION["masyarakat_nik"]);
    unset($_SESSION["masyarakat_nama"]);
    unset($_SESSION["masyarakat_alamat"]);

    session_unset();
    session_destroy();

    header("Location: index.php");
?>