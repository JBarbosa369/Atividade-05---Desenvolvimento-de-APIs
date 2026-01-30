<?php
include "./data/animals.php";
function mainpage(){
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "Todos os animais";
    $content = $items;
    include "./include/layout.php";
}

function gatospage(){
    $banner = "./imagens/allanimais.jpg";
    $title = "gatos";
    $content = $items;

    include "./include/layout.php";
}

function cachorrospage(){
    $banner = "./imagens/allanimais.jpg";
    $title = "cachorros";
    $content = $items;

    include "./include/layout.php";
}

function peixespage(){
    $banner = "./imagens/allanimais.jpg";
    $title = "peixes";
    $content = $items;

    include "./include/layout.php";
}
?>