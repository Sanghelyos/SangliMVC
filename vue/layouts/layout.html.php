<head>
    <meta charset="utf-8">

    <title>SangliMVC</title>
    <meta name="description" content="Mini Framework MVC">
    <meta name="author" content="Johann Pécheux">

    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
<?php

  //insertion navbar
  if($navbar != NULL){
   echo $navbar;
  }

  //insertion page
  echo $page_content;


  //insertion footer
  if($footer != NULL){
    echo $footer;
   }
    ?>

    <script></script>
    
</body>

</html>