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
    /**
     * @var string
     */
    private $id_1;

    /**
     * @var integer
     */
    private $id_2;

    /**
     * @var string
     */
    private $field_1;

    /**
     * @var string
     */
    private $field_2;


    /**
     * Set id_1
     *
     * @param string $id1
     * @return Bike
     */
    public function setId1($id1)
    {
        $this->id_1 = $id1;

        return $this;
    }

    /**
     * Get id_1
     *
     * @return string 
     */
    public function getId1()
    {
        return $this->id_1;
    }

    /**
     * Set id_2
     *
     * @param integer $id2
     * @return Bike
     */
    public function setId2($id2)
    {
        $this->id_2 = $id2;

        return $this;
    }

    /**
     * Get id_2
     *
     * @return integer 
     */
    public function getId2()
    {
        return $this->id_2;
    }

    /**
     * Set field_1
     *
     * @param string $field1
     * @return Bike
     */
    public function setField1($field1)
    {
        $this->field_1 = $field1;

        return $this;
    }

    /**
     * Get field_1
     *
     * @return string 
     */
    public function getField1()
    {
        return $this->field_1;
    }

    /**
     * Set field_2
     *
     * @param string $field2
     * @return Bike
     */
    public function setField2($field2)
    {
        $this->field_2 = $field2;

        return $this;
    }

    /**
     * Get field_2
     *
     * @return string 
     */
    public function getField2()
    {
        return $this->field_2;
    }
}
