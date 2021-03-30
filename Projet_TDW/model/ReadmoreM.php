<?php 
class ReadmoreM{
    static function getmore($idd){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM articles WHERE id=?');
          $exok= $pdostat->execute(array($idd));
          $forms = $pdostat->fetchAll();
    
        return $forms;
    }
}
?>