<?php
require_once('/model/contactM.php');
 function pagecontact(){
     require_once('/vue/contact.php');
 }

 function pagecontactus(){
    require_once('/vue/contactaff.php');
}



      function addContact($adr, $fax, $tel,$mail)
    {
       
    
        $affectedLines = postContact($adr, $fax, $tel,$mail);
    
    
        if ($affectedLines === false) {
            header('Location: /contact?danger=Impossible de créer le contact!');
        }
        else {
            header('Location: /contact?success=Votre contact a été bien créee !');
        }
    }
 