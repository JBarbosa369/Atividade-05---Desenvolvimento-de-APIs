<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetDevShop - O petshop do dev</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <?=  include "header.php"?>
<nav>
    <ul>
        <li class="active"><a href="">Todos</a></li>
        <li class=""><a href="">Cachorros</a></li>
        <li class=""><a href="">Gatos</a></li>
        <li class=""><a href="">Peixes</a></li>
    </ul>
</nav>
<section class="banner" style="background-image: url('<?= $banner?> ')"><?=$title?></section>
<h2><?=$title?>disponiveis para adoção</h2>

<div class="container list">
    <?php foreach($content as $animal):?> 
        <div class="items">
                <img src="<?= $animal['image']?>"class="item--image"/>
    <div class = "item--name"><?= $animal['name']?></div>
    <div class ="item--color">cor:<?= $animal['color']?></div>
    <div class="item--genre">genero:<?= $animal['genre']?></div>
        </div>
    <?php endforeach;?>
</div>
<?php include "footer.php"?>
<footer class="container">
    Feito com ❤ pelo SENAI
</footer>
</body>
</html>