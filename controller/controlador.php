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
}

?>