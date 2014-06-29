<?php

namespace espend\Doctrine\RelationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForeignEntity
 */
class ForeignEntity
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
    /**
     * @var integer
     */
    private $field_1;


    /**
     * Set field_1
     *
     * @param integer $field1
     * @return ForeignEntity
     */
    public function setField1($field1)
    {
        $this->field_1 = $field1;

        return $this;
    }

    /**
     * Get field_1
     *
     * @return integer 
     */
    public function getField1()
    {
        return $this->field_1;
    }
}
