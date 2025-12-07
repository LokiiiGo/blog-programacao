<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");

if(isset($_GET['id'])) {
        $postID = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postID) {
                $currentPost = $post;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=$BASE_URL?>./stylesheet/stylesheet.css">
  <link rel="icon" href="./img/blog.png" type="image-x icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title><?= $currentPost['title'] ?></title>
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
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>    
  </div>
  <!--
  <div class="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
      -->
</main>

<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>
</body>
</html>