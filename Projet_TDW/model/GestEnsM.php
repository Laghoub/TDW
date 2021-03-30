<?php
function postseance($log,$classe,$jour,$horaire)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO gestens(login,classe,id_jour,horaire) 
    VALUES(?, ?, ?,?)');
    $affectedLines = $articles->execute(array($log,$classe,$jour,$horaire));

    return $affectedLines;
}

function postheure($log,$jour,$horaire)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO heuresreception(login,id_jour,heure) 
    VALUES(?, ?,?)');
    $affectedLines = $articles->execute(array($log,$jour,$horaire));

    return $affectedLines;
}


function gethourswork($log)
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM gestens  NATURAL JOIN enseignant WHERE login =? ORDER BY id_jour ASC ');
      $exok= $pdostat->execute(array($log));
      $hrw = $pdostat->fetchAll();

	return $hrw;
}

function gethoursrecp($log)
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM heuresreception  NATURAL JOIN enseignant WHERE login =? ');
      $exok= $pdostat->execute(array($log));
      $hrw = $pdostat->fetchAll();

	return $hrw;
}
?>