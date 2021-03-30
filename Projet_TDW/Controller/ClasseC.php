<?php
require_once('/model/ClasseM.php');

class ClasseC{
    static function afficherClasse(){
        $cls=getClasse();
        require_once('/vue/Classe.php');
    }


    static function addClasse($cycle, $iveau, $groupe)
    {
       
    
        $affectedLines = postClasse($cycle, $iveau, $groupe);
    
    
        if ($affectedLines === false) {
            header('Location: /classe?danger=Impossible de créer cette classe. Elle existe déja !');
        }
        else {
            header('Location: /classe?success=Votre classe a été bien créee !');
        }
    }

}

?>