<?php

class Article
{
	protected $id;
	protected $nom;
	protected $annee;
	protected $categorie;
	protected $marque;
	protected $tauxTVA;
	protected $prixHT;
	protected $prixTTC;
	protected $stock;
	protected $description;

		
	private function calculTVA($prix)
	{
		$this->tva=$prix*$this->tauxTVA;
	}

	private function calculHT($prix)
	{
		$this->prixHT=$prix-$this->prix;
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
	public function getMarque()
	{
		return $this->marque;
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
		return $this->prixHT * $this->tauxTVA;
	}

	public function getStock()
	{
		return $this->stock;
	}
	public function getDescription()
	{
		return $this->description;
	}

}