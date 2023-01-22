<?php

namespace App\Models;


class AboutMePage 
{
    public $profile = [];
    public $competances = [];
    public $universityitem = [];
    function __construct($profile,$competances,$universityitem) {
        $this->profile = $profile;
        $this->competances = $competances;
        $this->universityitem = $universityitem;
    }

    
}
