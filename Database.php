<?php

class Database {
    // 1. Pengaturan Database (Langsung pas dengan file SQL sebelumnya)
    private $host     = "localhost";
    private $username = "root";         // Default XAMPP
    private $password = "";             // Default XAMPP (kosong)
    private $database = "db_akademik";   // Nama database dari file SQL kamu
    public $koneksi;

    // 2. Constructor: Otomatis tersambung begitu Objek dibuat
    public function __construct() {
        try {
            // Menggunakan PDO (Standard OOP PHP)
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8mb4";
            
            $this->koneksi = new PDO($dsn, $this->username, $this->password);
            
            // Pengaman: Jika ada typo di SQL/Tabel, PHP langsung kasih tahu errornya di sebelah mana
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Pengubah: Mengubah hasil database otomatis jadi bentuk objek biar klop dengan PBO
            $this->koneksi->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            // Jika database belum dinyalakan di XAMPP atau nama db salah, muncul pesan ini
            die("Gagal Terhubung! Pastikan MySQL di XAMPP sudah START. Pesan Error: " . $e->getMessage());
        }
    }
}