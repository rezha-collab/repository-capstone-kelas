<?php
namespace App\Contracts;

interface BolehLogin
{
    public function login(string $password): bool;
}