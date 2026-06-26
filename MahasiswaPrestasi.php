<?php
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Database.php';

class MahasiswaPrestasi extends Mahasiswa {
// ... sisa kode di bawahnya biarkan sama ...
    // Properti tambahan khusus mahasiswa prestasi
    private string $nama_instansi_beasiswa;
    private float $minimal_ipk_syarat;

    public function __construct($id, $nama, $nim, $smt, $ukt, $instansi, $ipk) {
        parent::__construct($id, $nama, $nim, $smt, $ukt);
        $this->nama_instansi_beasiswa = $instansi;
        $this->minimal_ipk_syarat = $ipk;
    }

    // Implementasi menghitung tagihan (Mendapat potongan 50%)
    public function hitungTagihanSemester(): float {
        return $this->tarif_ukt_nominal * 0.5;
    }

    // Implementasi menampilkan informasi akademik khusus prestasi
    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== MAHASISWA JALUR PRESTASI ===\n";
        echo "Nama      : " . $this->nama_mahasiswa . "\n";
        echo "NIM       : " . $this->nim . "\n";
        echo "Beasiswa  : " . $this->nama_instansi_beasiswa . "\n";
        echo "Syarat IPK: " . $this->minimal_ipk_syarat . "\n";
        echo "Tagihan   : Rp " . number_format($this->hitungTagihanSemester(), 0, ',', '.') . "\n\n";
    }

    // Method SELECT WHERE: Mencari mahasiswa prestasi berdasarkan NAMA INSTANSI BEASISWA
    public static function getByInstansi($instansi) {
        $db = new Database();
        $sql = "SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'prestasi' AND nama_instansi_beasiswa = :instansi";
        $stmt = $db->koneksi->prepare($sql);
        $stmt->execute(['instansi' => $instansi]);
        return $stmt->fetchAll();
    }
}
?>
<?php
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Database.php';

class MahasiswaPrestasi extends Mahasiswa {
    private string $nama_instansi_beasiswa;
    private float $minimal_ipk_syarat;

    public function __construct($id, $nama, $nim, $smt, $ukt, $instansi, $ipk) {
        parent::__construct($id, $nama, $nim, $smt, $ukt);
        $this->nama_instansi_beasiswa = $instansi;
        $this->minimal_ipk_syarat = $ipk;
    }

    // TAHAP 5: Rumus Prestasi -> Tarif UKT Nominal * 0.25
    public function hitungTagihanSemester(): float {
        return $this->tarif_ukt_nominal * 0.25;
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== MAHASISWA JALUR PRESTASI ===\n";
        echo "Nama      : " . $this->nama_mahasiswa . "\n";
        echo "NIM       : " . $this->nim . "\n";
        echo "Beasiswa  : " . $this->nama_instansi_beasiswa . "\n";
        echo "Syarat IPK: " . $this->minimal_ipk_syarat . "\n";
        echo "Tagihan   : Rp " . number_format($this->hitungTagihanSemester(), 0, ',', '.') . "\n\n";
    }

    public static function getByInstansi($instansi) {
        $db = new Database();
        $sql = "SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'prestasi' AND nama_instansi_beasiswa = :instansi";
        $stmt = $db->koneksi->prepare($sql);
        $stmt->execute(['instansi' => $instansi]);
        return $stmt->fetchAll();
    }
}
?>