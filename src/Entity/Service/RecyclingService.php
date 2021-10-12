<?php

namespace App\Entity\Service;
namespace App\Entity\Waste;

interface RecyclingService

{
    public function setWaste(AbstractWaste $waste)
    {
       

        parent::setMember($member);
    }
}