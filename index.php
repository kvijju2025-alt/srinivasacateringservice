<?php
/**
 * Srinivasa Catering Services — Front Controller
 * Works as both production entry point and PHP built-in dev server router.
 */

define('BASEPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('APPPATH',  BASEPATH . 'app' . DIRECTORY_SEPARATOR);
define('VIEWPATH', APPPATH  . 'views' . DIRECTORY_SEPARATOR);
define('PUBPATH',  BASEPATH . 'public' . DIRECTORY_SEPARATOR);

// ---- Static file passthrough for `php -S localhost:8080` ----
if (PHP_SAPI === 'cli-server') {
    $file = BASEPATH . ltrim($_SERVER['REQUEST_URI'], '/');
    // Strip query string
    $file = strtok($file, '?');
    if ($file !== BASEPATH . 'index.php' && is_file($file)) {
        // Let the built-in server serve it natively
        return false;
    }
}

// ---- Autoloader ----
spl_autoload_register(function ($class) {
    $paths = [
        APPPATH . 'core/'        . $class . '.php',
        APPPATH . 'controllers/' . $class . '.php',
    ];
    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

require_once APPPATH . 'core/Router.php';
require_once APPPATH . 'core/Controller.php';

$router = new Router();
$router->dispatch();
