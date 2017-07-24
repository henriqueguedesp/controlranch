<?php

namespace SerraBonita\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ControleNoticia {

    private $response;
    private $twig;
    private $request;
    private $sessao;

    function __construct(Response $response, \Twig_Environment $twig, \Symfony\Component\HttpFoundation\Request $request, Sessao $sessao) {
        $this->response = $response;
        $this->twig = $twig;
        $this->request = $request;
        $this->sessao = $sessao;
    }

  

    public function redireciona($destino) {
        $redirect = new RedirectResponse($destino);
        $redirect->send();
    }

   
}
