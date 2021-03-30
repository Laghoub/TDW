<?php
require('Controller/ArticleC.php');
require('Controller/AccueilC.php');
require('Controller/PrimaireC.php');
require('Controller/AdminC.php');
require('Controller/MoyenC.php');
require('Controller/SecondaireC.php');
require('Controller/AjoutPresentationC.php');
require('Controller/connexionAdminC.php');
require('Controller/deleteSeccessC.php');
require('Controller/RestoC.php');
require('Controller/RestaurantC.php');
require('Controller/ClasseC.php');
require('Controller/EmploiC.php');
require('Controller/EDT/EdtPC.php');
require('Controller/usersC.php');
require('Controller/GestEnsC.php');
require('Controller/EnseignantC.php');
require('Controller/EtudiantC.php');
require('Controller/ParentC.php');
require('Controller/ReadmoreC.php');
require('Controller/infopratiqueC.php');
require('Controller/contactC.php');

$_GET['route']=explode("?",$_SERVER['REQUEST_URI'],2);
$_GET['route']=$_GET['route'][0];

if($_GET['route']==='/AjoutArticle') {
    ArticleC::page();
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        ArticleC:: deleteArticle($id);
        
    }
}
if($_GET['route']==='/') {AccueilC::afficher();}
if($_GET['route']==='/contact') {pagecontact();}
if($_GET['route']==='/primaire') {PrimaireC::afficherP();}
if($_GET['route']==='/moyen') {MoyenC::afficherM();}
if($_GET['route']==='/secondaire') {SecondaireC::afficherS();}
if($_GET['route']==='/pratique') {pagepratique();}
if($_GET['route']==='/presentation') {afficherPres();}
if($_GET['route']==='/Ajoutpresentation') {AjoutPresentationPage();}
if($_GET['route']==='/auth') {pageAuth();}
if($_GET['route']==='/restaurant') {pageRestaurant();}
if($_GET['route']==='/contactus') {pagecontactus();}
if($_GET['route']==='/resto') {
    pageResto();
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        deleteR($id);  
    }

}

if($_GET['route']==='/readmore') {
    if (isset($_GET['read'])){
        $id=$_GET['read'];
        ReadmoreC::readmorepage($id);
        
    }
        
}
if($_GET['route']==='/deleteA') {
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        ArticleC::deleteArticle($id);
        
    }
        delete::pagedelete();
}
if($_GET['route']==='/deleteU') {
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        usersC::deleteens($id);
        
    }
        delete::pagedeleteuser();
}

if($_GET['route']==='/deleteAd') {
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        usersC::deleteadmins($id);
        
    }
        delete::pagedeleteuser();
}
if($_GET['route']==='/deleteE') {
    if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        usersC::deleteetuds($id);
        
    }
        delete::pagedeleteuser();
}


if($_GET['route']==='/addArticle') {
    if (!empty($_POST['nom']) && !empty($_POST['description']) ) {
        ArticleC::addarticle($_POST['nom'], $_POST['description'], $_POST['cycle'],$_POST['photo']);
    } else{
        header('Location: /?success=champs non remplies !');
    }

}


if($_GET['route']==='/addpresentation') {
    if (!empty($_POST['titre']) && !empty($_POST['description']) ) {
        addpresentation($_POST['titre'], $_POST['description'],$_POST['photo']);
    } else{
        header('Location: /?success=champs non remplies !');
    }
}


if($_GET['route']==='/authentification') {
    if (!empty($_POST['user']) && !empty($_POST['pwd']) ) {
        verifyAuth($_POST['user'], $_POST['pwd']);
    } else{
        header('Location: /?danger=champs non remplies ! veuillez remplir tous les champs.');
    }
}
if($_GET['route']==='/admin') {
    
  
    AdminC::afficherAdmin(); 
  
     
  
         
}

if($_GET['route']==='/addRepas') {
    if (!empty($_POST['jour']) && !empty($_POST['principale']) ) {
       addRepas($_POST['jour'],$_POST['principale'],$_POST['secondaire'],$_POST['dessert'],$_POST['boisson']);
    } else{
        header('Location: /?danger=champs non remplies ! veuillez remplir tous les champs.');
    }


}

if($_GET['route']==='/classe') {
    ClasseC::afficherClasse();
    
}

if($_GET['route']==='/addclasse') {
    if (!empty($_POST['cycle']) && !empty($_POST['nv']) && !empty($_POST['ng']) ) {
        ClasseC::addClasse($_POST['cycle'], $_POST['nv'],$_POST['ng']);
    } else{
        header('Location: /classe?danger=champs non remplies ! veuillez remplir tous les champs.');
    }
}

if($_GET['route']==='/emploi') {
    EmploiC::afficherEmploi();
    
}

if($_GET['route']==='/addemploi') {
    if (!empty($_POST['classe']) && !empty($_POST['jour']) && !empty($_POST['hor1']) ) {
        EmploiC::addEmploi($_POST['classe'], $_POST['jour'],$_POST['hor1'],$_POST['hor2'],$_POST['hor3'],$_POST['hor4'],$_POST['hor5'],$_POST['hor6'],$_POST['hor7']);
    } else{
        header('Location: /emploi?danger=champs non remplies ! veuillez remplir tous les champs.');
    }
}

