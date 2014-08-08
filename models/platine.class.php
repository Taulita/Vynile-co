<?php
require_once("article.class.php");
class Platine extends Article
{
	private $marque;
	private $ficheTechnique;
	private $cheminImg;

	public function __construct()
	{
		$this->setCheminImg();
		$this->setCheminImg();
	}
	
	private function setCheminImg()
	{
		$this->cheminImg='sources/img/platine/'.$this->img.'.jpg';
	}
	public function getFicheTechnique()
	{
		return $this->ficheTechnique;
	}
	public function getMarque()
	{
		return $this->label;
	}
	public function getCheminImg()
	{
		return $this->cheminImg;
	}
	



}