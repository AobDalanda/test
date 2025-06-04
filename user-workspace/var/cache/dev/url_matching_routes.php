<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/parcel/new' => [[['_route' => 'app_parcel_new', '_controller' => 'App\\Controller\\ParcelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parcel/list' => [[['_route' => 'app_parcel_list', '_controller' => 'App\\Controller\\ParcelController::list'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
        '/admin/statistics/api' => [[['_route' => 'app_statistics_api', '_controller' => 'App\\Controller\\StatisticsController::apiStatistics'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/parcel/(?'
                    .'|track/([^/]++)(*:67)'
                    .'|([^/]++)/(?'
                        .'|update\\-status(*:100)'
                        .'|apply\\-penalty(*:122)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'app_parcel_show', '_controller' => 'App\\Controller\\ParcelController::show'], ['trackingNumber'], ['GET' => 0], null, false, true, null]],
        100 => [[['_route' => 'app_parcel_update_status', '_controller' => 'App\\Controller\\ParcelController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        122 => [
            [['_route' => 'app_parcel_apply_penalty', '_controller' => 'App\\Controller\\ParcelController::applyPenalty'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
