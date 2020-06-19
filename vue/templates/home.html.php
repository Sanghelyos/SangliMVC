<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">

    <title>SangliMVC</title>
    <meta name="description" content="Mini Framework MVC">
    <meta name="author" content="Johann Pécheux">

    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/home.css">

</head>

<body>

    <?= 

    //  Variable venant du controller. Elle contient la partie HTML "home_date_part.html.php"
    //  Voir dans le controller "home_controller.php"
    $home_date_part

    ?>

    <div id="home_title">
        <h1>SangliMVC</h1>
        <h4>Le petit framework PHP par Johann Pécheux</h4>
        <hr style="width: 70%;">
        <div id="menu_bar">
            <a href="index.php?page=doc">Documentation</a>
            <a href="https://github.com/Sanghelyos/SangliMVC">GitHub</a>
        </div>
    </div>

</body>

</html>