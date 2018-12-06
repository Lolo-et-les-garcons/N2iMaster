<?php
require_once "ModeleRessource";
class DAORessource {
    private static $bdd; //une instance de PDO pour accéder à la base de données
    public function __construct(){}

    public function setBd(PDO $bd)
    {
        $bdd = $bd;
    }

    public static function ajouter(Ressource $ressource)
    {
        $bdd = ConnexionBDD::getConnection();
        $requete = $bdd->prepare('INSERT INTO Ressource(id, categorie, nom, quantite) VALUES(:id, :categorie, :nom, :quantite)');
        $requete->bindValue(':id', $ressource->getId());
        $requete->bindValue(':categorie', $ressource->getCategorie());
        $requete->bindValue(':nom', $ressource->getNom());
        $requete->bindValue(':quantite', $ressource->getQuantite());
        $requete->execute();
    }

    public static function supprimer(Groupe $groupe)
    {
        $bdd = ConnexionBDD::getConnection();
        $requete = $bdd->prepare('DELETE FROM groupe WHERE nom = :nom and chefDeGroupe = :chefDeGroupe');
        $requete->bindValue(':nom', $groupe->getNom());
        $requete->bindValue(':chefDeGroupe', $groupe->getChefDeGroupe());
        $requete->execute();
    }

}
?>