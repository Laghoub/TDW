<?php

class AccueilC{
    static function afficher(){
        $req=getarticle();
        require_once('/vue/Accueil.php');
        /*
        $v= new Accueil();
        $v->afficher();
        */
    }
}

?>