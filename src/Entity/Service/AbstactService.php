<?php

namespace App\Entity\WService;
namespace App\Entity\Waste;

abstract class AbstractService
{
    
   protected integer $quantity;
   protected integer  $processingCapacity;
   protected ?AbstractWaste $waste;
 
    public function __construct($quantity, $processingCapacity)
    {
        
        $this->quatity = $quantity;
        $this->processingCapacity = $processingCapacity;
        $this->waste = null;
    }

    public function getWaste(): ?AbstractWaste
    {
        return $this->waste;
    }

    public function setWaste(AbstractWaste $waste)
    {
        $this->waste = $waste;
    }

  
    
}
