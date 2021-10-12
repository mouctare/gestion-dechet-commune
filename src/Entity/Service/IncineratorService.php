<?php

namespace App\Entity\Service;
namespace App\Entity\Waste;

interface IncineratorService
{
    public function setWaste(AbstractWaste $waste)
    {
       

        parent::setMember($member);
    }
}