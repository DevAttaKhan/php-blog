<?php


function dd($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}


function base_path($path)
{
    return BASE_PATH . $path;
}


function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}


function redirect($path)
{
    header("location: {$path}");
    exit();
}


function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}
