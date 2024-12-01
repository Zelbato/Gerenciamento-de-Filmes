<?php

namespace core;

use app\classes\Uri;

class Controller
{
    public function getController()
    {
        // Exemplo de funcionalidade básica para teste
        return "Controller ativo! A URI atual é: " . Uri::getUri();
    }
}
