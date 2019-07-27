<?php

namespace App\Contracts;

interface IAuthorization 
{
    public function hasPermissions($action);
}
