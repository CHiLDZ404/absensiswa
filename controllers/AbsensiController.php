<?php
class AbsensiController {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function qrPage() {
        include "views/absensi/qr_generate.php";
    }

    public function scanMasuk() {
        $data = json_decode(file_get_contents("php://input"), true);
        $qr = $data['qr_data'];

        session_start();
        $user_id = $_SESSION['user_id'];
        $nama = $_SESSION['nama'];
        $role = $_SESSION['role'];

        $stmt = $this->conn->prepare("INSERT INTO absensi (user_id, nama, role, keterangan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $nama, $role, $qr);

        if ($stmt->execute()) {
            echo json_encode(["message" => "Absensi berhasil disimpan"]);
        } else {
            echo json_encode(["message" => "Gagal menyimpan absensi"]);
        }
    }
}
