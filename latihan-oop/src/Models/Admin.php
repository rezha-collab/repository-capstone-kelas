<?php
namespace App\Models;

class Admin extends Pengguna
{
    public function hapusData(string $tabel): void
    {
        echo "Data tabel '{$tabel}' dihapus oleh admin.\n";
    }
}