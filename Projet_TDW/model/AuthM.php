<?php
function auth($uname,$password)
{
    session_start();
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sel=$dbd->prepare("select * from users where login=? AND mdp=? limit 1");
	$sel->execute(array($uname,$password));
      $tab=$sel->fetchAll();
      return $tab;
}

function authE($uname,$password)
{
    session_start();
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sel=$dbd->prepare("select * from etudiants where login=? AND mdp=? limit 1");
	$sel->execute(array($uname,$password));
      $tab=$sel->fetchAll();
      return $tab;
}

function authP($uname,$password)
{
    session_start();
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sel=$dbd->prepare("select * from parents where login=? AND mdp=? limit 1");
	$sel->execute(array($uname,$password));
      $tab=$sel->fetchAll();
      return $tab;
}

?>