<?php

namespace App;

class PostcardServices{

    public $country , $width;
    public function __construct($country , $width)
    {
        $this->country = $country;
        $this->width = $width;
    }

    public function hello($message,$email){

        dd($message." Email is = ".$email);
    }


}
