<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'coach' => [[], ['_controller' => 'App\\Controller\\CoachController::index'], [], [['text', '/coach']], [], []],
    'admin_coach' => [[], ['_controller' => 'App\\Controller\\CoachController::coachList'], [], [['text', '/admin/coach']], [], []],
    'update_coach' => [['id'], ['_controller' => 'App\\Controller\\CoachController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-coach']], [], []],
    'delete_coach' => [['id'], ['_controller' => 'App\\Controller\\CoachController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-coach']], [], []],
    'liste_coach_front' => [[], ['_controller' => 'App\\Controller\\CoachController::listecoachFront'], [], [['text', '/front/liste-coach-front']], [], []],
    'mailing' => [[], ['_controller' => 'App\\Controller\\CoachController::mail'], [], [['text', '/front/liste-coach-frontttt']], [], []],
    'cours' => [[], ['_controller' => 'App\\Controller\\CoursController::index'], [], [['text', '/cours']], [], []],
    'admin_cours' => [[], ['_controller' => 'App\\Controller\\CoursController::coursList'], [], [['text', '/admin/cours']], [], []],
    'update_cours' => [['id'], ['_controller' => 'App\\Controller\\CoursController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-cours']], [], []],
    'delete_cours' => [['id'], ['_controller' => 'App\\Controller\\CoursController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-cours']], [], []],
    'liste_cours_front' => [[], ['_controller' => 'App\\Controller\\CoursController::listecoursFront'], [], [['text', '/front/liste-courst-front']], [], []],
    'mail' => [[], ['_controller' => 'App\\Controller\\CoursController::mail'], [], [['text', '/front/liste-cours-front']], [], []],
    'app_espritapi_allproduct' => [[], ['_controller' => 'App\\Controller\\EspritApiController::allProduct'], [], [['text', '/espritApi/allProduct']], [], []],
    'app_espritapi_allevent' => [[], ['_controller' => 'App\\Controller\\EspritApiController::allEvent'], [], [['text', '/espritApi/allEvent']], [], []],
    'app_espritapi_recupererproducts' => [[], ['_controller' => 'App\\Controller\\EspritApiController::recupererProducts'], [], [['text', '/espritApi/productss']], [], []],
    'admin_events' => [[], ['_controller' => 'App\\Controller\\EventController::eventList'], [], [['text', '/admin/events']], [], []],
    'tri_event' => [[], ['_controller' => 'App\\Controller\\EventController::triEvent'], [], [['text', '/admin/tri-event']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\EventController::search'], [], [['text', '/admin/search']], [], []],
    'update_event' => [['id'], ['_controller' => 'App\\Controller\\EventController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-event']], [], []],
    'delete_event' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-event']], [], []],
    'liste_event_front' => [[], ['_controller' => 'App\\Controller\\EventController::listeEventFront'], [], [['text', '/event/liste-event-front']], [], []],
    'get_event' => [[], ['_controller' => 'App\\Controller\\EventController::getEvent'], [], [['text', '/event']], [], []],
    'exercice' => [[], ['_controller' => 'App\\Controller\\ExerciceController::index'], [], [['text', '/exercice']], [], []],
    'admin_exercice' => [[], ['_controller' => 'App\\Controller\\ExerciceController::exerciceList'], [], [['text', '/admin/exercice']], [], []],
    'update_exercice' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-exercice']], [], []],
    'delete_exercice' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-exercice']], [], []],
    'liste_exercice_front' => [[], ['_controller' => 'App\\Controller\\ExerciceController::listeexerciceFront'], [], [['text', '/front/liste-exercice-front']], [], []],
    'info' => [[], ['_controller' => 'App\\Controller\\InfoController::index'], [], [['text', '/info']], [], []],
    'admin_info' => [[], ['_controller' => 'App\\Controller\\InfoController::infoList'], [], [['text', '/admin/info']], [], []],
    'update_info' => [['id'], ['_controller' => 'App\\Controller\\InfoController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-info']], [], []],
    'delete_info' => [['id'], ['_controller' => 'App\\Controller\\InfoController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-info']], [], []],
    'liste_info_front' => [[], ['_controller' => 'App\\Controller\\InfoController::listeinfoFront'], [], [['text', '/front/liste-info-front']], [], []],
    'nutritionniste' => [[], ['_controller' => 'App\\Controller\\NutritionnisteController::index'], [], [['text', '/nutritionniste']], [], []],
    'admin_nutritionniste' => [[], ['_controller' => 'App\\Controller\\NutritionnisteController::nutritionnisteList'], [], [['text', '/admin/nutritionniste']], [], []],
    'update_nutritionniste' => [['id'], ['_controller' => 'App\\Controller\\NutritionnisteController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-nutritionniste']], [], []],
    'delete_nutritionniste' => [['id'], ['_controller' => 'App\\Controller\\NutritionnisteController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-nutritionniste']], [], []],
    'liste_nutritionniste_front' => [[], ['_controller' => 'App\\Controller\\NutritionnisteController::listenutritionnisteFront'], [], [['text', '/front/liste-nutritionnistet-front']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\NutritionnisteController::mail'], [], [['text', '/front/liste-nutritionnistet-frontjjjjjj']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\OrderController::cart_add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_update' => [['id'], ['_controller' => 'App\\Controller\\OrderController::cart_update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/update']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\OrderController::cart'], [], [['text', '/cart']], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\OrderController::checkout'], [], [['text', '/checkout']], [], []],
    'order_store' => [[], ['_controller' => 'App\\Controller\\OrderController::order_store'], [], [['text', '/order/store']], [], []],
    'admin_order' => [[], ['_controller' => 'App\\Controller\\OrderController::admin_index'], [], [['text', '/admin/order']], [], []],
    'admin_order_detail' => [['id'], ['_controller' => 'App\\Controller\\OrderController::admin_detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/order/detail']], [], []],
    'admin_order_download' => [['id'], ['_controller' => 'App\\Controller\\OrderController::admin_download'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/order/download']], [], []],
    'admin_order_create' => [[], ['_controller' => 'App\\Controller\\OrderController::admin_create'], [], [['text', '/admin/order/create']], [], []],
    'admin_order_store' => [[], ['_controller' => 'App\\Controller\\OrderController::admin_store'], [], [['text', '/admin/order/store']], [], []],
    'admin_order_edit' => [['id'], ['_controller' => 'App\\Controller\\OrderController::admin_edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/order/edit']], [], []],
    'admin_order_update' => [['id'], ['_controller' => 'App\\Controller\\OrderController::admin_update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/order/update']], [], []],
    'admin_order_delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::admin_delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/order/delete']], [], []],
    'admin_order_search' => [[], ['_controller' => 'App\\Controller\\OrderController::admin_search'], [], [['text', '/admin/order/search']], [], []],
    'product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], []],
    'product_detail' => [['id'], ['_controller' => 'App\\Controller\\ProductController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product/detail']], [], []],
    'product_search' => [[], ['_controller' => 'App\\Controller\\ProductController::search'], [], [['text', '/product/search']], [], []],
    'product_filter_by_type' => [['type'], ['_controller' => 'App\\Controller\\ProductController::filter_by_type'], [], [['variable', '/', '[^/]++', 'type'], ['text', '/product/filter']], [], []],
    'admin_product' => [[], ['_controller' => 'App\\Controller\\ProductController::admin_index'], [], [['text', '/admin/product']], [], []],
    'admin_product_create' => [[], ['_controller' => 'App\\Controller\\ProductController::admin_create'], [], [['text', '/admin/product/create']], [], []],
    'admin_product_store' => [[], ['_controller' => 'App\\Controller\\ProductController::admin_store'], [], [['text', '/admin/product/store']], [], []],
    'admin_product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::admin_edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product/edit']], [], []],
    'admin_product_update' => [['id'], ['_controller' => 'App\\Controller\\ProductController::admin_update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product/update']], [], []],
    'admin_product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::admin_delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product/delete']], [], []],
    'admin_product_search' => [[], ['_controller' => 'App\\Controller\\ProductController::admin_search'], [], [['text', '/admin/product/search']], [], []],
    'admin_promos' => [[], ['_controller' => 'App\\Controller\\PromoController::promoList'], [], [['text', '/admin/promos']], [], []],
    'update_promo' => [['id'], ['_controller' => 'App\\Controller\\PromoController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-promo']], [], []],
    'delete_promo' => [['id'], ['_controller' => 'App\\Controller\\PromoController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-promo']], [], []],
    'regime' => [[], ['_controller' => 'App\\Controller\\RegimeController::index'], [], [['text', '/regime']], [], []],
    'admin_regime' => [[], ['_controller' => 'App\\Controller\\RegimeController::regimeList'], [], [['text', '/admin/regime']], [], []],
    'update_regime' => [['id'], ['_controller' => 'App\\Controller\\RegimeController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/update-regime']], [], []],
    'delete_regime' => [['id'], ['_controller' => 'App\\Controller\\RegimeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/delete-regime']], [], []],
    'liste_regime_front' => [[], ['_controller' => 'App\\Controller\\RegimeController::listenutritionnisteFront'], [], [['text', '/front/liste-regime-front']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/login']], [], []],
    'signin' => [[], ['_controller' => 'App\\Controller\\UserController::signin'], [], [['text', '/signin']], [], []],
    'signup' => [[], ['_controller' => 'App\\Controller\\UserController::signup'], [], [['text', '/signup']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
];
