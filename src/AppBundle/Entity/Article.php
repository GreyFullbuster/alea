<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */
class Article
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	public $id;

	/**
     * @ORM\Column(name="title", type="string", length=255)
     */
	public $title;


	/**
     * @ORM\Column(name="content", type="text", length=8000)
     */
	public $content;

	/**
     * @ORM\Column(name="author", type="string", length=255)
     */
	public $author;

	/**
     * @ORM\Column(name="date", type="date")
     */
	public $date;

	public function getId()
	{
		return $id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $title;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $content;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getAuthor()
	{
		return $author;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDate()
	{
		return $date;
	}

}