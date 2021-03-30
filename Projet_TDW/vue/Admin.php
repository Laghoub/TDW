<?
session_start();
if(!(isset($_SESSION["user"]))){
  header("location: /auth"); 
}
  session_destroy();
 
class Admin {
    public function entete(){
        ?>        
            <head>
                <title>Embley park School</title>
                <meta charset="utf-8">
                
                <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="/CSS/style.css">
                <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
                
                
            </head>
        
            <body style="margin: 5%">
            
            </body>
            <?
            }
            private function cadres(){
                ?>
                <div class="container-fluid2">

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/articles.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion des articles</h5>
          <p class="card-text">Créer des articles pour les différents cycles de l'école  </p>
          <a href="/AjoutArticle" class="btn btn-primary col-md-5">Gérer !</a>
          
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/school.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194 >
        <div class="card-body">
          <h5 class="card-title">Présentation de l'école</h5>
          <p class="card-text">Quelques photo et description de l'école  </p>
          <a href="/Ajoutpresentation" class="btn btn-primary col-md-5">Présenter ! </a>
          
        </div>
      </div>
      </div>
            
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/classe.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion des classes</h5>
          <p class="card-text">Créer des classes pour les différents cycles et années.  </p>
          <a href="/classe" class="btn btn-primary col-md-5">créer ! </a>
          
        </div>
      </div>
      </div>


      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/timetable2.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">L'emploi du temps</h5>
          <p class="card-text">Gérer les différents emploi du temps des différents cycles.  </p>
          <a href="/emploi" class="btn btn-primary col-md-5">Gérer ! </a>
          
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/teacher.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion des enseignants</h5>
          <p class="card-text">La prtition des enseignants par niveaux et par cycles  </p>
          <a href="/gestens" class="btn btn-primary col-md-5">Géerer ! </a>
          
        </div>
      </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/users.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion des utilisateurs</h5>
          <p class="card-text">Gérer le droit d'accés des différents utilisateurs du site  </p>
          <a href="/users" class="btn btn-primary col-md-5">Gérer ! </a>
          
        </div>
      </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/resto.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion de la restauration</h5>
          <p class="card-text">Afficher les différents informations liées à la restauration  </p>
          <a href="/resto" class="btn btn-primary col-md-5">Gerer ! </a>
          
        </div>
      </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/contact.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Gestion des contact</h5>
          <p class="card-text">Gérer les adresse les téléphones et les emails </p>
          <a href="/contact" class="btn btn-primary col-md-5">Gerer ! </a>
          
        </div>
      </div>
      </div>

      </div>
      </div>
      
      
      
      
    </div>
    
  
</div>
<div>
<?
            }
   
}
   