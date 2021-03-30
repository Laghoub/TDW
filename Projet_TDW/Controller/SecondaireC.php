<?php
class SecondaireC{
    static function afficherS(){
        $req=getarticleS();
        require_once('/vue/Secondaire.php');
        /*
        $v= new Primaire();
        $v->afficher();
        */  
    }
}

?>