<?php

require_once('/model/usersM.php');
require_once('/model/ClasseM.php');
class usersC{
    static function pageusers(){
        $us=getadmin();
        $ens=getens();
        $etud=getetud();
        $parent=getparents();
        $cls=getClasse();
        require_once('/vue/users.php');
        
    }


    static function addadmin($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email)
    {
       
    
        $affectedLines = postadmin($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email);
    
    
        if ($affectedLines === false) {
            header('Location: /users?danger=Impossible de créer cet administrateur !');
        }
        else {
            header('Location: /users?success=L\'administrateur à été crée avec succes !');
        }
    }

    static function addens($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email,$matiere)
    {
       
    
        $affectedLines = postens($log, $mdp,$nom,$prenom,$adr,$tel1,$tel2,$tel3,$email,$matiere);
    
    
        if ($affectedLines === false) {
            header('Location: /users?danger=Impossible de créer cet utilisateur !');
        }
        else {
            header('Location: /users?success=L\'utilisateur à été crée avec succes !');
        }
    }

    static function addetud($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email,$classe,$parent)
    {
       
    
        $affectedLines = postetud($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email,$classe,$parent);
    
    
        if ($affectedLines === false) {
            header('Location: /users?danger=Impossible de créer cet utilisateur !');
        }
        else {
            header('Location: /users?success=L\'utilisateur à été crée avec succes !');
        }
    }

    static function addparent($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email)
    {
       
    
        $affectedLines = postparent($log, $mdp,$nom,$prenom,$date,$adr,$tel1,$tel2,$tel3,$email);
    
    
        if ($affectedLines === false) {
            header('Location: /users?danger=Impossible de créer cet utilisateur !');
        }
        else {
            header('Location: /users?success=L\'utilisateur à été crée avec succes !');
        }
    }

    static function deleteadmins($id){
        $affectedLines = deleteadmin($id); 
    }

    static function deleteens($id){
        $affectedLines = deletedens($id); 
    }

    static function deleteetuds($id){
        $affectedLines = deleteetud($id); 
    }

    
}