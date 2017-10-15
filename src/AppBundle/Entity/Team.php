<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */

class Team
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	public $id;

	/**
	 * Name of Team.
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
	public $name;

	/**
     * Many Teams have Many Players.
     * @ORM\Column(name="players", type="simple_array")
     * @ORM\ManyToMany(targetEntity="Player", mappedBy="teams")
     */
	public $players;

	public function getId()
	{
		return $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPlayers($players)
	{
		$this->players = $players;
	}

	public function getPlayers()
	{
		return $this->players;
	}

	public function __construct() {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }

}