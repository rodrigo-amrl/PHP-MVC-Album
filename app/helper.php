<?php

use App\Config\App;

function asset_url($file)
{
    return App::BASE_URL . '/' . $file;
}
