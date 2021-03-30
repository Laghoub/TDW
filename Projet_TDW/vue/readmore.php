<?
class readmore{


    public function entete(){
?>        
    <head>
        <title>Embley park School</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
        
        
    </head>

    <body style="margin: 5%">
    
    </body>
    <?
    }

    private function titre(){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" >
            <img  class="logo" src="/images/logo.png" WIDTH=70 HEIGHT=70 >
            </div>

    <div class="col-md-5 " >
            <h1 class="title">Embley park School<h1>
    </div>
    <div class="col-md-1 " >
    <a href="#"><i id="reseauxS" class="fab fa-facebook"></i></a>
    </div>

    <div class="col-md-1" >
    <a href="#"><i id="reseauxS" class="fab fa-instagram"></i></a>
    </div>

    <div class="col-md-1" >
    <a href="#"><i id="reseauxS" class="fab fa-twitter"></i></a>
    </div>

    <div class="col-md-1" >
    <a href="#"><i id="reseauxS" class="fab fa-youtube"></i></a>
    </div>
    

    </div>
    </div>    
       
    <?
    }

    public function menu(){
        ?>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/accueil">Accueil <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="/authE">Eleve</a>
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

    private function cadres(){
        ?>
        <br>
        
        <div class="container-fluid2">
        <div class="container">
        <center>
        <div class="row">
            <?php
            $color="danger";
        
        foreach ($mor as $form):
        ?>
        <div class="col-md-12">
        <div class="card col-md-12" >
        <img src="/imagesArticle/<?= $form['image'] ?>" class="card-img-top" alt="..." WIDTH=250 HEIGHT=420>
        <div class="card-body">
          <h5 class="card-title"><?= $form['nom'] ?></h5>
          <p class="card-text"><p style="text-align: justify;"><?= $form['description'] ?></p>  </p>
          
        </div>
      </div>
      </div>
            
        <?php endforeach; ?>
        </div>
        </div>
        </div>
</center>
        <?
    }
    

}