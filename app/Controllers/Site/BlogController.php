<?php

namespace App\Controllers\Site;

use App\Controllers\Controller;
use App\Helpers\ValidateForm;
use Pecee\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog');
    }
    public function novo()
    {
        if (($_POST)) {
            $validate = ValidateForm::make(['titulo' => 'required', 'descricao' => 'required|min:10|max:50'], $_POST);
            dd('passou');
        }

        return view('blog_create');
    }
}
