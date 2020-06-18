<?php 

include '../partials/head.php';
include '../partials/navbar.php';
include '../config/autoload.php';
include '../class/review.php';


$request = $bdd->query("SELECT * from tour_operators");
$TOs = $request->fetchAll();
      ?>


<html>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 160px;">Connectez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <input type="text" name="author" placeholder="PSEUDO">
      </div>
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 150px;">Ou créez un compte</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="author" placeholder="PSEUDO">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- FIN MODAL -->

</br> </br></br>

<!-- CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner shadow-lg">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/images/india.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/malaisie.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/moscou.jpg" alt="Third slide">
    </div>
  </div>
</div>
<!-- FIN CAROUSEL -->



<!---BOITE QUI FILTRE LA RECHERCHE----->

<div class="filtrer shadow-lg" style="background-color: royalblue; opacity: 95%;">



<div class="searchbody">
    <label for="bday" class="depart" style="font-family: 'Trebuchet MS', Helvetica, sans-serif; padding-left: 210px;"><strong>Date de départ</strong> &nbsp</label>
    <label for="bday" class="arrivee" style="font-family: 'Trebuchet MS', Helvetica, sans-serif;"><strong>Date d'arrivée</strong></label> </br> </br>
    <input placeholder= "Saisir la ville de départ" style="width: 200px; height: 50px; border: 2px solid black; text-indent: 15px; "></input>
    <input style="height: 50px; border: 2px solid black;" type="date" id="start" name="trip-start"
       value="Date de départ"
       min="2020-06-10" max="2050-12-31">
       <input style="height: 50px; border: 2px solid black;" type="date" id="end" name="trip-end"
       value="Date d'arrivée"
       min="2020-06-10" max="2050-12-31">
       <input type="submit" value="Chercher une destination" style="background-color: crimson; height: 70px; border-radius: 15px; border: 2px black solid;">
</div>
</div>
<!--FIN DE BOITE -->



<!-- BOUCLE PHP AVEC CARDS -->
    <div class="container">
        <div class="row">

            <?php  foreach($TOs as $TO) {?>
                <div class="firstcard card shadow-sm col-2" style="width: 18rem;" data-card="cardTrip">
                    <img src="../assets/images/plages.jpg" class="card-img-top">
                        <div class="card-body" style="background-color: white;">
                            <h5 class="card-title">JAPON</h5>
                            <p class="card-text">1/5 NOTE
                                <br>PRIX: 200 euro</p>
                                <a href="fiche-produit.php" class="btn btn-primary">INFO</a>
                                <?=($TO['name']);?>
                       </div>
                </div>
            <?php }?> 
            
        </div>
    </div>
    </div>
            
<!-- FIN BOUCLE PHP -->
        
<?php include '../partials/form.php'?>


<?php include '../partials/footer.php'?>



<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<!--<script type='text/javascript' src='/js/jquery.mousewheel.min.js'></script> -->



