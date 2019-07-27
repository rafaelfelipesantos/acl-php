<?php

namespace App\Contracts;

use App\Contracts\IUser;
use App\Contracts\IResource;

interface IEditor extends IUser
{
    public function getPermissions() : array;
}
