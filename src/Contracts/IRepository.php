<?php

namespace App\Contracts;

use App\Contracts\IResource;

interface IRepository 
{
    public function store(IResource $resource);
    public function find(IResource $resource);
    public function findAll(IResource $resource);
    public function update(IResource $resource);
    public function destroy(IResource $resource);
}
