<?php

namespace espend\Doctrine\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bike
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="espend\Doctrine\ModelBundle\Entity\BikeRepository")
 */
class Bike
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
