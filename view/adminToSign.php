
<?php 
session_start();
include '../config/autoload.php';



include '../partials/head.php'; 
include '../partials/navbar.php';


$request = $bdd->query("SELECT * from tour_operators");
$Ids = $request->fetchAll();

?> 

<div class="container">
    <div class="row justify-content-center">
        <div class="cardFormTo col-3 shadow-sm bg-light text-center" style="width: 18rem;">
            <div class="card-body">
                <form action="adminTO.php" method="GET" >
                    <div class="form-group">
                        <label  for="exampleFormControlSelect1">Tour operateur</label>
                        <select name="id" class="form-control" id="tourOperator">
                            <?php  foreach($Ids as $Id) {?>
                            <option value="<?=$Id['id']?>">
                                <?=$Id['name'];?>
                            </option>
                            <?php }?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <p>Acceder a votre site</p>
                        <button type="submit">ok</button>
                    </div>
                </form>
                <div class="form-group">
                        <p>Veuillez vous enregistrer</p>
                        <a href="adminTOSignUp.php">s'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</div>





<style>
  .cardFormTo{
      margin-top: 50px;
      margin-bottom: 100px;
  }
</style>
























<?php include '../partials/footer.php'?>   
</body>
</html>