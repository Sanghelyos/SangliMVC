<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">

    <title>SangliMVC - Documentation</title>
    <meta name="description" content="Mini Framework MVC">
    <meta name="author" content="Johann Pécheux">

    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/home.css">
    <style>
        p,
        ul {
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-position: top;
        }
    </style>

</head>

<body style="padding-left: 1%;max-width: 90%;">
    <div">
        <h2 style="font-size: 250%;">Index</h2>
        <ul style="font-size: 50%; padding-left: 2%; margin-bottom: 3%; list-style-type: circle; max-width: 10%;">
            <a href="#arbo">
                <li>L'arborescence</li>
            </a>
            <a href="#route">
                <li>Le routage</li>
            </a>
            <a href="#control">
                <li>Les controllers</li>
            </a>
            <a href="#model">
                <li>Les models</li>
            </a>
            <a href="#template">
                <li>Les templates</li>
            </a>
        </ul>
        </div>
        <h2 id="arbo" style="font-size: 200%;">L'arborescence</h2>
        <p style="font-size: 120%; margin-bottom: 1%;">L'arborescence est structurée d'une façon bien précise. Elle peut
            cependant être modifiée sans difficulté.</p>
        <ul style="font-size: 100%; padding-left: 2%; list-style-type: circle;">
            <u>
                <li>La racine</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">La racine du site. C'est là que se trouvent tous les
                dossiers, le fichier index.php et .htaccess qui sert à configurer le serveur.</p>
            <u>
                <li>public</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Dans ce dossier, il y a toutes les assets, comme les images,
                les feuilles de styles, scripts etc...</p>
            <u>
                <li>Controllers</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Le dossier controllers contient... les controllers...
                Etonnant non ?</p>
            <u>
                <li>Les models</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Le dossier model contient les classes et fonctions.<br> Ainsi
                que tout ce qui peut servir au traitement</p>
            <u>
                <li>Les vues</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Le dossier vue contient les templates HTML ainsi que les
                morceaux HTML à intégrer.</p>
            <u>
                <li>Les librairies</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Il est conseillé de ranger vos librairies dans le dossier
                lib.</p>
        </ul>

        <h2 id="route" style="font-size: 200%;">Le routage</h2>
        <p style="font-size: 120%; margin-bottom: 1%;">Le routage est là pour rediriger vers la page souhaitée tout en
            restant sur l'index.<br>
            pour le moment, tout le routage se passe dans l'index.</p>
        <ul style="font-size: 100%; padding-left: 2%; list-style-type: circle;">
            <u>
                <li>Tout dans un switch case</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Toute la partie routage de l'index se passe dans un "switch
                case", où chaque cas correspond à une page.
                Dans l'exécution de chaque cas, il faut exécuter un ou plusieurs controllers.</p>
            <u>
                <li>Et le switch case "default" ?</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">La valeur par défaut du switch case, où si la valeur de la
                page n'est pas reconnue, sert à rediriger sur <br>
                une page 404 ou non trouvée personnalisée.</p>
        </ul>

        <h2 id="control" style="font-size: 200%;">Les controllers</h2>
        <p style="font-size: 120%; margin-bottom: 1%;">Les controllers servent à générer et assembler les parties
            HTML.<br>
            C'est aussi là que se passera certains traitements et appels de fonctions ou de classes.</p>
        <ul style="font-size: 100%; padding-left: 2%; list-style-type: circle;">
            <u>
                <li>ob_start()</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Tout simplement, une instruction indiquant le début de mise
                en tampon.<br>
                C'est là dedans qu'on doit indiquer les morceaux d'HTML à inclure dans les templates.
                Il est préférable de traiter les données et de créer les variables avant toute mise en tampon, <br>
                car ces variables seront utilisées dans vos morceaux HTML.</p>
            <u>
                <li>ob_get_clean()</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">L'instruction indiquant la fin de mise en tampon, et stockage
                du contenu du tampon dans une variable.<br>
                Ce sont ces variables de fin de mise en tampon qui seront généralement incluses dans vos templates.</p>
            <u>
                <li>La template</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">La ou les templates sont à inclure à la fin, après les mises
                en tampon. Ce seront vos pages qui seront affichées.</p>
        </ul>

        <h2 id="model" style="font-size: 200%;">Les models et base de données</h2>
        <p style="font-size: 120%; margin-bottom: 1%;">Dans le dossier model repose vos classes, fonctions et autres
            traitements.<br>
            C'est aussi ici que se trouvent les paramètres de la base de données.</p>
        <ul style="font-size: 100%; padding-left: 2%; list-style-type: circle;">
            <u>
                <li>Classes et fonctions</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Les classes et fonctions sont à déposer ici et sont à appeler
                dans vos controllers.</p>
            <u>
                <li>base de données</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Le fichier "database.php" contient une fonction avec tous les
                paramètres<br> nécessaires à la connexion d'une base de données.</p>
            <u>
                <li>Le model original</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Il existe une classe "Model" dans un fichier appelé
                "model.php", qui est utilisée comme parent <br>
                Pour les autres classes. Ceci permet de faire des requêtes dans des méthodes sans avoir à spécifier<br>
                un argument de bdd dans chaque méthode qui l'utilise.<br>
                Ceci n'est pas du tout obligatoire, vous pouvez inclure "database.php" où vous voulez<br>
                et appeler sa fonction comme bon vous semble si mon procédé ne vous conviens pas.</p>
        </ul>

        <h2 id="template" style="font-size: 200%;">Les templates</h2>
        <p style="font-size: 120%; margin-bottom: 1%;">Dans le dossier model repose vos classes, fonctions et autres
            traitements.<br>
            C'est aussi ici que se trouvent les paramètres de la base de données.</p>
        <ul style="font-size: 100%; padding-left: 2%; list-style-type: circle;">
            <u>
                <li>Templates</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Il y a deux dossiers dans le dossier "vue",<br>
                Le dossier template contient la structure de votre page HTML, tout ce qui ne bougera pas avec du
                PHP.<br>
                Elles ne sont pas supposées contenir de code HTML si ce n'est les variables contant les données des
                "parts"<br></p>

            <u>
                <li>Parts</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Le dossier parts contient des "morceaux" de code HTML
                contenant plus ou moins de code PHP, comme des boucles ou variables.<br>
                Ce sont les parties variables de votre page.</p>
            <u>
                <li>Par rapport à l'index ?</li>
            </u>
            <p style="margin-bottom: 1%; font-size: 100%;">Les templates sont des fichiers "remplis" avec les "parts"
                qui sont variables.<br>
                Les templates sont ensuite "imprimées" dans l'index selon l'adresse entrée.</p>
        </ul>
</body>

</html>