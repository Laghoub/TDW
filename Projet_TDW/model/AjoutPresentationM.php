<?php    
function getpresentation()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
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