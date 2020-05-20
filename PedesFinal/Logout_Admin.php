<?php
    session_start();
    $_SESSION["sipil_nip"];
    $_SESSION["sipil_nama"];
    $_SESSION["sipil_jabatan"];
    $_SESSION["sipil_alamat"];

    unset($_SESSION["sipil_nip"]);
    unset($_SESSION["sipil_nama"]);
    unset($_SESSION["sipil_jabatan"]);
    unset($_SESSION["sipil_alamat"]);

    session_unset();
    session_destroy();

    header("Location: index.php");
?>