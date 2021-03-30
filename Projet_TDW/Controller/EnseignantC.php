<?php
require_once('/model/EnseigantM.php');
class EnseignantC{
    static function pageenseignantp(){
        $ensp=EnseignantM::getensprim();
        $ensprcp=EnseignantM::getensprimrecp();
        require_once('./vue/Enseignant/ensp.php');
    }

    static function pageenseignantm(){
        $ensm=EnseignantM::getensmoy();
        $ensprcm=EnseignantM::getensprimrecm();
        require_once('./vue/Enseignant/ensm.php');
    }

    static function pageenseignants(){
        $enss=EnseignantM::getenssec();
        $ensprcs=EnseignantM::getensprimrecs();
        require_once('./vue/Enseignant/enss.php');
    }
}