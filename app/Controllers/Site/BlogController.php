<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Helpers\Validator\FormValidate;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    private $blogRepository;
    public function __construct()
    {
        $this->blogRepository = new BlogRepository();
    }
    public function index()
    {
        return $this->view('blog');
    }
    public function novo()
    {
        if ($_POST) {
            $this->data['errors'] = FormValidate::make(['titulo' => 'required', 'descricao' => 'required|min:10|max:50'], $_POST);
            if (empty($this->data['errors']))
                $this->blogRepository->save($_POST);
        }

        return $this->view('blog_create');
    }
}
