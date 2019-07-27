<?php

namespace App\Models;

use App\Models\ACLMediator;
use App\Models\CategoryRepository;

class ACLCategory extends ACLMediator 
{
    public function execute($method, $resource)
    {
        (new CategoryRepository)->$method($resource);
    }
}
