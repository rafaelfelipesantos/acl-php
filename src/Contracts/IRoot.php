<?php

namespace App\Contracts;

use App\Contracts\IUser;
use App\Contracts\IResource;

interface IRoot extends IUser
{
    public function getPermissions() : array;
}
