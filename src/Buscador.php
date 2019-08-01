<?php


namespace maicomoreira\BuscadorDeCursos;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use http\Url;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpCliente;
    private $crawler;

    public function __construct(ClientInterface $httpclient)
    {
        $this->httpCliente = $httpclient;
        $this->crawler = new Crawler();
    }

    public function buscar(string $url) : array
    {
        $response = $this->httpCliente->request('GET', $url);
        $html = $response->getBody();
        $this->crawler-> addHtmlContent($html);
        $elementosCursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];

        foreach ($elementosCursos as $element) {
            $cursos[] = $element->textContent;
        }
        return $cursos;
    }
}
