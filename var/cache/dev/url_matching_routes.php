<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/constat' => [[['_route' => 'app_constat_index', '_controller' => 'App\\Controller\\ConstatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/constat/indexfront' => [[['_route' => 'app_constat_indexfront', '_controller' => 'App\\Controller\\ConstatController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/constat/new' => [[['_route' => 'app_constat_new', '_controller' => 'App\\Controller\\ConstatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/constat/c/c/search' => [[['_route' => 'searchconstat', '_controller' => 'App\\Controller\\ConstatController::searchrbyobject'], null, null, null, false, false, null]],
        '/fhome' => [
            [['_route' => 'app_fhome', '_controller' => 'App\\Controller\\FhomeController::index'], null, null, null, false, false, null],
            [['_route' => 'fhhome', '_controller' => 'src\\Controller\\FhomeController::index'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, true, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/indexfront' => [[['_route' => 'app_reclamation_indexfront', '_controller' => 'App\\Controller\\ReclamationController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/s/search' => [[['_route' => 'searchrec', '_controller' => 'App\\Controller\\ReclamationController::searchrecbyobject'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'app_stat', '_controller' => 'App\\Controller\\StatController::index'], null, null, null, false, false, null]],
        '/s/stats' => [[['_route' => 'app_stats_stats', '_controller' => 'App\\Controller\\StatController::stats'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/constat/([^/]++)(?'
                    .'|(*:27)'
                    .'|/(?'
                        .'|showfront(*:47)'
                        .'|edit(*:58)'
                        .'|pdf(*:68)'
                    .')'
                    .'|(*:76)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:111)'
                        .'|/(?'
                            .'|showfront(*:132)'
                            .'|edit(*:144)'
                        .')'
                        .'|(*:153)'
                    .')'
                    .'|ponse/(?'
                        .'|new/([^/]++)(*:183)'
                        .'|([^/]++)(?'
                            .'|/edit(*:207)'
                            .'|(*:215)'
                        .')'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:243)'
                    .'|/edit(*:256)'
                    .'|(*:264)'
                .')'
                .'|/vehicule/(?'
                    .'|new(?'
                        .'|/([^/]++)(*:301)'
                        .'|2/([^/]++)(*:319)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:339)'
                        .'|/edit(*:352)'
                        .'|(*:360)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:401)'
                    .'|wdt/([^/]++)(*:421)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:467)'
                            .'|router(*:481)'
                            .'|exception(?'
                                .'|(*:501)'
                                .'|\\.css(*:514)'
                            .')'
                        .')'
                        .'|(*:524)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_constat_show', '_controller' => 'App\\Controller\\ConstatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_constat_showfront', '_controller' => 'App\\Controller\\ConstatController::showfront'], ['id'], ['GET' => 0], null, false, false, null]],
        58 => [[['_route' => 'app_constat_edit', '_controller' => 'App\\Controller\\ConstatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        68 => [[['_route' => 'app_constat_pdf', '_controller' => 'App\\Controller\\ConstatController::pdf'], ['id'], null, null, false, false, null]],
        76 => [[['_route' => 'app_constat_delete', '_controller' => 'App\\Controller\\ConstatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_reclamation_showfront', '_controller' => 'App\\Controller\\ReclamationController::showfront'], ['id'], ['GET' => 0], null, false, false, null]],
        144 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        207 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        215 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        319 => [[['_route' => 'app_vehicule_new2', '_controller' => 'App\\Controller\\VehiculeController::new2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        339 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        401 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        421 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        467 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        481 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        501 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        514 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        524 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
