<?php

namespace SerraBonita\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use SerraBonita\Util\Sessao;

class ControleIndex {

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

    public function home() {
        //return $this->response->setContent($this->twig->render('TemplateHome.html.twig', array('dados' => $dados, 'user' => $usuario)));
        return $this->response->setContent($this->twig->render('TemplateHome.html.twig'));
    }

    public function redireciona($destino) {
        $redirect = new RedirectResponse($destino);
        $redirect->send();
    }

}
