<? 

class AjoutPresentation{
    public function entete(){
        ?>        
            <head>
                <title>Présenter l'école</title>
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

            private function form(){
                ?>
                <div class="container-fluid2-primary">
        <div class="container-primary">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">
        

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-newspaper"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Créer une présentation</h1>
            <p>Présenter votre école à l'ensemble du public en remlissant les diféérents champs</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      <br>
                <div class="container">
        <h1>Créer une présentation !  </h1>
    </div>
    <div class="container">
    <div class="alert alert-success" role="alert">
  <?php if(isset($_GET['success'])) echo $_GET['success']; ?>
    </div>
            </div>
    <br>
    
    
    <div class="container">
                <form action="/addpresentation" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
        <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le titre ! " name="titre">
    <br>
        </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Décrire la description" name="description">
        </div>        
<br>

<div class="custom-file">
  <input type="file" name="img" class="custom-file-input" id="customFile" >
  <label class="custom-file-label" for="customFile">Une image</label>
</div>
<br>
<div class="row">
        <div class="col-md-11"></div>
        <button type="submit" class="btn btn-primary col-md-1 ml-auto mr-auto">Ajouter !</button>
            </div>
</form>
            </div>

                <?
            
        }         
}