<?php
function postContact($adr, $fax, $tel,$mail)
{
    try
    {
        $dbd = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $ctc = $dbd->prepare('INSERT INTO contact(adr,fax,tel,mail) VALUES(?, ?, ?,?)');
    $affectedLines = $ctc->execute(array($adr, $fax, $tel,$mail));

    return $affectedLines;
}

function getContact()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $pdostat = $db->prepare('SELECT * FROM contact');
      $exok= $pdostat->execute();
      $cls = $pdostat->fetchAll();

	return $cls;
}

?>