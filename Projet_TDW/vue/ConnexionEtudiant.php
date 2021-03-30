<? 

class ConnexionEtudiant{
    public function entete(){
        ?>        
            <head>
                <title>Authentification</title>
                <meta charset="utf-8">
                
                <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="/CSS/style.css">
                <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
                
                
            </head>
        
            <body style="margin: 2%">
            
            </body>
            <?
    }

    private function entetepage(){
    ?>
    <br>
    <br>
    <div class="container-fluid2">
        <div class="container">
    <div class="col-sm-12">
        <div class="card" style="background:#455a64; color:white" >
        <div class="card-body">
        <div class="row">
        <div class="col-md-3" >
        <span style="font-size: 4em; color: white;margin:25px">
        <i class="fas fa-user-graduate"></i>
        </span>
            </div>
            <div class="col-md-9" >
            <h1 style='margin:10px'>
            
            Espace connexion Etudiant
            
            </h1>
            
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>
          
          
        </div>
      </div>
      </div>
      <br>
            <?
            }
            
private function alert(){
  ?>
  <?php if(isset($_GET['success'])): ?>
    <div class="container">
  <div class="alert alert-danger" role="alert">
<?php echo $_GET['success']; ?>
  </div>
          </div>
<?php endif; ?>
    <?

  }
  

            private function form(){
                ?>


                <div class="container">
        <h1>Se connecter ! </h1>
        <form action="/etudiant" method=post>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="useretud" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwdetud" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Resté connecté</label>
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>
        
                <?
            
        }         
}