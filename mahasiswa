<?php

abstract class Mahasiswa {
    
    // Properti Terenkapsulasi (Protected)
    // Dipetakan pas sesuai tipe data kolom database
    protected int $id_mahasiswa;
    protected string $nama_mahasiswa;
    protected string $nim;
    protected int $semester;
    protected float $tarif_ukt_nominal; 

    // Constructor pemetaan dari record database
    public function __construct(
        int $id_mahasiswa, 
        string $nama_mahasiswa, 
        string $nim, 
        int $semester, 
        float $tarif_ukt_nominal
    ) {
        $this->id_mahasiswa = $id_mahasiswa;
        $this->nama_mahasiswa = $nama_mahasiswa;
        $this->nim = $nim;
        $this->semester = $semester;
        $this->tarif_ukt_nominal = $tarif_ukt_nominal;
    }

    // --- METODE ABSTRAK WAJIB ---
    
    // 1. Logika perhitungan tagihan semester (wajib didefinisikan di class anak)
    abstract public function hitungTagihanSemester(): float;

    // 2. Logika penampilan spesifikasi akademik unik (wajib didefinisikan di class anak)
    abstract public function tampilkanSpesifikasiAkademik(): void;
}