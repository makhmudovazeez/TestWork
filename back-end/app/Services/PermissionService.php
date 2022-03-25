<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;

class PermissionController
{
    public function findAll(array $filter = []){
        $permissions = Permission::all();
        return $permissions;
    }
}