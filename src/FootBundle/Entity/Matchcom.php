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

/**
 * FootBundle\Entity\Matchcom
 *
 * @ORM\Entity(repositoryClass="MatchcomRepository")
 * @ORM\Table(name="matchcom", indexes={@ORM\Index(name="fk_comment_match1_idx", columns={"match_id"}), @ORM\Index(name="fk_comment_user1_idx", columns={"user_id"})})
 */
class Matchcom
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="`comment`", type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $datecrea;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $datemodif;

    /**
     * @ORM\Column(type="integer")
     */
    protected $match_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $user_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    protected $note;

    /**
     * @ORM\OneToMany(targetEntity="Imgmatchcom", mappedBy="matchcom")
     * @ORM\JoinColumn(name="id", referencedColumnName="comment_id")
     */
    protected $imgmatchcoms;

    /**
     * @ORM\ManyToOne(targetEntity="Match", inversedBy="matchcoms")
     * @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     */
    protected $match;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="matchcoms")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function __construct()
    {
        $this->imgmatchcoms = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \FootBundle\Entity\Matchcom
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
     * Set the value of comment.
     *
     * @param string $comment
     * @return \FootBundle\Entity\Matchcom
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of datecrea.
     *
     * @param datetime $datecrea
     * @return \FootBundle\Entity\Matchcom
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        return $this;
    }

    /**
     * Get the value of datecrea.
     *
     * @return datetime
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set the value of datemodif.
     *
     * @param datetime $datemodif
     * @return \FootBundle\Entity\Matchcom
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get the value of datemodif.
     *
     * @return datetime
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set the value of match_id.
     *
     * @param integer $match_id
     * @return \FootBundle\Entity\Matchcom
     */
    public function setMatchId($match_id)
    {
        $this->match_id = $match_id;

        return $this;
    }

    /**
     * Get the value of match_id.
     *
     * @return integer
     */
    public function getMatchId()
    {
        return $this->match_id;
    }

    /**
     * Set the value of user_id.
     *
     * @param integer $user_id
     * @return \FootBundle\Entity\Matchcom
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of user_id.
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of note.
     *
     * @param float $note
     * @return \FootBundle\Entity\Matchcom
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of note.
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add Imgmatchcom entity to collection (one to many).
     *
     * @param \FootBundle\Entity\Imgmatchcom $imgmatchcom
     * @return \FootBundle\Entity\Matchcom
     */
    public function addImgmatchcom(Imgmatchcom $imgmatchcom)
    {
        $this->imgmatchcoms[] = $imgmatchcom;

        return $this;
    }

    /**
     * Remove Imgmatchcom entity from collection (one to many).
     *
     * @param \FootBundle\Entity\Imgmatchcom $imgmatchcom
     * @return \FootBundle\Entity\Matchcom
     */
    public function removeImgmatchcom(Imgmatchcom $imgmatchcom)
    {
        $this->imgmatchcoms->removeElement($imgmatchcom);

        return $this;
    }

    /**
     * Get Imgmatchcom entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImgmatchcoms()
    {
        return $this->imgmatchcoms;
    }

    /**
     * Set Match entity (many to one).
     *
     * @param \FootBundle\Entity\Match $match
     * @return \FootBundle\Entity\Matchcom
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
     * @return \FootBundle\Entity\Matchcom
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
        return array('id', 'comment', 'datecrea', 'datemodif', 'match_id', 'user_id', 'note');
    }
}
