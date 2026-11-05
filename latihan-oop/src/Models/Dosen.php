<?php
namespace App\Models;

use App\Contracts\BolehLogin;

class Dosen extends Pengguna implements BolehLogin
{
    public function __construct(
        string $nama,
        string $email,
        string $passwordHash,
        public array $mataKuliah = []
    ) {
        parent::__construct($nama, $email, $passwordHash);
    }

    public function tampilkanMataKuliah(): string
    {
        return $this->nama() . " mengampu: "
            . implode(", ", $this->mataKuliah);
    }
}