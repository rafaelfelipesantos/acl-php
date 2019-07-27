<?php

namespace App\Models;

use App\Contracts\ICategory;

class Category implements ICategory 
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
