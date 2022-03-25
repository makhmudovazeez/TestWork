<?php

namespace App\Services;

use Spatie\Permission\Contracts\Role;

class PermissionController
{
    public function findAll(array $filter = []){
        $roles = Role::all();
        return $roles;
    }
}