<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.5-dev (doctrine2-annotation) on 2014-12-07 18:21:30.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * FootBundle\Entity\Typematch
 *
 * @ORM\Entity(repositoryClass="TypematchRepository")
 * @ORM\Table(name="typematch")
 */
class Typematch
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(visible=false, filterable=false)
     */
    protected $id;

    /**
     * @ORM\Column(name="`type`", type="string", length=45)
     */
    protected $type;

    /**
     * @ORM\OneToMany(targetEntity="Match", mappedBy="typematch")
     * @ORM\JoinColumn(name="id", referencedColumnName="typematch_id")
     */
    protected $matches;

    public function __construct()
    {
        $this->matches = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \FootBundle\Entity\Typematch
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of type.
     *
     * @param string $type
     * @return \FootBundle\Entity\Typematch
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add Match entity to collection (one to many).
     *
     * @param \FootBundle\Entity\Match $match
     * @return \FootBundle\Entity\Typematch
     */
    public function addMatch(Match $match)
    {
        $this->matches[] = $match;

        return $this;
    }

    /**
     * Remove Match entity from collection (one to many).
     *
     * @param \FootBundle\Entity\Match $match
     * @return \FootBundle\Entity\Typematch
     */
    public function removeMatch(Match $match)
    {
        $this->matches->removeElement($match);

        return $this;
    }

    /**
     * Get Match entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatches()
    {
        return $this->matches;
    }

    public function __sleep()
    {
        return array('id', 'type');
    }
    public function __toString()
    {
        return $this->type;
    }
}