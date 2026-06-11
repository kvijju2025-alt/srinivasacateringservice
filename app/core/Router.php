<?php
class Router {
    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Remove public/ prefix if accessed directly
        $uri = preg_replace('#^public/?#', '', $uri);

        if (empty($uri) || $uri === 'index.php') {
            $controllerName = 'Home';
            $method         = 'index';
        } else {
            $segments       = explode('/', $uri);
            $controllerName = ucfirst(strtolower($segments[0]));
            $method         = isset($segments[1]) ? strtolower($segments[1]) : 'index';
        }

        $file = APPPATH . 'controllers/' . $controllerName . '.php';

        if (file_exists($file)) {
            require_once $file;
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                $controller->index();
            }
        } else {
            http_response_code(404);
            echo '<h1>404 – Page Not Found</h1>';
        }
    }
}
