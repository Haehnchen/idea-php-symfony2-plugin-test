<?php

namespace espend\Doctrine\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 */
class Car
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
