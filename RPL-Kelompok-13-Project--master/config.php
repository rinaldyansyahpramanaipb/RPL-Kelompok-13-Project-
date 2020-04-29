<?php
$db=pg_connect('host=localhost dbname=pelayanan user=postgres password=ilkomerz13');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
