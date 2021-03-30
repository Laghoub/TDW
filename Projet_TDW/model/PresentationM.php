<?php
function postPresentation($titre, $description, $image)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO presentation(titre,description,image) VALUES(?, ?, ?)');
    $affectedLines = $articles->execute(array($titre,$description,$image));

    return $affectedLines;
}

function getpresentation()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM presentation');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}

?>