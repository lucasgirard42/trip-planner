<?php

require '../config/autoload.php';

class TourOperator {
    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_premium;
    private $image;

    public function __construct(){

    }

    //if(!empty($_POST["name"])) and (!empty($_POST["link"])) and (!empty($_POST["image"])) {
      //  $bdd = "INSERT INTO tour_operators (name, link) VALUE (?, ?)";
    //}

    public function getName(){
        if(!empty($_POST["name"])) {
            $name = htmlspecialchars($_POST["name"]);
        } 
    }

    public function getGrade(){
        if(!empty($_POST["grade"])) {
            $grade = htmlspecialchars($_POST["grade"]);
        } 
    }

    public function getLink(){
        if(!empty($_POST["link"])) {
            $link = htmlspecialchars($_POST["link"]);
        } 
    }

    public function getIsPremium(){
        if(!empty($_POST["ispremium"])) {
            $is_premium = htmlspecialchars($_POST["ispremium"]);
        } 
    }

    public function getImage() {
        if(!empty($_POST["image"])) {
            $image = htmlspecialchars($_POST["image"]);
        } 
    }

}

?>