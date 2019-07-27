<?php

namespace App\Models;

use App\Models\User;
use App\Contracts\IRoot;

final class Root extends User implements IRoot
{
    /** @var array $permissions */
    private $permissions = ['store', 'find', 'findAll', 'update', 'destroy'];
    
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getPermissions() : array
    {
        return $this->permissions;
    }
}
