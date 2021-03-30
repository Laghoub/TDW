<?php

require('/model/ArticleM.php');
class ArticleC{



static function page(){
    $req=getarticle();
    require('/vue/Article.php');
}

static function deleteArticle($id){
    $affectedLines = delete($id); 
}

static function addArticle($nom, $description, $cycle, $photo)
{
	$target="imagesArticle/".basename($_FILES['img']['name']);
	$photo=$_FILES['img']['name'];
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
    	$msg="ok";
    }else{
    	$msh="no";
    }

    $affectedLines = postArticle($nom, $description, $cycle, $photo);


    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: /AjoutArticle?success=Votre article a été bien crée !');
    }
}
}



     


