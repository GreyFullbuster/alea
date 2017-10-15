<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */

class Player
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	public $id;

	/**
	 * Name of player.
     * @ORM\Column(name="name", type="string", length=255)
     */
	public $name;

	/**
	 * ID Team.
     * @ORM\Column(name="idTeam", type="integer")
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="team",
     *      joinColumns={@ORM\JoinColumn(name="idPlayer", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idTeam", referencedColumnName="id")}
     *      )
     */
	public $idTeam;

	/**
     * Many Players have Many Teams.
     * @ORM\Column(name="teams")
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="players")
     * @ORM\JoinTable(name="team_has_players")
     */
    public $teams;

	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setIdTeam($idTeam)
	{
		$this->idTeam = $idTeam;
	}

	public function getIdTeam()
	{
		return $this->idTeam;
	}

	public function setTeams($teams)
	{
		$this->teams = $teams;
	}

	public function getTeams()
	{
		return $this->teams;
	}

	public function __construct() {
        $this->idTeam = new \Doctrine\Common\Collections\ArrayCollection();
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
    }
}