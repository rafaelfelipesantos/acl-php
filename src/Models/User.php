<?php

namespace App\Models;

use App\Contracts\IUser;

abstract class User implements IUser 
{
    /** @var string $name */
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
