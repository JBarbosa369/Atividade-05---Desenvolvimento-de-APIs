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

<?= include "header.php" ?>
<form method="GET" style="margin-bottom:20px;">
    <select name="genre">
        <option value="">Gênero</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select>

    <select name="color">
        <option value="">Cor</option>
        <option value="marrom">Marrom</option>
        <option value="azul">Azul</option>
        <option value="amarelo">Amarelo</option>
    </select>

    <button type="submit">Filtrar</button>
</form>

<nav>
    <ul>
        <li class="active"><a href="/site">Todos</a></li>
        <li><a href="/site/cachorros">Cachorros</a></li>
        <li><a href="/site/gatos">Gatos</a></li>
        <li><a href="/site/peixes">Peixes</a></li>

        <!-- 🔽 NOVAS PÁGINAS -->
        <li><a href="/site/aves">Aves</a></li>
        <li><a href="/site/mamiferos">Mamíferos</a></li>
        <li><a href="/site/roedores">Roedores</a></li>
    </ul>
</nav>

<?php if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) != "/site/pesquisa"): ?>
    <section class="banner banner--small" style="background-image: url('<?= $banner ?>')">
        <?= $title ?>
    </section>

    <h2><?= $title ?> disponíveis para adoção</h2>
<?php endif; ?>

<div class="container list">
    <?php foreach ($content as $animal): ?> 
        <div class="items">
            <img src="<?= $animal['image'] ?>" class="item--image"/>
            <div class="item--name"><?= $animal['name'] ?></div>
            <div class="item--color">cor: <?= $animal['color'] ?></div>
            <div class="item--genre">gênero: <?= $animal['genre'] ?></div>
        </div>
    <?php endforeach; ?>
</div>

<?php include "footer.php" ?>

<footer class="container">
    Feito com ❤ pelo SENAI
</footer>

</body>
</html>
