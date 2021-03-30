<?php
require_once('/model/EtudiantM.php');
class EtudiantC{
    static function etudiantPage($user){
        $info=EtudiantM::getinfoetud($user);
        $notes=EtudiantM::getnotes($user);
        $empst=EtudiantM::getemploistudent($user);
        require_once('/vue/Etudiant.php');
        
    }
}

?>