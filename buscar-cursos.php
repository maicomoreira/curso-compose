<?php

require 'vendor/autoload.php';

use maicomoreira\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;


$client = new Client(['base_uri'=>'https://www.alura.com.br']);
$buscador = new Buscador($client);

$cursos = $buscador->buscar('/cursos-online-programacao/php');
foreach ($cursos as $curso)
{
    echo exibirMensagem($curso);
}


