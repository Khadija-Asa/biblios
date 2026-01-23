<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/author' => [[['_route' => 'app_admin_author_index', '_controller' => 'App\\Controller\\Admin\\AuthorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/author/new' => [[['_route' => 'app_admin_author_new', '_controller' => 'App\\Controller\\Admin\\AuthorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/book' => [[['_route' => 'app_admin_book_index', '_controller' => 'App\\Controller\\Admin\\BookController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/book/new' => [[['_route' => 'app_admin_book_new', '_controller' => 'App\\Controller\\Admin\\BookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/editor' => [[['_route' => 'app_admin_editor_index', '_controller' => 'App\\Controller\\Admin\\EditorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/editor/new' => [[['_route' => 'app_admin_editor_new', '_controller' => 'App\\Controller\\Admin\\EditorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/main' => [[['_route' => 'app_admin_main_index', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'app_book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|author/(?'
                        .'|(\\d+)/edit(*:232)'
                        .'|(\\d+)(*:245)'
                    .')'
                    .'|book/(?'
                        .'|(\\d+)/edit(*:272)'
                        .'|(\\d+)(*:285)'
                    .')'
                    .'|editor/(?'
                        .'|(\\d+)/edit(*:314)'
                        .'|(\\d+)(*:327)'
                    .')'
                .')'
                .'|/book/(\\d+)(*:348)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        232 => [[['_route' => 'app_admin_author_edit', '_controller' => 'App\\Controller\\Admin\\AuthorController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'app_admin_author_show', '_controller' => 'App\\Controller\\Admin\\AuthorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_admin_book_edit', '_controller' => 'App\\Controller\\Admin\\BookController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_admin_book_show', '_controller' => 'App\\Controller\\Admin\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_admin_editor_edit', '_controller' => 'App\\Controller\\Admin\\EditorController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        327 => [[['_route' => 'app_admin_editor_show', '_controller' => 'App\\Controller\\Admin\\EditorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        348 => [
            [['_route' => 'app_book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
