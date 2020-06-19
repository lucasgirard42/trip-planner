
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
                <form action="../class/profilTo.php" method="GET" >
                    <div class="form-group">
                        <label  for="exampleFormControlSelect1">Tour operateur</label>
                        <select class="form-control" id="tourOperator">
                            <?php  foreach($Ids as $Id) {?>
                            <option value="<?=$Id['id']?>">
                                <?=$Id['name'];?>
                            </option>
                            <?php }?> 
                        </select>
                        <a href="adminToLogin.php?id=<?=$Id['id']?>" class="card-link ">validez</a>
                    </div>
                    <div class="form-group">
                        <p>Veuillez vous inscrire</p>
                        <a href="adminTO.php" class="card-link ">Sign-up</a>
                    </div>
                </form>
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