<?php

function postRepas($jour, $principale, $secondaire, $dessert, $boisson)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO repas(id,plat_principale,plat_secondaire,dessert,boisson) VALUES(?, ?, ?,?,?)');
    $affectedLines = $articles->execute(array($jour, $principale, $secondaire, $dessert, $boisson));

    return $affectedLines;
}

function getRepas()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM repas  JOIN jours ON id=id_jour Order by id ASC ');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}

function deleteRepas($id){
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $articles = $dbd->prepare('DELETE FROM repas WHERE id=?');
    $affectedLines = $articles->execute(array($id));

    return $affectedLines;

}

?>