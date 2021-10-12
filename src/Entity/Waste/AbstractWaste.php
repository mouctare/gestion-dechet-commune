<?php

namespace App\Entity\Waste;

abstract class AbstractWaste
{
    
   protected integer $quantity;

    public function __construct($quantity)
    {
        
        $this->$quatity = $quantity;
        
    }

    
}
