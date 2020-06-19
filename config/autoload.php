<?php

$bdd = new PDO('mysql:host=localhost;dbname=comparoperator', 'root', '');
// On émet une alerte à chaque fois qu'une requête a échoué.
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

  // On enregistre notre autoload.
   function chargerClasse($classname) {
   require './class/' .$classname.'.php';
 }
 
    spl_autoload_register('chargerClasse');

   ?>