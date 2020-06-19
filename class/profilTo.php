<?php
require '../config/autoload.php';

include '../partials/head.php'; 
include '../partials/navbar.php';

$request = $bdd->prepare("SELECT * from tour_operators WHERE name = ? ");
$request->execute([$_GET['name']]);

$Ids = $request->fetchAll();

$request = $bdd->prepare("SELECT * from destinatons WHERE id = ? ");
$request->execute([$_GET['name']]);

$destinations = $request->fetchAll();




?>
 <?php foreach($Ids as $Id){ ?>
        <ul>
            <li>numéro du patient : <?php echo($Id['name']) ?></li>
            <li>nom du patient : <?=$Id['link']?></li>
            <?php foreach ($destinations as $destination){ ?>
            <li>slkdnfoise : <?=$destination['location']?>   


            <?php } ?>
            
            </li>
        </ul>
        <?php } ?>