<?php

namespace App\Entity\Service;
namespace App\Entity\Waste;

interface CompostingService
{
    public function setWaste(AbstractWaste $waste)
    {
       

        parent::setMember($member);
    }
}