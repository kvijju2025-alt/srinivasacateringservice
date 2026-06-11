<?php
class Controller {
    protected function render(string $view, array $data = []): void {
        extract($data, EXTR_SKIP);
        $file = VIEWPATH . str_replace('/', DIRECTORY_SEPARATOR, $view) . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            http_response_code(500);
            echo "View not found: {$view}";
        }
    }
}
