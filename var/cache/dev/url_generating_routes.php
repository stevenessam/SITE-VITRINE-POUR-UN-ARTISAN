<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_admin_dashboard_index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'chantier_index' => [[], ['_controller' => 'App\\Controller\\ChantierController::index'], [], [['text', '/chantier/']], [], []],
    'chantier_new' => [[], ['_controller' => 'App\\Controller\\ChantierController::new'], [], [['text', '/chantier/new']], [], []],
    'chantier_show' => [['id'], ['_controller' => 'App\\Controller\\ChantierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chantier']], [], []],
    'chantier_edit' => [['id'], ['_controller' => 'App\\Controller\\ChantierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chantier']], [], []],
    'chantier_delete' => [['id'], ['_controller' => 'App\\Controller\\ChantierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chantier']], [], []],
    'demande_devis_index' => [[], ['_controller' => 'App\\Controller\\DemandeDevisController::index'], [], [['text', '/demande/devis/']], [], []],
    'demande_devis_new' => [[], ['_controller' => 'App\\Controller\\DemandeDevisController::new'], [], [['text', '/demande/devis/new']], [], []],
    'demande_devis_show' => [['id'], ['_controller' => 'App\\Controller\\DemandeDevisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/demande/devis']], [], []],
    'demande_devis_edit' => [['id'], ['_controller' => 'App\\Controller\\DemandeDevisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/demande/devis']], [], []],
    'demande_devis_delete' => [['id'], ['_controller' => 'App\\Controller\\DemandeDevisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/demande/devis']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'image_index' => [[], ['_controller' => 'App\\Controller\\ImageController::index'], [], [['text', '/image/']], [], []],
    'image_new' => [[], ['_controller' => 'App\\Controller\\ImageController::new'], [], [['text', '/image/new']], [], []],
    'image_show' => [['id'], ['_controller' => 'App\\Controller\\ImageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
    'image_edit' => [['id'], ['_controller' => 'App\\Controller\\ImageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
    'image_delete' => [['id'], ['_controller' => 'App\\Controller\\ImageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/image']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/offre/']], [], []],
    'reponse_new' => [[], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/offre/new']], [], []],
    'reponse_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], []],
    'reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], []],
    'reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'type_chantier_index' => [[], ['_controller' => 'App\\Controller\\TypeChantierController::index'], [], [['text', '/type/chantier/']], [], []],
    'type_chantier_new' => [[], ['_controller' => 'App\\Controller\\TypeChantierController::new'], [], [['text', '/type/chantier/new']], [], []],
    'type_chantier_show' => [['id'], ['_controller' => 'App\\Controller\\TypeChantierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/chantier']], [], []],
    'type_chantier_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeChantierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/chantier']], [], []],
    'type_chantier_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeChantierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/chantier']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
];
