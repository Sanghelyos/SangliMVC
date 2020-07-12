
<nav>
<!--Contenu navbar/header-->
<?php
    if(isset($donnees['date']) && isset($donnees['heure'])){
        echo "Nous sommes le <span style='color: #A61E36;'>" . $donnees['date'] . "</span><br>";
        echo "il est <span style='color: #A61E36;'>" . $donnees['heure'] . "</span>";
    }
?>
</nav>