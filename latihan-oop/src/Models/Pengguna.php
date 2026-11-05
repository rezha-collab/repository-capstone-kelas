<?php
namespace App\Models;

use App\Contracts\BolehLogin;

class Pengguna implements BolehLogin
{
    public function __construct(
        protected string $nama,
        protected string $email,
        protected string $passwordHash
    ) {}

    public function login(string $password): bool
    {
        return password_verify($password, $this->passwordHash);
    }

    public function nama(): string
    {
        return $this->nama;
    }
}