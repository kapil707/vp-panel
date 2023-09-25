<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router_Hook
{
        /**
         * Loads routes from database.
         *
         * @access public
         * @params array : hostname, username, password, database, db_prefix
         * @return void
         */
    function get_routes($params)
    {
        global $DB_ROUTES;

        $con = mysqli_connect($params[0], $params[1], $params[2]);

        mysqli_select_db($con,$params[3]);

        $sql = "SELECT * FROM {$params[4]}routes";
        $query = mysqli_query($con,$sql);

        $routes = array();
        while ($route = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $routes[$route['route']] = $route['controller'];
        }
        mysqli_free_result($query);
        mysqli_close();
        $DB_ROUTES = $routes;
    }
}