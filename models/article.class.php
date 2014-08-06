<?php

class Article
{
	protected $nom;
	protected $categorie;
	protected $tauxTVA=20/100;
	protected $tva;
	protected $stock;
	protected $prixHT;
	protected $prixTTC;

		
	private function calculTVA($prix)
	{
		$this->tva=$prix*$this->tauxTVA;
	}

	private function calculHT($prix)
	{
		$this->prixHT=$prix-$this->prix;
	}

	
	public function getCategorie()
	{
		return $this->categorie;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getTva()
	{
		return $this->tva;
	}

	public function getPrixHT()
	{
		return $this->prixHT;
	}

	public function getPrixTTC()
	{
		return $this->PrixTTC;
	}

	public function getStock()
	{
		return $this->stock;
	}

}