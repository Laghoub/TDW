<?
class contactaff{


    public function entete(){
?>        
    <head>
        <title>Contactez-nous</title>
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

    private function diapo(){
        ?>
        <div id="slider">
            <figure>
                <img src="/images/formation.jpg" >
                <img src="/images/formation1.jpg" >
                <img src="/images/formation2.jpg" >
    </figure>

    </div>     
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
        <a class="nav-link" href="/authE">Eleve</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/authP">Parent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
   
  </div>
</nav>
        


<?
    }
    private function contact(){
        ?>
        <br>
<section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">contactez-nous!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Notre siege se situe au niveau de  Embley Park, West Wellow, Romsey SO51 6ZE, Royaume-Uni ! merci de nous rendre visite ou de nous contacter sur:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" style="text-align: center" >
          <i class="fas fa-phone fa-3x mb-3 text-muted fa-align-center"></i>
          <div class="text-center">+(213) 555 43 30 04</div>
        </div>
        <div class="col-md-4" style="text-align: center" >
          <i class="fas fa-fax fa-3x mb-3 text-muted"></i>
          <div class="text-center">+(021) 43 30 04</div>
        </div>
        <div class="col-md-4" style="text-align: center" >
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block text-center" href="#">EmbleyparkSchool@gmail.com</a>
        </div>
      </div>
    </div>
  </section>
  <br>
        
        <?
    }
    

}