<?php
require_once('/model/ClasseM.php');
require_once('/model/GestEnsM.php');
class GestEnsC{
    static function pageGestEns($logi){
        $cls=getClasse();
        $ens=getens();
        $gtw=gethourswork($logi);
        $gth=gethoursrecp($logi);
        require_once('/vue/GestEns.php');
        
    }





    static function addseance($log,$classe,$jour,$horaire)
    {
       
    
        $affectedLines = postseance($log,$classe,$jour,$horaire);
    
    
        if ($affectedLines === false) {
            header('Location: /gestens?danger=Cette séance existe déja pour cet enseignant !');
        }
        else {
            header('Location: /gestens?success=La séance à été crée avec succes !');
        }
    }

    static function addheure($log,$jour,$horaire)
    {
       
    
        $affectedLines = postheure($log,$jour,$horaire);
    
    
        if ($affectedLines === false) {
            header('Location: /gestens?dangerhr=Cette heure de réception existe déja pour cet enseignant !');
        }
        else {
            header('Location: /gestens?successhr= Reception a été crée avec succes !');
        }
    }
}
    ?>