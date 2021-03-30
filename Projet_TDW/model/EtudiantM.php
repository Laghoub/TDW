<?php
 class EtudiantM{

    static public function getinfoetud($username)
    {
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM etudiants  WHERE login =? ');
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

    $pdostat = $db->prepare('SELECT * FROM notes  WHERE login =? ');
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

    $pdostat = $db->prepare('SELECT * from etudiants JOIN emploi on classe_id=classe NATURAL JOIN jours WHERE login =? ');
      $exok= $pdostat->execute(array($username));
      $etd = $pdostat->fetchAll();

	return $etd;
    }


 }