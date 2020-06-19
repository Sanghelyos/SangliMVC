# SangliMVC

------------------<br>
--L'arborescence--<br>
------------------<br>
<br>
L'arborescence est structurée d'une façon bien précise. Elle peut cependant être modifiée sans difficulté.<br>
<br>
-La racine-<br>
La racine du site. C'est là que se trouvent tous les dossiers, le fichier index.php et .htaccess qui sert à configurer le serveur.<br>
<br>
-public-<br>
Dans ce dossier, il y a toutes les assets, comme les images, les feuilles de styles, scripts etc...<br>
<br>
-Controllers-
Le dossier controllers contient... les controllers... Etonnant non ?<br>
<br>
-Les models-<br>
Le dossier model contient les classes et fonctions.<br>
Ainsi que tout ce qui peut servir au traitement<br>
<br>
-Les vues-<br>
Le dossier vue contient les templates HTML ainsi que les morceaux HTML à intégrer.<br>
<br>
-Les librairies-<br>
Il est conseillé de ranger vos librairies dans le dossier lib.<br>
<br>
--------------<br>
--Le routage--<br>
--------------<br>
<br>
Le routage est là pour rediriger vers la page souhaitée tout en restant sur l'index.<br>
pour le moment, tout le routage se passe dans l'index.<br>
<br>
-Tout dans un switch case-<br>
Toute la partie routage de l'index se passe dans un "switch case", où chaque cas correspond à une page. Dans l'exécution de chaque cas, il faut exécuter un ou<br> plusieurs controllers.<br>
<br>
-Et le switch case "default" ?-<br>
La valeur par défaut du switch case, où si la valeur de la page n'est pas reconnue, sert à rediriger sur<br>
une page 404 ou non trouvée personnalisée.<br>
<br>
-------------------<br>
--Les controllers--<br>
-------------------<br>
<br>
Les controllers servent à générer et assembler les parties HTML.<br>
C'est aussi là que se passera certains traitements et appels de fonctions ou de classes.<br>
<br>
-ob_start()-<br>
Tout simplement, une instruction indiquant le début de mise en tampon.<br>
C'est là dedans qu'on doit indiquer les morceaux d'HTML à inclure dans les templates. Il est préférable de traiter les données et de créer les variables avant toute mise en tampon,<br>
car ces variables seront utilisées dans vos morceaux HTML.<br>
<br>
-ob_get_clean()-<br>
L'instruction indiquant la fin de mise en tampon, et stockage du contenu du tampon dans une variable.<br>
Ce sont ces variables de fin de mise en tampon qui seront généralement incluses dans vos templates.<br>
<br>
-La template-<br>
La ou les templates sont à inclure à la fin, après les mises en tampon. Ce seront vos pages qui seront affichées.<br>
<br>
---------------------------------<br>
--Les models et base de données--<br>
---------------------------------<br>
<br>
Dans le dossier model repose vos classes, fonctions et autres traitements.<br>
C'est aussi ici que se trouvent les paramètres de la base de données.<br>
<br>
-Classes et fonctions-<br>
Les classes et fonctions sont à déposer ici et sont à appeler dans vos controllers.<br>
<br>
-base de données-<br>
Le fichier "database.php" contient une fonction avec tous les paramètres<br>
nécessaires à la connexion d'une base de données.<br>
<br>
-Le model original-<br>
Il existe une classe "Model" dans un fichier appelé "model.php", qui est utilisée comme parent<br>
Pour les autres classes. Ceci permet de faire des requêtes dans des méthodes sans avoir à spécifier<br>
un argument de bdd dans chaque méthode qui l'utilise.<br>
Ceci n'est pas du tout obligatoire, vous pouvez inclure "database.php" où vous voulez<br>
et appeler sa fonction comme bon vous semble si mon procédé ne vous conviens pas.<br>
<br>
-----------------<br>
--Les templates--<br>
-----------------<br>
<br>
Dans le dossier model repose vos classes, fonctions et autres traitements.<br>
C'est aussi ici que se trouvent les paramètres de la base de données.<br>
<br>
-Templates-<br>
Il y a deux dossiers dans le dossier "vue",<br>
Le dossier template contient la structure de votre page HTML, tout ce qui ne bougera pas avec du PHP.<br>
Elles ne sont pas supposées contenir de code HTML si ce n'est les variables contant les données des "parts"<br>
<br>
-Parts-<br>
Le dossier parts contient des "morceaux" de code HTML contenant plus ou moins de code PHP, comme des boucles ou variables.<br>
Ce sont les parties variables de votre page.<br>
<br>
-Par rapport à l'index ?-<br>
Les templates sont des fichiers "remplis" avec les "parts" qui sont variables.<br>
Les templates sont ensuite "imprimées" dans l'index selon l'adresse entrée.<br>
