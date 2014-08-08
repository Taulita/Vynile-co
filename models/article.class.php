<?php

class Article
{
	protected $id;
	protected $nom;
	protected $img;
	protected $annee;
	protected $categorie;
	protected $tauxTVA;
	protected $prixHT;
	protected $prixTTC;
	protected $stock;
	protected $vendu;
	protected $brefDescriptif;

		
	private function calculTVA()
	{
		$this->tva=$this->prixHT*$this->tauxTVA;
	}

	private function calculHT()
	{
		$this->prixHT=$this->prixTTC/1.20;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getAnnee()
	{
		return $this->annee;
	}
	public function getCategorie()
	{
		return $this->categorie;
	}
	public function getTauxTva()
	{
		return $this->tauxTVA;
	}

	public function getPrixHT()
	{
		return $this->prixHT;
	}

	public function getPrixTTC()
	{
		return $this->prixTTC;
	}

	public function getStock()
	{
		return $this->stock;
	}
	public function getDescription()
	{
		return $this->brefDescriptif;
	}
	public function getImg()
	{
		return $this->img;
	}
	public function getVendu()
	{
		return $this->vendu;
	}

}