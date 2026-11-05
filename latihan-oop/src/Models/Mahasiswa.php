<?php
namespace App\Models;

class Mahasiswa
{
    public string $nama;
    public float $ipk;

    public function __construct(string $nama, float $ipk)
    {
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function statusKelulusan(): string
    {
        return $this->ipk >= 3.0 ? "Cumlaude" : "Reguler";
    }

    public function sapa(): string
    {
        return "Halo, saya {$this->nama} (IPK {$this->ipk}).";
    }
}