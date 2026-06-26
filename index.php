<?php
require_once 'MahasiswaMandiri.php';
require_once 'MahasiswaBidikmisi.php';
require_once 'MahasiswaPrestasi.php';

// Tes Query Mandiri Golongan 3
$data = MahasiswaMandiri::getByGolonganUkt("Golongan 3");

foreach ($data as $row) {
    $mhs = new MahasiswaMandiri(
        $row->id_mahasiswa, 
        $row->nama_mahasiswa, 
        $row->nim, 
        $row->semester, 
        $row->tarif_ukt_nominal, 
        $row->golongan_ukt,
        "Budi (Wali)" // Contoh isi manual properti tambahan
    );
    $mhs->tampilkanSpesifikasiAkademik();
}
?>