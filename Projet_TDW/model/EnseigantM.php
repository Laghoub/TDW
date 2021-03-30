<?php
 class EnseignantM{

    static function getensprim(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN gestens
        WHERE classe LIKE "_P_"');
          $exok= $pdostat->execute();
          $ensprm = $pdostat->fetchAll();
    
        return $ensprm;
    }

    static function getensprimrecp(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN heuresreception  ORDER BY nom ASC');
          $exok= $pdostat->execute();
          $ensprmrecp = $pdostat->fetchAll();
    
        return $ensprmrecp;
    }

    static function getensmoy(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN gestens 
        WHERE classe LIKE "_M_"');
          $exok= $pdostat->execute();
          $ensprm = $pdostat->fetchAll();
    
        return $ensprm;
    }

    static function getensprimrecm(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN heuresreception ORDER BY nom ASC');
          $exok= $pdostat->execute();
          $ensprmrecp = $pdostat->fetchAll();
    
        return $ensprmrecp;
    }
    static function getenssec(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN gestens 
        WHERE classe LIKE "_S_"');
          $exok= $pdostat->execute();
          $ensprm = $pdostat->fetchAll();
    
        return $ensprm;
    }

    static function getensprimrecs(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $pdostat = $db->prepare('SELECT * FROM enseignant  NATURAL JOIN heuresreception ORDER BY nom ASC');
          $exok= $pdostat->execute();
          $ensprmrecp = $pdostat->fetchAll();
    
        return $ensprmrecp;
    }
 }