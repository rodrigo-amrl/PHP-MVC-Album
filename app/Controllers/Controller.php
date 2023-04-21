<?php

namespace App\Controllers;

class Controller
{

    public function __construct()
    {
    }
    /**
     * Renderiza a pagina, já com a estrutura do layout
     *
     * @param String $file
     * @param array $data
     * @param string $layout
     */
    public function view($file, $data = [], $layout = 'layout', $path = "pages/")
    {
        //pagina atual
        $page = BASE_VIEW . $path . $file . '.php';

        //transforma os dados do array em variáveis
        extract($data);

        //layout selecionado
        $layout = BASE_VIEW . 'layout/' . $layout . '.php';

        return file_exists($layout) ? require($layout) : '';
    }
}
