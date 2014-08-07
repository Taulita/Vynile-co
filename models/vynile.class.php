<?php
require_once("article.class.php");
class Vinyl extends Article
{
	private $artiste;
	private $style;
	private $tracksFaceA;
	private $tracksFaceB;
	private $label;

	public function __construct()
	{
		$this->categorie='Vinyle';
	}
	public function getArtiste()
	{
		return $this->artiste;
	}
	public function getStyle()
	{
		return $this->style;
	}
	public function getTracksFaceA()
	{
		return $this->tracksFaceA;
	}
	public function getTracksFaceB()
	{
		return $this->tracksFaceB;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getLabel()
	{
		return $this->label;
	}
	



}