<?php
Class Ressource {
    private $id;
    private $nom;
    private $quantite;
    private $categorie;

    public function __construct() {
        $this->id=null;
        $this->nom=null;
        $this->quantite=null;
        $this->categorie=null;
    }

    public function creer_securitairement($id, $nom, $quantite, $categorie) {
        $this->id=$id;
        $this->nom=$nom;
        $this->quantite=$quantite;
        $this->categorie=$categorie;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

}
?>