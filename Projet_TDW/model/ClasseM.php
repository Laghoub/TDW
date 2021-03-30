<?php
function postClasse($cycle, $niveau, $groupe)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO classe(id_cycle,niveau,id_classe) VALUES(?, ?, ?)');
    $affectedLines = $articles->execute(array($cycle, $niveau, $groupe));

    return $affectedLines;
}

function getClasse()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM classe NATURAL JOIN cycle ORDER BY id_cycle,niveau ASC');
      $exok= $pdostat->execute();
      $cls = $pdostat->fetchAll();

	return $cls;
}

?>