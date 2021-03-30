<?
class Primaire{
    
    public function entete(){
?>        
    <head>
        <title>Enseignement Primaire</title>
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

    public function menu(){
        ?>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/presentation">présentation</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/primaire">primaire</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/moyen">moyen</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/secondaire">secondaire</a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" href="authE">Eleve</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/authP">Parent</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/contactus">Contact</a>
     </li>
   </ul>
  
 </div>
</nav>
        
<?
    }

    private function cadresP(){
        ?>
        <br>
        <div class="container-fluid2">

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/timetable.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Emploi du temps</h5>
          <p class="card-text">Accédez à votre emploi du temps de toute l'année et de toutes les matieres   </p>
          <a href="/edtp" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/teacher.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Enseignants - Reception</h5>
          <p class="card-text">Consulter la liste de vos enseignants ainsi que leurs heures de réception  </p>
          <a id="suite" href="/ensp" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/pratique.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Informations pratiques</h5>
          <p class="card-text">Coefficient des matieres - date des recptions - le médecin de l'école - Reglement  </p>
          <a href="/pratique" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/resto.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Restauration</h5>
          <p class="card-text">Consuler les différentes informations liées au restaurant de votre école, horaires  </p>
          <a href="/restaurant" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      </div>
      
    </div>
    
  
</div>
<?
    }

    private function articlesalire(){
        ?>
        
        
        <br>
        <div class="container">
        <h1>Articles à lire ... </h1>
    </div>
        <br>
        <div class="container-fluid2">
        <div class="container">
        <div class="row">
            <?php
            $color="danger";
        
        foreach ($req as $form):
        ?>
        <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/imagesArticle/<?= $form['image'] ?>" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title"><?= $form['nom'] ?></h5>
          <p class="card-text"><p><?= substr($form['description'],0, 100) ?>...</p>  </p>
          <a href="#" class="btn btn-primary">Lire la suite</a>
          
          
        </div>
      </div>
      </div>
            
        <?php endforeach; ?>
        </div>
        </div>
        </div>


<?
    
    }
    
    

}
?>