<?php

namespace App\Controllers;

class Controller
{

    protected array $data;
    public function __construct()
    {
    }
    function view($file, $layout = 'layout', $path = "site/pages/")
    {
        //pagina atual
        $page = BASE_VIEW . $path . $file . '.php';

        //transforma os dados do array em variáveis
        extract($this->data);

        //layout selecionado
        $layout = BASE_VIEW . 'site/layout/' . $layout . '.php';

        return file_exists($layout) ? require($layout) : '';
    }
}
