<?php
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Database.php';

class MahasiswaBidikmisi extends Mahasiswa {
// ... sisa kode di bawahnya biarkan sama ...
    // Properti tambahan khusus mahasiswa bidikmisi
    private string $nomor_kip_kuliah;
    private float $dana_saku_subsidi;

    public function __construct($id, $nama, $nim, $smt, $ukt, $no_kip, $dana_saku) {
        parent::__construct($id, $nama, $nim, $smt, $ukt);
        $this->nomor_kip_kuliah = $no_kip;
        $this->dana_saku_subsidi = $dana_saku;
    }

    // Implementasi menghitung tagihan (Bidikmisi gratis / Rp 0)
    public function hitungTagihanSemester(): float {
        return 0.0;
    }

    // Implementasi menampilkan informasi akademik khusus bidikmisi
    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== MAHASISWA JALUR BIDIKMISI ===\n";
        echo "Nama      : " . $this->nama_mahasiswa . "\n";
        echo "NIM       : " . $this->nim . "\n";
        echo "No KIP    : " . $this->nomor_kip_kuliah . "\n";
        echo "Dana Saku : Rp " . number_format($this->dana_saku_subsidi, 0, ',', '.') . "/bulan\n";
        echo "Tagihan   : Rp " . number_format($this->hitungTagihanSemester(), 0, ',', '.') . "\n\n";
    }

    // Method SELECT WHERE: Mencari mahasiswa bidikmisi berdasarkan SEMESTER
    public static function getBySemester($semester) {
        $db = new Database();
        $sql = "SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'bidikmisi' AND semester = :semester";
        $stmt = $db->koneksi->prepare($sql);
        $stmt->execute(['semester' => $semester]);
        return $stmt->fetchAll();
    }
}
?>
<?php
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Database.php';

class MahasiswaBidikmisi extends Mahasiswa {
    private string $nomor_kip_kuliah;
    private float $dana_saku_subsidi;

    public function __construct($id, $nama, $nim, $smt, $ukt, $no_kip, $dana_saku) {
        parent::__construct($id, $nama, $nim, $smt, $ukt);
        $this->nomor_kip_kuliah = $no_kip;
        $this->dana_saku_subsidi = $dana_saku;
    }

    // TAHAP 5: Rumus Bidikmisi -> Total Tagihan = 0
    public function hitungTagihanSemester(): float {
        return 0.0;
    }

    public function tampilkanSpesifikasiAkademik(): void {
        echo "=== MAHASISWA JALUR BIDIKMISI ===\n";
        echo "Nama      : " . $this->nama_mahasiswa . "\n";
        echo "NIM       : " . $this->nim . "\n";
        echo "No KIP    : " . $this->nomor_kip_kuliah . "\n";
        echo "Dana Saku : Rp " . number_format($this->dana_saku_subsidi, 0, ',', '.') . "/bulan\n";
        echo "Tagihan   : Rp " . number_format($this->hitungTagihanSemester(), 0, ',', '.') . "\n\n";
    }

    public static function getBySemester($semester) {
        $db = new Database();
        $sql = "SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'bidikmisi' AND semester = :semester";
        $stmt = $db->koneksi->prepare($sql);
        $stmt->execute(['semester' => $semester]);
        return $stmt->fetchAll();
    }
}
?>