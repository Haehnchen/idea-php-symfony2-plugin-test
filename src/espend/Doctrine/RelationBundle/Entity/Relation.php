<?php

namespace espend\Doctrine\RelationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relation
 */
class Relation
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
    private $foo;

    /**
     * @var \espend\Doctrine\RelationBundle\Entity\ForeignEntity
     */
    private $one_to_one;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $one_to_many;

    /**
     * @var \espend\Doctrine\RelationBundle\Entity\ForeignEntity
     */
    private $many_to_one;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $many_to_many;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->one_to_many = new \Doctrine\Common\Collections\ArrayCollection();
        $this->many_to_many = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set foo
     *
     * @param integer $foo
     * @return Relation
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * Get foo
     *
     * @return integer 
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * Set one_to_one
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToOne
     * @return Relation
     */
    public function setOneToOne(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToOne = null)
    {
        $this->one_to_one = $oneToOne;

        return $this;
    }

    /**
     * Get one_to_one
     *
     * @return \espend\Doctrine\RelationBundle\Entity\ForeignEntity 
     */
    public function getOneToOne()
    {
        return $this->one_to_one;
    }

    /**
     * Add one_to_many
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToMany
     * @return Relation
     */
    public function addOneToMany(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToMany)
    {
        $this->one_to_many[] = $oneToMany;

        return $this;
    }

    /**
     * Remove one_to_many
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToMany
     */
    public function removeOneToMany(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $oneToMany)
    {
        $this->one_to_many->removeElement($oneToMany);
    }

    /**
     * Get one_to_many
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOneToMany()
    {
        return $this->one_to_many;
    }

    /**
     * Set many_to_one
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToOne
     * @return Relation
     */
    public function setManyToOne(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToOne = null)
    {
        $this->many_to_one = $manyToOne;

        return $this;
    }

    /**
     * Get many_to_one
     *
     * @return \espend\Doctrine\RelationBundle\Entity\ForeignEntity 
     */
    public function getManyToOne()
    {
        return $this->many_to_one;
    }

    /**
     * Add many_to_many
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToMany
     * @return Relation
     */
    public function addManyToMany(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToMany)
    {
        $this->many_to_many[] = $manyToMany;

        return $this;
    }

    /**
     * Remove many_to_many
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToMany
     */
    public function removeManyToMany(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToMany)
    {
        $this->many_to_many->removeElement($manyToMany);
    }

    /**
     * Get many_to_many
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManyToMany()
    {
        return $this->many_to_many;
    }
    /**
     * @var \espend\Doctrine\RelationBundle\Entity\ForeignEntity
     */
    private $many_to_one_ns;


    /**
     * Set many_to_one_ns
     *
     * @param \espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToOneNs
     * @return Relation
     */
    public function setManyToOneNs(\espend\Doctrine\RelationBundle\Entity\ForeignEntity $manyToOneNs = null)
    {
        $this->many_to_one_ns = $manyToOneNs;

        return $this;
    }

    /**
     * Get many_to_one_ns
     *
     * @return \espend\Doctrine\RelationBundle\Entity\ForeignEntity 
     */
    public function getManyToOneNs()
    {
        return $this->many_to_one_ns;
    }
}
