<?php

namespace App\Traits;

trait NeedsInspection
{
    public function inspect(): string
    {
        return "Doing General Inspection!";
    }

    public function fix(): string
    {
        return "Fixing!";
    }
}
