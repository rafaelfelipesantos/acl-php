<?php

namespace App\Models;

use App\Contracts\IRepository;
use App\Contracts\IResource;

class CategoryRepository implements IRepository 
{
    public function store(IResource $resource)
    {
        echo "Store {$resource->getTitle()}" . PHP_EOL;
    }

    public function find(IResource $resource)
    {
        echo "Find {$resource->getTitle()}" . PHP_EOL;
    }

    public function findAll(IResource $resource)
    {
        echo "FindAll {$resource->getTitle()}" . PHP_EOL;
    }

    public function update(IResource $resource)
    {
        echo "Update {$resource->getTitle()}" . PHP_EOL;
    }

    public function destroy(IResource $resource)
    {
        echo "Destroy {$resource->getTitle()}" . PHP_EOL;
    }
}
