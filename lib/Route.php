<?php

namespace lib;

class Route
{
    private static $routes = [];

    /*
     * * create route GET
     * @param $uri
     * @param $callback
     */

    public static function get($uri, $callback): void
    {
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $callback;
    }

    /*
     * * create route POST
     * @param $uri
     * @param $callback
     */
    public static function post($uri, $callback): void
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    /*
     * * Response
     * @param $response
     */
    public static function Response($response): void
    {
        if (is_array($response) || is_object($response)) {
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            echo $response;
        }
    }

    /*
     * * start route
     */
    public static function start(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = trim($uri, '/');
        $uri = explode('?', $uri)[0];

        // validate method
        if (!isset(self::$routes[$method])) {
            http_response_code(405);
            self::Response(['message' => 'Method Not Allowed']);
            return;
        }

        foreach (self::$routes[$method] as $route => $callback) {
            if (strpos($uri, '{')) {
                $pattern = '#^' . preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $uri) . '$#';
                if (preg_match($pattern, $uri, $matches)) {
                    array_shift($matches);
                    if (is_callable($callback)) {
                        $response = $callback(...$matches);
                    } else if (is_array($callback) || is_object($callback)) {
                        $controller = new $callback[0]();
                        $response = $controller->{$callback[1]}(...$matches);
                    }
                    self::Response($response);
                    return;
                }
            }

            if ($uri == $route) {
                if (is_callable($callback)) {
                    $response = $callback();
                } else if (is_array($callback) || is_object($callback)) {
                    $controller = new $callback[0]();
                    $response = $controller->{$callback[1]}();
                }
                self::Response($response);
                return;
            }
        }

        http_response_code(404);
        ob_start();
        include '../views/404.php';
        $content = ob_get_clean();
        echo $content;
    }

    /*
     * * Redirect to a different URL
     * @param string $url The URL to redirect to
     * @param int $statusCode The HTTP status code (default is 302)
     */
    public static function redirect($url, $statusCode = 302): void
    {
        header("Location: $url", true, $statusCode);
    }
}
