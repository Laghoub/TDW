<?php
function postadmin($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO users(login,mdp,nom,prenom,adresse,tel1,tel2,tel3,email) 
    VALUES(?, ?, ?,?, ?, ?,?,?,?)');
    $affectedLines = $articles->execute(array($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email));

    return $affectedLines;
}

function postens($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email,$matiere)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO enseignant(login,mdp,nom,prenom,adresse,tel1,tel2,tel3,email,matiere) 
    VALUES(?, ?, ?,?, ?, ?,?,?,?,?)');
    $affectedLines = $articles->execute(array($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email,$matiere));

    return $affectedLines;
}

function postetud($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email,$classe,$parent)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO etudiants(login,mdp,nom,prenom,date_naissance,adresse,tel1,tel2,tel3,email,classe,login_p) 
    VALUES(?, ?, ?,?, ?, ?,?,?,?,?,?,?)');
    $affectedLines = $articles->execute(array($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email,$classe,$parent));

    return $affectedLines;
}

function getadmin()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
        $pdostat = $db->prepare('SELECT * FROM users ');
        $exok= $pdostat->execute();
        $us = $pdostat->fetchAll();
    

	return $us;
}

function getens()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant ');
        $exok= $pdostat->execute();
        $us = $pdostat->fetchAll();
    

    

	return $us;
}

function getetud()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
        $pdostat = $db->prepare('SELECT * FROM etudiants ');
        $exok= $pdostat->execute();
        $us = $pdostat->fetchAll();
    

    

	return $us;
}
function getparents()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
        $pdostat = $db->prepare('SELECT * FROM parents ');
        $exok= $pdostat->execute();
        $prt = $pdostat->fetchAll();
    

    

	return $prt;
}

function deletedens($id){
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $articles = $dbd->prepare('DELETE FROM enseignant WHERE id=?');
    $affectedLines = $articles->execute(array($id));

    return $affectedLines;

}

function deleteadmin($id){
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $articles = $dbd->prepare('DELETE FROM users WHERE id=?');
    $affectedLines = $articles->execute(array($id));

    return $affectedLines;

}

function deleteetud($id){
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $articles = $dbd->prepare('DELETE FROM etudiants WHERE id=?');
    $affectedLines = $articles->execute(array($id));

    return $affectedLines;

}

function postparent($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO parents(login,mdp,nom,prenomp,date_naissance,adresse,tel1,tel2,tel3,email) 
    VALUES(?, ?, ?,?, ?, ?,?,?,?,?)');
    $affectedLines = $articles->execute(array($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email));

    return $affectedLines;
}


?>