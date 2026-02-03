<?php
$URL =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $URL;
include "./controller/controlador.php";
if ($URL == "/site/"){
    mainpage();
    
}
else if($URL == "/site/gatos"){
  
    gatospage();
    
}
else if($URL == "/site/cachorros"){
    echo "Rotas de Cachorros";
    cachorrospage();
  
}
else if($URL == "/site/peixes"){
   echo "Rotas de peixes"; 
   peixespage();
 
}
else if($URL == "/site/pesquisa"){
    echo "Rotas de pesquisa";
    pesquisapage();

}

else{
    echo "NOT FOUND!!";
}
?>