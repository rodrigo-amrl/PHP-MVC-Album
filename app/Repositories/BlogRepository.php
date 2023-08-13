<?php

namespace App\Repositories;

use App\Models\BlogModel;

class BlogRepository
{
    public function save($data)
    {
        $blogModel = new BlogModel($data);
        $return = $blogModel->save();
    }
}
