<?php

namespace App\Traits;

trait HasRoles
{
    public array $roles = [];

    public function assignRole(string $role): void
    {
        $this->roles[] = $role;
    }

    public function assignRoles(array $roles): void
    {
        $this->roles = array_merge($this->roles, $roles);
    }

    public function hasRole(string $role): bool
    {
        return in_array($role, $this->roles);
    }

    public function removeRole(string $role): void
    {
        $this->roles = array_filter($this->roles, fn($temp) => $temp !== $role);
    }

    public function syncRoles(array $roles): void
    {
        $this->roles = $roles;
    }
}
