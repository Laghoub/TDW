<?php
function postEmploi($idC, $idJ,$hor1,$hor2,$hor3,$hor4,$hor5,$hor6,$hor7)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $articles = $dbd->prepare('INSERT INTO emploi(classe_id,id_jour,hor1,hor2,hor3,hor4,hor5,hor6,hor7) 
    VALUES(?, ?, ?,?, ?, ?,?,?,?)');
    $affectedLines = $articles->execute(array($idC, $idJ,$hor1,$hor2,$hor3,$hor4,$hor5,$hor6,$hor7));

    return $affectedLines;
}


function getEdtP()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM emploi NATURAL JOIN jours WHERE classe_id LIKE "_P_" ');
      $exok= $pdostat->execute();
      $edtp = $pdostat->fetchAll();

	return $edtp;
}

function getEdtM()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM emploi NATURAL JOIN jours WHERE classe_id LIKE "_M_" ');
      $exok= $pdostat->execute();
      $edtm = $pdostat->fetchAll();

	return $edtm;
}

function getEdtS()
{
    try
    {
        $db = new PDO('mysql:host=localhost;tdw=projet;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM emploi NATURAL JOIN jours WHERE classe_id LIKE "_S_" ');
      $exok= $pdostat->execute();
      $edtm = $pdostat->fetchAll();

	return $edtm;
}


?>