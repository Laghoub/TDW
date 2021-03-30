<?php
require_once('/model/EmploiM.php');
require_once('/model/ClasseM.php');

class EmploiC{
    static function afficherEmploi(){
        $cls=getClasse();
        require_once('/vue/Emploi.php');
        
    }

    static function addEmploi($idC, $idJ,$hor1,$hor2,$hor3,$hor4,$hor5,$hor6,$hor7)
    {
       
    
        $affectedLines = postEmploi($idC, $idJ,$hor1,$hor2,$hor3,$hor4,$hor5,$hor6,$hor7);
    
    
        if ($affectedLines === false) {
            header('Location: /emploi?danger=Cet emploi du temps est déja crée pour cette classe !');
        }
        else {
            header('Location: /emploi?success= Emploi du temps crée avec succes !');
        }
    }

}
?>