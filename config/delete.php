<?php
include '../config/autoload.php';



 if(isset($TO['id'])) {
 $id = $TO['id']; 
 $reponse = $bdd->query("DELETE FROM tour_operators WHERE id ='$id'");  
 
 header ('location: ../view/admin.php');
 
 }

   

?>