if($_GET['route']==='/edtp') {
    EdtPC::afficherEdtP();
    
}
if($_GET['route']==='/edtm') {
    EdtPC::afficherEdtM();
    
}
if($_GET['route']==='/edts') {
    EdtPC::afficherEdtS();
    
}

if($_GET['route']==='/users') {
    usersC::pageusers();
    
}
if($_GET['route']==='/addadmin') {
    if (!empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['nom']) ) {
        usersC::addadmin($_POST['login'], $_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3'],$_POST['email']);
    } else{
        header('Location: /users?danger=champs non remplies ! veuillez remplir tous les champs');
    }
}

if($_GET['route']==='/addens') {
    if (!empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['nom']) ) {
        usersC::addens($_POST['login'], $_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3'],$_POST['email'],$_POST['matiere']);
    } else{
        header('Location: /users?danger=champs non remplies ! veuillez remplir tous les champs');
    }
}

if($_GET['route']==='/addetud') {
    if (!empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['nom']) ) {
        usersC::addetud($_POST['login'], $_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['daten'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3'],$_POST['email'],$_POST['classe'],$_POST['prnt']);
    } else{
        header('Location: /users?etud=champs non remplies ! veuillez remplir tous les champs');
    }
}

if($_GET['route']==='/addparent') {
    if (!empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['nom']) ) {
        usersC::addparent($_POST['login'], $_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['daten'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3'],$_POST['email']);
    } else{
        header('Location: /users?etud=champs non remplies ! veuillez remplir tous les champs');
    }
}

if($_GET['route']==='/addseance') {
    if (!empty($_POST['login']) && !empty($_POST['classe'])&& !empty($_POST['horaire']&& !empty($_POST['jour'])) ) {
        GestEnsC::addseance($_POST['login'], $_POST['classe'], $_POST['jour'],$_POST['horaire']);
    } else{
        header('Location: /?success=champs non remplies !');
    }

}

if($_GET['route']==='/addheure') {
    if (!empty($_POST['loginens']) && !empty($_POST['heureens']&& !empty($_POST['jourens'])) ) {
        GestEnsC::addheure($_POST['loginens'], $_POST['jourens'],$_POST['heureens']);
    } else{
        header('Location: /?success=champs non remplies !');
    }

}

if($_GET['route']==='/gestens') {
    $id=null;
    if (!empty($_POST['loginhens'])){
        $id=($_POST['loginhens']);
        
    }
    GestEnsC::pageGestEns($id);

}

if($_GET['route']==='/ensp'){
EnseignantC::pageenseignantp();
}

if($_GET['route']==='/ensm'){
    EnseignantC::pageenseignantm();
    }
    if($_GET['route']==='/enss'){
        EnseignantC::pageenseignants();
        }

  if($_GET['route']==='/authE') {
      pageAuthE();
      ;}

      if($_GET['route']==='/authP') {
        pageAuthP();
        ;}
      if($_GET['route']==='/etudiantconnect') {
        if (isset($_GET['log'])){
            $idt=$_GET['log'];
        EtudiantC::etudiantpage($idt); 
        }  
        
    }

    if($_GET['route']==='/etudiant') {
        
        if (!empty($_POST['useretud']) && !empty($_POST['pwdetud']) ) {
            
            verifyAuthE($_POST['useretud'], $_POST['pwdetud']);
            
        } else{
            
            header('Location: /etudiant?danger=champs non remplies ! veuillez remplir tous les champs.');
        }
        
        ;}
        if($_GET['route']==='/parent') {
        
            if (!empty($_POST['useretud']) && !empty($_POST['pwdetud']) ) {
                
                verifyAuthP($_POST['useretud'], $_POST['pwdetud']);
                
            } else{
                
                header('Location: /parent?danger=champs non remplies ! veuillez remplir tous les champs.');
            }
            
            ;}

            if($_GET['route']==='/parentconnect') {
                if (isset($_GET['log'])){
                    $idt=$_GET['log'];
                    
                ParentC::parentPage($idt); 
                }  
                
            }


            if($_GET['route']==='/addcontact') {
                if (!empty($_POST['adr']) && !empty($_POST['fax']) && !empty($_POST['tel']) ) {
                    addContact($_POST['adr'], $_POST['fax'],$_POST['tel'],$_POST['mail']);
                } else{
                    header('Location: /contact?danger=champs non remplies ! veuillez remplir tous les champs.');
                }
            }


        
  

    





/*if (isset($_GET['action'])) {
    if ($_GET['action'] == 'article') {
        page();
       
    }
    elseif ($_GET['action'] == 'post') {
        page();
    }
    elseif ($_GET['action'] == 'addarticle') {

            if (!empty($_POST['nom']) && !empty($_POST['description'])) {
                addarticle($_POST['nom'], $_POST['description'], $_POST['cycle'],$_POST['photo']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        
        
    }
}
else {
    page();
}*/