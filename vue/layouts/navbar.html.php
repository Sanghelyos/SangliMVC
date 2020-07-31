
<nav style="background-color:#A61E36;padding-top:2vh; padding-bottom: 2vh;">
<!--Contenu navbar/header-->
<?php
    if(isset($donnees['date']) && isset($donnees['heure'])){
        echo "Nous sommes le <span style='color: #FFFFFF;'>" . $donnees['date'] . "</span><br>";
        echo "il est <span style='color: #FFFFFF;'>" . $donnees['heure'] . "</span>";
    }
?>
</nav>