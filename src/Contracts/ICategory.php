<?php

namespace App\Contracts;

use App\Contracts\IResource;

interface ICategory extends IResource
{
    public function getTitle();
}
