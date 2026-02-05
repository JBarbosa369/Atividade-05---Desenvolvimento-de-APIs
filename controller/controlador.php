<?php
include "./data/animals.php";
function mainpage(){
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "Todos os animais";
    $content = $items;
    include "./include/layout.php";
};

function gatospage(){
    global $items;
    $banner = "./images/banner_cat.jpg";
    $content = array_filter($items,function($animals){
        return $animals['type'] == "gato";
    });
    $title = "gatos";
    include "./include/layout.php";
};

function cachorrospage(){
    global $items;
    $banner = "./images/banner_dog.jpg";
    $content = array_filter($items,function($animals){
        return $animals['type'] == "cachorro";
    });
    $title = "cachorros";
    include "./include/layout.php";
};

function peixespage(){
    global $items;
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $content = array_filter($items,function($animals){
        return $animals['type'] == "peixe";
    });
    include "./include/layout.php";


};


function pesquisapage(){
    global $items;
    $nome = $_GET['nome'];
    $banner = "./images/allanimals.jpg";
    $content = array_filter($items,function($animal)use($nome){
        return $animal['nome'] == $nome;
    });
 
    
    include "./include/layout.php";
};
function avespage(){
    global $items;
    $banner = "./images/banner_aves.jpg";
    $title = "aves";

    $content = array_filter($items, function($animal){
        return $animal['type'] == 'aves';
    });

    if (!empty($_GET['genre'])) {
        $content = array_filter($content, function ($animal) {
            return $animal['genre'] == $_GET['genre'];
        });
    }

    if (!empty($_GET['color'])) {
        $content = array_filter($content, function ($animal) {
            return $animal['color'] == $_GET['color'];
        });
    }

    include "./include/layout.php";
};


function mamiferospage(){
    global $items;
    $banner = "./images/banner_mamiferos.jpg";
    $title = "mamíferos";

    $content = array_filter($items, function($animal){
        return $animal['type'] == 'mamiferos';
    });
    if (!empty($_GET['genre'])) {
    $content = array_filter($content, function ($animal) {
        return $animal['genre'] == $_GET['genre'];
    });
};

if (!empty($_GET['color'])) {
    $content = array_filter($content, function ($animal) {
        return $animal['color'] == $_GET['color'];
    });
}


    include "./include/layout.php";
};

function roedorespage(){
    global $items;
    $banner = "./images/banner_roedores.jpg";
    $title = "roedores";

    $content = array_filter($items, function($animal){
        return $animal['type'] == 'roedores';
    });
    if (!empty($_GET['genre'])) {
    $content = array_filter($content, function ($animal) {
        return $animal['genre'] == $_GET['genre'];
    });
}

if (!empty($_GET['color'])) {
    $content = array_filter($content, function ($animal) {
        return $animal['color'] == $_GET['color'];
    });
}


    include "./include/layout.php";
};

?>
