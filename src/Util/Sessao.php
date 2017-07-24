<?php

namespace SerraBonita\Util;

class Sessao {

    function __construct() {
        
    }

    public function start() {
        return session_start();
    }

    public function alter($chave, $novo) {
        $_SESSION['noh'][$chave] = $novo;
    }

    public function add($chave, $valor) {
        $_SESSION['noh'][$chave] = $valor;
    }

    public function get($chave) {
        if (isset($_SESSION['noh'][$chave])) {
            return $_SESSION['noh'][$chave];
        } else
            return false;
    }

    public function remove($chave) {
        if (isset($_SESSION['noh'][$chave])) {
            session_unset($_SESSION['noh'][$chave]);
        };
    }

    public function delete($chave) {
        if (isset($_SESSION['noh'])) {
            session_unset($_SESSION['noh']);
        };
        session_destroy();
    }

}
