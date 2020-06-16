<?php
require '../config/autoload.php';

class Destination {
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;

    public function __construct(){
    
    }

    public function getLocation(){
        
        if(!empty($_POST["location"])) {
            $location = htmlspecialchars($_POST["location"]);
        } 
    }

    public function getPrice() {
        if(!empty($_POST["price"])) {
            $price = htmlspecialchars($_POST["price"]);
        } 
        
    }

    public function getId_Tour_Operator() {
        if(!empty($_POST["idTourOperator"])) {
            $location = htmlspecialchars($_POST["idTourOperator"]);
        } 
    }

}
?>