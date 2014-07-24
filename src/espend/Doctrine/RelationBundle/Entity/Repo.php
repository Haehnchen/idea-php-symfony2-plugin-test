<?php

namespace espend\Doctrine\RelationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repo
 */
class Repo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $repo;


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
     * Set repo
     *
     * @param integer $repo
     * @return Repo
     */
    public function setRepo($repo)
    {
        $this->repo = $repo;

        return $this;
    }

    /**
     * Get repo
     *
     * @return integer 
     */
    public function getRepo()
    {
        return $this->repo;
    }
}
