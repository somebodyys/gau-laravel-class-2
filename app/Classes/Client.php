<?php

namespace App\Classes;

use App\Traits\HasRoles;

class Client
{
    use HasRoles;

    public string $first_name;
    public string $last_name;
    public string $email;
    public string $company;

    public function __construct(string $first_name, string $last_name, string $email, string $company)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->company = $company;
    }
}
