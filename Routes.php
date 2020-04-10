<?php
/**
 * SIMPLE CLASS TO ROUTING THE APPLICATION USING URLS TO DRIVE THE USER INTERFACE
 *
 * @author Maldoninho
 */
abstract class Routes {

    private static $routes;
    private static $url;

    private static function setRoutes($routes) {
        self::$routes = $routes;
        try {
            self::$url = parse_url(filter_input(INPUT_SERVER, "REQUEST_URI", FILTER_SANITIZE_URL), PHP_URL_PATH);
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        if (self::$url !== '/') {
            self::$url = explode('/', trim(self::$url, '/'));

            if (current(self::$url)) {
                if (mb_strlen(current(self::$url)) == '2') {
                    self::$routes['language'] = current(self::$url);
                    array_shift(self::$url);
                }
            }

            if (current(self::$url) && strtolower(current(self::$url)) === 'admin') {
                self::$routes['controller'] = self::$routes['admin.controller'];
                self::$routes['action'] = self::$routes['admin.action'];
                unset(self::$routes['admin.controller']);
                unset(self::$routes['admin.action']);
                self::$routes['admin'] = TRUE;
                array_shift(self::$url);
            } else {                
                self::$routes['admin'] = FALSE;
                unset(self::$routes['admin.controller']);
                unset(self::$routes['admin.action']);
            }

            if (current(self::$url)) {
                self::$routes['controller'] = current(self::$url);
                array_shift(self::$url);
            }

            if (current(self::$url)) {
                self::$routes['action'] = current(self::$url);
                array_shift(self::$url);
            }

            if (current(self::$url) && is_numeric(current(self::$url))) {
                self::$routes['id'] = current(self::$url);
                array_shift(self::$url);
            }

            if (current(self::$url)) {
                self::$routes['params'] = self::$url;
            }
        } else {
            unset(self::$routes['admin.controller']);
            unset(self::$routes['admin.action']);
        }
        return self::$routes;
    }

    public static function getRoutes($routes) {
        self::setRoutes($routes);
        return self::$routes;
    }

}
