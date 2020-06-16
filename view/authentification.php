<?php
include '../partials/head.php';
?>

<h2> Bienvenue sur Trip Planner</h2>

<div class=authcontent>
<div class="bordure">
<p>Avant de commencer à naviguer sur le site, séléctionnez ci-dessous selon votre cas :</p>
</div>
<button type="button" class="btn btn-secondary" name="voyageur"><a href="accueil.php">Je veux réserver un voyage</button></a>
<button type="button" class="btn btn-success" name="voyagiste">Je suis un voyagiste</button>
</br>
<button type="button" class="btn btn-warning" name="admin">Je suis un Administrateur</button> 

</div>

</br>

<?php
include '../partials/footer.php';
?>



<style>

    body {
        background-color: gainsboro;
    }
    .authcontent {
        border: 3px black solid;
        text-align: center;
        width: 500px;
        height: 350px;
        margin: 0 auto;
        padding-top: 100px;
        background-color: rgb(70, 156, 217);
        border-radius: 10%;
        opacity: 85%;
        box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7);
        
    }

    h2 {
        text-align: center;

    }

    .bordure {
        border: 2px black solid;
        background-color: darkorange;
        height: 75px;
        position: relative;
        top : -50px;

    }

    input {
        height: 45px;
        
    }

    button {
        position: relative;
        top: -45px;
        margin: 10px;
        text-decoration: none;
    }

</style>
