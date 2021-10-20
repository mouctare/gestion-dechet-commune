<?php

namespace App\Entity\Waste;

abstract class AbstractWaste
{
    
    protected $co2Emission = [];
    protected $quantity = [];
    

  public function getQuantity(): array
  {
    return $this->quantity;
  }

  public function addQuantity(array $quantities)
  {
   
  }

  public function removeQuantity(array $quantities)
  {
  
  }

  public function getCo2Emission(): array
  {
    return $this->co2Emission;
  }

  public function setCo2Emission(array $co2Emissions)
  {
   
  }

  
}
