<?php

namespace App\Models;


class CategoryPage 
{
    public $category = [];

    function __construct($category ) {
        $this->category = $category;
       
    }

    
}
