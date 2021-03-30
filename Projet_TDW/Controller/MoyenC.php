<?php
class MoyenC{
    static function afficherM(){
        $req=getarticleM();
        require_once('/vue/Moyen.php');
        /*
        $v= new Primaire();
        $v->afficher();
        */  
    }
}

?>