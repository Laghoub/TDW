<?
session_start();
if(!(isset($_SESSION["user"]))){
  header("location: /auth"); 
}
  session_destroy();
 
class Infopratique {
    public function entete(){
        ?>        
            <head>
                <title>Infos Pratique</title>
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
        <img src="/images/coeff.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Coefficient des matieres</h5>
          <p class="card-text">Trouver les coefficient des différents matiere  </p>
          <a href="#" class="btn btn-primary col-md-5">Trouver !</a>
          
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/examen.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194 >
        <div class="card-body">
          <h5 class="card-title">Comment réussir son examen!</h5>
          <p class="card-text">Des conseils pour un bon examen   </p>
          <a href="#" class="btn btn-primary col-md-5">Présenter ! </a>
          
        </div>
      </div>
      </div>
            
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/classe.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Examens corrigés</h5>
          <p class="card-text">Trouvez les examens des années passées  </p>
          <a href="/classe" class="btn btn-primary col-md-5">Examiner ! </a>
          
        </div>
      </div>
      </div>


      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/images/timetable2.png" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title">Surmonter le stress</h5>
          <p class="card-text">Astuces pour surmenter le stress dans les examens  </p>
          <a href="/emploi" class="btn btn-primary col-md-5">Surmenter  </a>
          
        </div>
      </div>
      </div>



      

      
      <
      
      
      
    </div>
    
  
</div>
<div>
<?
            }
   
}
   