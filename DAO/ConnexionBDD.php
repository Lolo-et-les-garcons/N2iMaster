<?php
require '../../Controller/DBConnect.php';
class ConnexionBDD {
    private static $pdo;
 (
    public static function getConnection(){
        $bdd = DBConnect("mybddname");
        $bdd = $bdd->getPDO();
        return $bdd;
    }

    }
  }
?>