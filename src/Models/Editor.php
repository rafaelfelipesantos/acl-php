<?php

namespace App\Models;

use App\Models\User;
use App\Contracts\IEditor;

final class Editor extends User implements IEditor
{
    /** @var array $permissions */
    private $permissions = ['store', 'find', 'findAll', 'update'];
    
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getPermissions() : array
    {
        return $this->permissions;
    }
}
