<?php

require '../config/autoload.php';

class TourOperator {
    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_premium;

    public function __construct(){

    }

    public function getName(){
        if(!empty($_POST["name"])) {
            $location = htmlspecialchars($_POST["name"]);
        } 
    }

    public function getGrade(){
        if(!empty($_POST["grade"])) {
            $location = htmlspecialchars($_POST["grade"]);
        } 
    }

    public function getLink(){
        if(!empty($_POST["link"])) {
            $location = htmlspecialchars($_POST["link"]);
        } 
    }

    public function getIsPremium(){
        if(!empty($_POST["ispremium"])) {
            $location = htmlspecialchars($_POST["ispremium"]);
        } 
    }

}

?>