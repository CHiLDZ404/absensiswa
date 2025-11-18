<?php
require 'vendor/autoload.php';
use Endroid\QrCode\QrCode;

$kodeAbsensi = "ABSEN-" . date("Ymd-His");

$qr = new QrCode($kodeAbsensi);
$qr->setSize(250);

?>
<h2>QR Code Absensi</h2>
<p>Scan QR ini untuk melakukan absensi</p>
<img src="data:image/png;base64,<?= base64_encode($qr->writeString()); ?>" />
<p>Kode: <b><?= $kodeAbsensi ?></b></p>
