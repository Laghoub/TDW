<?php
class ParentM{
    static public function getinfoparent($username)
    {
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * from parents WHERE login =? ');
      $exok= $pdostat->execute(array($username));
      $etd = $pdostat->fetchAll();

	return $etd;
    }

    static public function getchildren($username)
    {
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM parents as p  JOIN etudiants as n ON p.login=n.login_p WHERE p.login =? ');
      $exok= $pdostat->execute(array($username));
      $etd = $pdostat->fetchAll();

	return $etd;
    }

    static public function getnotes($username)
    {
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT *
     FROM notes Natural JOIN etudiants JOIN parents on parents.login=etudiants.login_p WHERE parents.login=? ');
      $exok= $pdostat->execute(array($username));
      $etd = $pdostat->fetchAll();

	return $etd;
    }

    static public function getemploistudent($username)
    {
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT *
    FROM emploi  JOIN etudiants on classe_id=classe JOIN parents on parents.login=etudiants.login_p 
     Natural join jours WHERE parents.login=?');
      $exok= $pdostat->execute(array($username));
      $etd = $pdostat->fetchAll();

	return $etd;
    }
}