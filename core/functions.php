<?php

use Core\Response;

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($value)
{
    echo "</pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if ($condition) {
        abort($status);
    }
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require_once basePath('views/' . $path);
}
