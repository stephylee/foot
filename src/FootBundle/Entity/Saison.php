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
 * FootBundle\Entity\Saison
 *
 * @ORM\Entity(repositoryClass="SaisonRepository")
 * @ORM\Table(name="saison")
 */
class Saison
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(visible=false, filterable=false)
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $debut;

    /**
     * @ORM\Column(type="date")
     */
    protected $fin;

    /**
     * @ORM\OneToMany(targetEntity="Equipe", mappedBy="saison")
     * @ORM\JoinColumn(name="id", referencedColumnName="saison_id")
     */
    protected $equipes;

    public function __construct()
    {
        $this->equipes = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \FootBundle\Entity\Saison
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
     * Set the value of debut.
     *
     * @param datetime $debut
     * @return \FootBundle\Entity\Saison
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get the value of debut.
     *
     * @return datetime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set the value of fin.
     *
     * @param datetime $fin
     * @return \FootBundle\Entity\Saison
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get the value of fin.
     *
     * @return datetime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Add Equipe entity to collection (one to many).
     *
     * @param \FootBundle\Entity\Equipe $equipe
     * @return \FootBundle\Entity\Saison
     */
    public function addEquipe(Equipe $equipe)
    {
        $this->equipes[] = $equipe;

        return $this;
    }

    /**
     * Remove Equipe entity from collection (one to many).
     *
     * @param \FootBundle\Entity\Equipe $equipe
     * @return \FootBundle\Entity\Saison
     */
    public function removeEquipe(Equipe $equipe)
    {
        $this->equipes->removeElement($equipe);

        return $this;
    }

    /**
     * Get Equipe entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipes()
    {
        return $this->equipes;
    }

    public function __sleep()
    {
        return array('id', 'debut', 'fin');
    }
    public function __toString()
    {
        return $this->debut->format('Y').'/'.$this->fin->format('Y');
    }
}
