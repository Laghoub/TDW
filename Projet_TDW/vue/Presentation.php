<?

class Presentation{

    public function entete(){
        ?>        
            <head>
                <title>Présentation</title>
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
            private function present(){
?>
              <div class="container">
               <center><h1 class="monecole" style="font-size:80px">Mon école </h1></center>
              </div>
              <br>
              <?php
              foreach ($req as $form):
                  ?>
              <div class="container-fluid3">
              <div class="container">
              <div class="row">
              <div class="col-md-4">
              <img src="/imagesArticle/<?= $form['image'] ?>" WIDTH=250 HEIGHT=220>
              </div>
              <div class="col-md-8">
              <h1><?= $form['titre'] ?></h1>
              <p><?= $form['description'] ?></p>
              </div>
              </div>
              </div>
              </div>
              <br>
              <?php endforeach; ?>

              <?  
            }
            
}