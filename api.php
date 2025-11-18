<?php
require_once "controllers/AbsensiController.php";
$controller = new AbsensiController($db);
if ($_GET['route'] == 'absensi_masuk') {
    $controller->scanMasuk();
}
