<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/coach' => [[['_route' => 'coach', '_controller' => 'App\\Controller\\CoachController::index'], null, null, null, false, false, null]],
        '/admin/coach' => [[['_route' => 'admin_coach', '_controller' => 'App\\Controller\\CoachController::coachList'], null, null, null, false, false, null]],
        '/front/liste-coach-front' => [[['_route' => 'liste_coach_front', '_controller' => 'App\\Controller\\CoachController::listecoachFront'], null, null, null, false, false, null]],
        '/front/liste-coach-frontttt' => [[['_route' => 'mailing', '_controller' => 'App\\Controller\\CoachController::mail'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'cours', '_controller' => 'App\\Controller\\CoursController::index'], null, null, null, false, false, null]],
        '/admin/cours' => [[['_route' => 'admin_cours', '_controller' => 'App\\Controller\\CoursController::coursList'], null, null, null, false, false, null]],
        '/front/liste-courst-front' => [[['_route' => 'liste_cours_front', '_controller' => 'App\\Controller\\CoursController::listecoursFront'], null, null, null, false, false, null]],
        '/front/liste-cours-front' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\CoursController::mail'], null, null, null, false, false, null]],
        '/espritApi/allProduct' => [[['_route' => 'app_espritapi_allproduct', '_controller' => 'App\\Controller\\EspritApiController::allProduct'], null, ['GET' => 0], null, false, false, null]],
        '/espritApi/allEvent' => [[['_route' => 'app_espritapi_allevent', '_controller' => 'App\\Controller\\EspritApiController::allEvent'], null, ['GET' => 0], null, false, false, null]],
        '/espritApi/productss' => [[['_route' => 'app_espritapi_recupererproducts', '_controller' => 'App\\Controller\\EspritApiController::recupererProducts'], null, null, null, false, false, null]],
        '/admin/events' => [[['_route' => 'admin_events', '_controller' => 'App\\Controller\\EventController::eventList'], null, null, null, false, false, null]],
        '/admin/tri-event' => [[['_route' => 'tri_event', '_controller' => 'App\\Controller\\EventController::triEvent'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\EventController::search'], null, null, null, false, false, null]],
        '/event/liste-event-front' => [[['_route' => 'liste_event_front', '_controller' => 'App\\Controller\\EventController::listeEventFront'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'get_event', '_controller' => 'App\\Controller\\EventController::getEvent'], null, null, null, false, false, null]],
        '/exercice' => [[['_route' => 'exercice', '_controller' => 'App\\Controller\\ExerciceController::index'], null, null, null, false, false, null]],
        '/admin/exercice' => [[['_route' => 'admin_exercice', '_controller' => 'App\\Controller\\ExerciceController::exerciceList'], null, null, null, false, false, null]],
        '/front/liste-exercice-front' => [[['_route' => 'liste_exercice_front', '_controller' => 'App\\Controller\\ExerciceController::listeexerciceFront'], null, null, null, false, false, null]],
        '/info' => [[['_route' => 'info', '_controller' => 'App\\Controller\\InfoController::index'], null, null, null, false, false, null]],
        '/admin/info' => [[['_route' => 'admin_info', '_controller' => 'App\\Controller\\InfoController::infoList'], null, null, null, false, false, null]],
        '/front/liste-info-front' => [[['_route' => 'liste_info_front', '_controller' => 'App\\Controller\\InfoController::listeinfoFront'], null, null, null, false, false, null]],
        '/nutritionniste' => [[['_route' => 'nutritionniste', '_controller' => 'App\\Controller\\NutritionnisteController::index'], null, null, null, false, false, null]],
        '/admin/nutritionniste' => [[['_route' => 'admin_nutritionniste', '_controller' => 'App\\Controller\\NutritionnisteController::nutritionnisteList'], null, null, null, false, false, null]],
        '/front/liste-nutritionnistet-front' => [[['_route' => 'liste_nutritionniste_front', '_controller' => 'App\\Controller\\NutritionnisteController::listenutritionnisteFront'], null, null, null, false, false, null]],
        '/front/liste-nutritionnistet-frontjjjjjj' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\NutritionnisteController::mail'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\OrderController::cart'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\OrderController::checkout'], null, null, null, false, false, null]],
        '/order/store' => [[['_route' => 'order_store', '_controller' => 'App\\Controller\\OrderController::order_store'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'admin_order', '_controller' => 'App\\Controller\\OrderController::admin_index'], null, null, null, false, false, null]],
        '/admin/order/create' => [[['_route' => 'admin_order_create', '_controller' => 'App\\Controller\\OrderController::admin_create'], null, null, null, false, false, null]],
        '/admin/order/store' => [[['_route' => 'admin_order_store', '_controller' => 'App\\Controller\\OrderController::admin_store'], null, null, null, false, false, null]],
        '/admin/order/search' => [[['_route' => 'admin_order_search', '_controller' => 'App\\Controller\\OrderController::admin_search'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/search' => [[['_route' => 'product_search', '_controller' => 'App\\Controller\\ProductController::search'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product', '_controller' => 'App\\Controller\\ProductController::admin_index'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'admin_product_create', '_controller' => 'App\\Controller\\ProductController::admin_create'], null, null, null, false, false, null]],
        '/admin/product/store' => [[['_route' => 'admin_product_store', '_controller' => 'App\\Controller\\ProductController::admin_store'], null, null, null, false, false, null]],
        '/admin/product/search' => [[['_route' => 'admin_product_search', '_controller' => 'App\\Controller\\ProductController::admin_search'], null, null, null, false, false, null]],
        '/admin/promos' => [[['_route' => 'admin_promos', '_controller' => 'App\\Controller\\PromoController::promoList'], null, null, null, false, false, null]],
        '/regime' => [[['_route' => 'regime', '_controller' => 'App\\Controller\\RegimeController::index'], null, null, null, false, false, null]],
        '/admin/regime' => [[['_route' => 'admin_regime', '_controller' => 'App\\Controller\\RegimeController::regimeList'], null, null, null, false, false, null]],
        '/front/liste-regime-front' => [[['_route' => 'liste_regime_front', '_controller' => 'App\\Controller\\RegimeController::listenutritionnisteFront'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\UserController::signin'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\UserController::signup'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|update\\-(?'
                        .'|co(?'
                            .'|ach/([^/]++)(*:207)'
                            .'|urs/([^/]++)(*:227)'
                        .')'
                        .'|e(?'
                            .'|vent/([^/]++)(*:253)'
                            .'|xercice/([^/]++)(*:277)'
                        .')'
                        .'|info/([^/]++)(*:299)'
                        .'|nutritionniste/([^/]++)(*:330)'
                        .'|promo/([^/]++)(*:352)'
                        .'|regime/([^/]++)(*:375)'
                    .')'
                    .'|delete\\-(?'
                        .'|co(?'
                            .'|ach/([^/]++)(*:412)'
                            .'|urs/([^/]++)(*:432)'
                        .')'
                        .'|e(?'
                            .'|vent/([^/]++)(*:458)'
                            .'|xercice/([^/]++)(*:482)'
                        .')'
                        .'|info/([^/]++)(*:504)'
                        .'|nutritionniste/([^/]++)(*:535)'
                        .'|promo/([^/]++)(*:557)'
                        .'|regime/([^/]++)(*:580)'
                    .')'
                    .'|order/(?'
                        .'|d(?'
                            .'|e(?'
                                .'|tail/([^/]++)(*:619)'
                                .'|lete/([^/]++)(*:640)'
                            .')'
                            .'|ownload/([^/]++)(*:665)'
                        .')'
                        .'|edit/([^/]++)(*:687)'
                        .'|update/([^/]++)(*:710)'
                    .')'
                    .'|product/(?'
                        .'|edit/([^/]++)(*:743)'
                        .'|update/([^/]++)(*:766)'
                        .'|delete/([^/]++)(*:789)'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:820)'
                    .'|update/([^/]++)(*:843)'
                .')'
                .'|/product/(?'
                    .'|detail/([^/]++)(*:879)'
                    .'|filter/([^/]++)(*:902)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'update_coach', '_controller' => 'App\\Controller\\CoachController::update'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'update_cours', '_controller' => 'App\\Controller\\CoursController::update'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'update_event', '_controller' => 'App\\Controller\\EventController::update'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'update_exercice', '_controller' => 'App\\Controller\\ExerciceController::update'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'update_info', '_controller' => 'App\\Controller\\InfoController::update'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'update_nutritionniste', '_controller' => 'App\\Controller\\NutritionnisteController::update'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'update_promo', '_controller' => 'App\\Controller\\PromoController::update'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'update_regime', '_controller' => 'App\\Controller\\RegimeController::update'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'delete_coach', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'delete_cours', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'delete_event', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'delete_exercice', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'delete_info', '_controller' => 'App\\Controller\\InfoController::delete'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'delete_nutritionniste', '_controller' => 'App\\Controller\\NutritionnisteController::delete'], ['id'], null, null, false, true, null]],
        557 => [[['_route' => 'delete_promo', '_controller' => 'App\\Controller\\PromoController::delete'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'delete_regime', '_controller' => 'App\\Controller\\RegimeController::delete'], ['id'], null, null, false, true, null]],
        619 => [[['_route' => 'admin_order_detail', '_controller' => 'App\\Controller\\OrderController::admin_detail'], ['id'], null, null, false, true, null]],
        640 => [[['_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\OrderController::admin_delete'], ['id'], null, null, false, true, null]],
        665 => [[['_route' => 'admin_order_download', '_controller' => 'App\\Controller\\OrderController::admin_download'], ['id'], null, null, false, true, null]],
        687 => [[['_route' => 'admin_order_edit', '_controller' => 'App\\Controller\\OrderController::admin_edit'], ['id'], null, null, false, true, null]],
        710 => [[['_route' => 'admin_order_update', '_controller' => 'App\\Controller\\OrderController::admin_update'], ['id'], null, null, false, true, null]],
        743 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\ProductController::admin_edit'], ['id'], null, null, false, true, null]],
        766 => [[['_route' => 'admin_product_update', '_controller' => 'App\\Controller\\ProductController::admin_update'], ['id'], null, null, false, true, null]],
        789 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\ProductController::admin_delete'], ['id'], null, null, false, true, null]],
        820 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\OrderController::cart_add'], ['id'], null, null, false, true, null]],
        843 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\OrderController::cart_update'], ['id'], null, null, false, true, null]],
        879 => [[['_route' => 'product_detail', '_controller' => 'App\\Controller\\ProductController::detail'], ['id'], null, null, false, true, null]],
        902 => [
            [['_route' => 'product_filter_by_type', '_controller' => 'App\\Controller\\ProductController::filter_by_type'], ['type'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
