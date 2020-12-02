<?php


namespace services;


class Renderer
{
    public static function render($tmp, $param)
    {
        ob_start();
        extract($param);
        require 'views/' . $tmp . '.tpl.php';
        return ob_get_clean();
    }
}