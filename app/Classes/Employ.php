<?php

namespace App\Classes;

use App\Traits\HasRoles;

class Employ
{
    use HasRoles;

    public string $first_name;
    public string $last_name;
    public string $email;
    public string $department;

    public function __construct(string $first_name, string $last_name, string $email, string $department)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->department = $department;
    }
}
