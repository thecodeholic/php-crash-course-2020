<?php
/**
 * User: TheCodeholic
 * Date: 10/11/2020
 * Time: 10:05 AM
 */

namespace app;


/**
 * Class Router
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app
 */
class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public ?Database $database = null;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $url = $_SERVER['PATH_INFO'] ?? '/';

        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }
        if (!$fn) {
            echo 'Page not found';
            exit;
        }
        echo call_user_func($fn, $this);
    }

    public function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include __DIR__."/views/$view.php";
        $content = ob_get_clean();
        include __DIR__."/views/_layout.php";
    }
}