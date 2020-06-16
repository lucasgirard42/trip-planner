<?php include '../partials/navbar.php';
     include '../partials/head.php'; ?>


<body>
</br> </br></br>
    <div class="filtrer" style="background-color: royalblue;">
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
<br>
<br>
<h1 class="pays text-center">JAPON</h1>
<br>
<div class="container">
<?php  for ($i=1; $i <11; $i++):?>
    <div class="secondCard mb-12 mt-5">
        <div class="row no-gutters">
            <div class="card-image col-md-6">
                <img src="../assets/images/plages.jpg" class="card-img" alt="...">
            </div>
            <div class=" card-text col-md-6">
                <div class="secondCard-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card-review col-md-12">
                <div class="secondCard-body">
                    <p class="card-text ">commentaire:</p>
                    <p>review:</p>
                    <p>note:</p>
                </div><br><br>
            </div>
        </div>
    </div>
    <?php endfor ?>
</div>


<?php include '../partials/form.php'?>

<?php include '../partials/footer.php'?>


</body>
</html>
