CREATE TABLE absensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    nama VARCHAR(255),
    role ENUM('guru','siswa'),
    waktu_absen DATETIME DEFAULT CURRENT_TIMESTAMP,
    keterangan VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(id)
);