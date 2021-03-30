<?php
require('/model/PresentationM.php');

function AjoutPresentationPage(){
    
    require('/vue/AjoutPresentation.php');
}
function afficherPres(){
    $req=getpresentation();
    require_once('/vue/Presentation.php');
}
function addPresentation($titre, $description, $photo)
{
	$target="imagesArticle/".basename($_FILES['img']['name']);
	$photo=$_FILES['img']['name'];
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
    	$msg="ok";
    }else{
    	$msh="no";
    }

    $affectedLines =postPresentation($titre, $description, $photo);


    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: /Ajoutpresentation?success=Votre présentation a été bien créee !');
    }
}




     


