<?php
$URL = $_SERVER['REQUEST_URI'];
echo $URL;
include "./controller/controlador.php";
if ($URL == "/atividade/"){
    echo "Entrou no If";
}
else if($URL == "/atividade/gatos"){
    echo "Rotas de gatos";
}
else if($URL == "/atividade/CaXorros"){
    echo "Rotas de caXorros";
}
else if($URL == "/atividade/peixes"){
   echo "Rotas de peixes"; 
}
else if($URL == "/atividadepesquisa"){
    echo "Rotas de pesquisa";
}
else{
    echo "NOT FOUND!!";
}
?>