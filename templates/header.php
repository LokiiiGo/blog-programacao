<!--helpers e posts-->

<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
    include_once("index.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Programação</title>
    <link rel="icon" href="./img/blog.png" type="image-x icon">
    <!--Aplicação CSS-->
    <link rel="stylesheet" href="<?=$BASE_URL?>./stylesheets/stylesheet.css">
    <!--Google Fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?=$BASE_URL?>" id="logo">
        <img src="<?=$BASE_URL?>img/blog.png" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="#" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>