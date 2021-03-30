<?php

function delete($id){
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $articles = $dbd->prepare('DELETE FROM articles WHERE id=?');
    $affectedLines = $articles->execute(array($id));

    return $affectedLines;

}
function postArticle($nom, $description, $cycle, $image)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO articles(nom,description,cycle,image,date_creation) VALUES(?, ?, ?,?,NOW())');
    $affectedLines = $articles->execute(array($nom, $description, $cycle,$image));

    return $affectedLines;
}
function getarticle()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM articles ORDER BY date_creation DESC');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}

function getarticleP()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM articles WHERE cycle="Primaire" ORDER BY date_creation ASC');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}
function getarticleM()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM articles WHERE cycle="Moyen" ORDER BY date_creation ASC');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}

function getarticleS()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM articles WHERE cycle="Secondaire" ORDER BY date_creation ASC');
      $exok= $pdostat->execute();
      $forms = $pdostat->fetchAll();

	return $forms;
}

?>
