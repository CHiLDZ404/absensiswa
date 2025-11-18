<script src="https://unpkg.com/html5-qrcode"></script>
<h2>Scan QR Absensi</h2>
<div id="reader" style="width: 300px;"></div>
<script>
function onScanSuccess(decodedText) {
    fetch('/api/absensi_masuk', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ qr_data: decodedText })
    })
    .then(r => r.json())
    .then(resp => alert(resp.message));
}
new Html5QrcodeScanner("reader", { fps: 10, qrbox: 250 }).render(onScanSuccess);
</script>
