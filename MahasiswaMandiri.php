<?php
require_once 'Mahasiswa.php';
require_once 'koneksi.php';

class MahasiswaMandiri extends Mahasiswa {
    // Properti tambahan khusus mahasiswa mandiri
    private string $golongan_ukt;
    private string $nama_wali;

    // Constructor untuk memetakan nilai dari database
    public function __construct($id, $nama, $nim, $smt, $ukt, $golongan, $wali) {
        parent::__construct($id, $nama, $nim, $smt, $ukt);
        $this->golongan_ukt = $golongan;
        $this->nama_wali = $wali;
    }

    // Implementasi menghitung tagihan (Ada tambahan biaya admin Rp 500.000)
    public function hitungTagihanSemester(): float {
        return $this->tarif_ukt_nominal + 500000;
    }

    // Implementasi menampilkan informasi akademik khusus mandiri
    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== MAHASISWA JALUR MANDIRI ===\n";
        echo "Nama      : " . $this->nama_mahasiswa . "\n";
        echo "NIM       : " . $this->nim . "\n";
        echo "Golongan  : " . $this->golongan_ukt . "\n";
        echo "Nama Wali : " . $this->nama_wali . "\n";
        echo "Tagihan   : Rp " . number_format($this->hitungTagihanSemester(), 0, ',', '.') . "\n\n";
    }

    // Method SELECT WHERE: Mencari mahasiswa mandiri berdasarkan GOLONGAN UKT
    public static function getByGolonganUkt($golongan) {
        $db = new Database();
        $sql = "SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'mandiri' AND golongan_ukt = :golongan";
        $stmt = $db->koneksi->prepare($sql);
        $stmt->execute(['golongan' => $golongan]);
        return $stmt->fetchAll();
    }
}
?>