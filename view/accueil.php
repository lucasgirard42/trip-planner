<?php
include '../partials/head.php';
include '../partials/navbar.php';
      ?>




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
<div class="filtrer shadow-lg" style="background-color: royalblue;">
<div class="searchbody">
    <label for="bday" class="depart" style="font-family: 'Trebuchet MS', Helvetica, sans-serif; padding-left: 210px;">Date de départ &nbsp</label>
    <label for="bday" class="arrivee" style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">Date d'arrivée</label> </br> </br>
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
        <?php
include '../partials/sidebar.php';
?>
            <?php  for ($i=1; $i <11; $i++):?>
                <div class="firstcard card shadow-sm col-1" style="width: 18rem;" data-card="cardTrip">
                    <img src="../assets/images/plages.jpg" class="card-img-top">
                        <div class="card-body" style="background-color: white;">
                            <h5 class="card-title">JAPON</h5>
                            <p class="card-text">1/5 NOTE
                                <br>PRIX: 200 euro</p>
                                <a href="#" class="btn btn-primary">INFO</a>
                       </div>
                </div>
            </br>
                <?php endfor ?>
        </div>
    </div>
            </div>
<!-- FIN BOUCLE PHP -->



            </br>














<?php include '../partials/form.php'?>


<?php include '../partials/footer.php'?>


</body>
</html>

