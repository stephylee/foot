<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.5-dev (doctrine2-annotation) on 2014-12-07 18:21:30.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FootBundle\Entity\MatchHasButeur
 *
 * @ORM\Entity(repositoryClass="MatchHasButeurRepository")
 * @ORM\Table(name="match_has_buteur", indexes={@ORM\Index(name="fk_match_has_user_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_match_has_user_match1_idx", columns={"match_id"})})
 */
class MatchHasButeur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(name="`minute`", type="integer", nullable=true)
     */
    protected $minute;

    /**
     * @ORM\ManyToOne(targetEntity="Match", inversedBy="matchHasButeurs")
     * @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     */
    protected $match;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="matchHasButeurs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \FootBundle\Entity\MatchHasButeur
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
     * Set the value of minute.
     *
     * @param integer $minute
     * @return \FootBundle\Entity\MatchHasButeur
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get the value of minute.
     *
     * @return integer
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Set Match entity (many to one).
     *
     * @param \FootBundle\Entity\Match $match
     * @return \FootBundle\Entity\MatchHasButeur
     */
    public function setMatch(Match $match = null)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get Match entity (many to one).
     *
     * @return \FootBundle\Entity\Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set User entity (many to one).
     *
     * @param \FootBundle\Entity\User $user
     * @return \FootBundle\Entity\MatchHasButeur
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User entity (many to one).
     *
     * @return \FootBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __sleep()
    {
        return array('id', 'match_id', 'user_id', 'minute');
    }
}
