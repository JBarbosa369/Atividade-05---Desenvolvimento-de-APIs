<?php
$URL = $_SERVER['REQUEST_URI'];
echo $URL;
include "./controller/controlador.php";
if ($URL == "/atividade/"){
    echo "Entrou no If";
    mainpage();
}
else if($URL == "/atividade/gatos"){
    echo "Rotas de gatos";
    gatospage();
}
else if($URL == "/atividade/CaXorros"){
    echo "Rotas de caXorros";
    cachorrospaige();
}
else if($URL == "/atividade/peixes"){
   echo "Rotas de peixes"; 
   peixespaige();
}
else if($URL == "/atividadepesquisa"){
    echo "Rotas de pesquisa";
    pesquisapaige();
}
else{
    echo "NOT FOUND!!";
}
?>