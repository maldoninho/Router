<?php

/* 
 * Reequire the ROUTES class
 */
require("Routes.php");

/**
 * DEFINE THE CONST ROUTES TO ACCESS THE DEFAULT ROUTES INTO THE CLASS
 */
define("ROUTES",
        [
            "language" => "",         // DEFINE DEFAULT LANGUAGE
            "controller" => "",       // DEFINE DEFAULT CONTROLLER
            "action" => "",           // DEFINE DEFAULT ACTION
            "admin.controller" => "", // DEFINE DEFAULT ADMIN CONTROLLER
            "admin.action" => ""      // DEFINE DEFAULT ADMIN ACTION
        ]
);

/**
 * INSTANTIATE THE CLASS
 * @return array like:
 * 
        [language] =>     // DEFINED DEFAULT LANGUAGE OR LANGUAGE GIVED IN THE URL
        [admin] =>        // LIKE GIVED IN THE URL -  ITS RETURN A BOOLEAN VALUE TRUE OR FALSE
        [controller] =>   // DEFINED DEFAULT CONTROLLER OR CONTROLLER GIVED IN THE URL
        [action] =>       // DEFINED DEFAULT ACTION OR ACTION GIVED IN THE URL
        [id] =>           // TAKE ONLY NUMERIC VALUE GIVED IN THE URL AFTER THE ACTION 
        [params] => Array // RETURN THE PARAMS JUST IF GIVED IN THE URL
            (
                [0] => p1
                [1] => p2
                [2] => p3
                [3] => p4
            )
 */
Routes::getRoutes(ROUTERS);
