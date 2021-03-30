<?php
require_once('/model/EmploiM.php');

class EdtPC{
    static function afficherEdtP(){
        $edtp=getEdtP();
        require_once('/vue/EDT/EdtP.php');
    
    }

    static function afficherEdtM(){
        $edtp=getEdtM();
        require_once('/vue/EDT/EdtM.php');
    }

    static function afficherEdtS(){
        $edtp=getEdtS();
        require_once('/vue/EDT/EdtS.php');
    }

}


    ?>