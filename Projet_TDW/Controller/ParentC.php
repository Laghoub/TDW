<?php
require_once('/model/ParentM.php');
class ParentC{
    static function parentPage($user){
        $info=ParentM::getinfoparent($user);
        $child=ParentM::getchildren($user);
        $notes=ParentM::getnotes($user);
        $empst=ParentM::getemploistudent($user);
        require_once('/vue/Parent.php');
        
    }

}

?>