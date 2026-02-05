<?php
$URL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


include "./controller/controlador.php";

if ($URL == "/site/") {
    mainpage();
}


else if ($URL == "/site/gatos") {
    gatospage();
}
else if ($URL == "/site/cachorros") {
    cachorrospage();
}
else if ($URL == "/site/peixes") {
    peixespage();
}


else if ($URL == "/site/aves") {
    avespage();
}
else if ($URL == "/site/mamiferos") {
    mamiferospage();
}
else if ($URL == "/site/roedores") {
    roedorespage();
}


else if ($URL == "/site/pesquisa") {
    pesquisapage();
}


else {
    echo "NOT FOUND!!";
}
?>
