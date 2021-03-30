<? 

class Article{
    public function entete(){
        ?>        
            <head>
                <title>Gestion des articles</title>
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
            <h1>Créer un article!</h1>
            <p>Veuillez remplir les informations qui concernent votre article, l'image de l'article doit etre claire</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      <br>
                <div class="container">
        <h1>Créer un article </h1>
    </div>
    <?php if(isset($_GET['success'])): ?>
      <div class="container">
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['success']; ?>
    </div>
            </div>
<?php endif; ?>
    
    <br>
    
    
    <div class="container">
                <form action="/addArticle" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                
        <div class="form-group">
    <label for="exampleInputEmail1">Nom de l'article</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un nom ! " name="nom">
    <br>
        </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Décrire votre article" name="description">
        </div>
        <br>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Cycle</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="cycle">
    <option selected>Tout</option>
    <option value="Primaire">Primaire</option>
    <option value="Moyen">moyen</option>
    <option value="Secondaire">Secondaire</option>
    <option value="Secondaire">Enseignant</option>
    <option value="Secondaire">Parent</option>
  </select>
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
            <br>
        <div class="container">
        <h1>Articles crées ... </h1>
    </div>
        <br>
        <div class="container-fluid2">
        <div class="container">
        <div class="row">
            <?php
            
        
        foreach ($req as $form):
        ?>
        <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <img src="/imagesArticle/<?= $form['image'] ?>" class="card-img-top" alt="..." WIDTH=194 HEIGHT=194>
        <div class="card-body">
          <h5 class="card-title"><?= $form['nom'] ?></h5>
          <p class="card-text"><p><?= substr($form['description'],0, 100) ?>...</p>  </p>
          <a href="/readmore?read=<?php echo $form['id'] ?>" class="btn btn-primary">Lire la suite</a>
          <button type="button" class="btn btn-danger col-md-2"> <?= substr($form['cycle'],0,1) ?></button>
          <br>
          <br>
          
          <a href="/AjoutArticle?edit=<? echo $form['id']; ?>" class="btn btn-success">Editer</a>
          <a href="/deleteA?delete=<?php echo $form['id'] ?> " class="btn btn-danger">Supprimer</a>
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