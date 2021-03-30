<? 

class CONTACT{
    public function entete(){
        ?>        
            <head>
                <title>Gerer les contacts</title>
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
                <div class="container">
        <h1>Gérer les contact  </h1>
    </div>
    <div class="container">
    <div class="alert alert-success" role="alert">
  <?php if(isset($_GET['success'])) echo $_GET['success']; ?>
    </div>
            </div>
    <br>
    
    
    <div class="container">
                <form action="/addcontact" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
        <div class="form-group">
    <label for="exampleInputEmail1">Adresse</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse " name="adr">
    <br>
        </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Fax</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Fax" name="fax">
        </div>        
<br>
<div class="form-group">
    <label for="exampleInputPassword1">N°Tél</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Tél" name="tel">
        </div> 
        <br>
<div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="MAIL" name="mail">
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