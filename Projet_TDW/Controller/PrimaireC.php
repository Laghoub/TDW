<?php
class PrimaireC{
    static function afficherP(){
        $req=getarticleP();
        require_once('/vue/primaire.php');
        /*
        $v= new Primaire();
        $v->afficher();
        */  
    }
}

?>