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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/indexService' => [[['_route' => 'app_facture_index_service', '_controller' => 'App\\Controller\\FactureController::indexservice'], null, ['GET' => 0], null, false, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture/newFactureService' => [[['_route' => 'app_facture_new_service', '_controller' => 'App\\Controller\\FactureController::newFactureService'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture/getCountFacture' => [[['_route' => 'getCountFacture', '_controller' => 'App\\Controller\\FactureController::getClient'], null, ['GET' => 0], null, false, false, null]],
        '/facture/jsonSaveFacture' => [[['_route' => 'jsonSaveFacture', '_controller' => 'App\\Controller\\FactureController::jsonSaveFacture'], null, ['GET' => 0], null, false, false, null]],
        '/facture/jsonSaveFactureService' => [[['_route' => 'jsonSaveFactureService', '_controller' => 'App\\Controller\\FactureController::jsonSaveFactureService'], null, ['GET' => 0], null, false, false, null]],
        '/facture/jsonEditFacture' => [[['_route' => 'jsonEditFacture', '_controller' => 'App\\Controller\\FactureController::jsonEditFacture'], null, ['GET' => 0], null, false, false, null]],
        '/ligne/facture' => [[['_route' => 'app_ligne_facture_index', '_controller' => 'App\\Controller\\LigneFactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/facture/new' => [[['_route' => 'app_ligne_facture_new', '_controller' => 'App\\Controller\\LigneFactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/facture/jsonSaveLigneFacture' => [[['_route' => 'jsonSaveLigneFacture', '_controller' => 'App\\Controller\\LigneFactureController::jsonSaveLigneFacture'], null, ['GET' => 0], null, false, false, null]],
        '/ligne/facture/jsonSaveLigneFactureService' => [[['_route' => 'jsonSaveLigneFactureService', '_controller' => 'App\\Controller\\LigneFactureController::jsonSaveLigneFactureService'], null, ['GET' => 0], null, false, false, null]],
        '/ligne/facture/jsonSupprimerLigneFacture' => [[['_route' => 'jsonSupprimerLigneFacture', '_controller' => 'App\\Controller\\LigneFactureController::jsonSupprimerLigneFacture'], null, ['GET' => 0], null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/list_users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UsersController::list_users'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/new_user' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/analytics' => [[['_route' => 'analytics', '_controller' => 'App\\Controller\\DashboardController::analytics'], null, null, null, false, false, null]],
        '/finance' => [[['_route' => 'finance', '_controller' => 'App\\Controller\\DashboardController::finance'], null, null, null, false, false, null]],
        '/crypto' => [[['_route' => 'crypto', '_controller' => 'App\\Controller\\DashboardController::crypto'], null, null, null, false, false, null]],
        '/apps/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\AppsController::chat'], null, null, null, false, false, null]],
        '/apps/mailbox' => [[['_route' => 'app_mailbox', '_controller' => 'App\\Controller\\AppsController::mailbox'], null, null, null, false, false, null]],
        '/apps/todolist' => [[['_route' => 'app_todo_list', '_controller' => 'App\\Controller\\AppsController::todo_list'], null, null, null, false, false, null]],
        '/apps/notes' => [[['_route' => 'app_notes', '_controller' => 'App\\Controller\\AppsController::notes'], null, null, null, false, false, null]],
        '/apps/scrumboard' => [[['_route' => 'app_scrumboard', '_controller' => 'App\\Controller\\AppsController::scrumboard'], null, null, null, false, false, null]],
        '/apps/contacts' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\AppsController::contacts'], null, null, null, false, false, null]],
        '/apps/invoice/list' => [[['_route' => 'app_invoice_list', '_controller' => 'App\\Controller\\AppsController::invoice_list'], null, null, null, false, false, null]],
        '/apps/invoice/add' => [[['_route' => 'app_invoice_add', '_controller' => 'App\\Controller\\AppsController::invoice_add'], null, null, null, false, false, null]],
        '/apps/invoice/preview' => [[['_route' => 'app_invoice_preview', '_controller' => 'App\\Controller\\AppsController::invoice_preview'], null, null, null, false, false, null]],
        '/apps/invoice/edit' => [[['_route' => 'app_invoice_edit', '_controller' => 'App\\Controller\\AppsController::invoice_edit'], null, null, null, false, false, null]],
        '/apps/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\AppsController::calendar'], null, null, null, false, false, null]],
        '/components/tabs' => [[['_route' => 'ui_components_tabs', '_controller' => 'App\\Controller\\UIController::ui_components_tabs'], null, null, null, false, false, null]],
        '/components/accordions' => [[['_route' => 'ui_components_accordions', '_controller' => 'App\\Controller\\UIController::ui_components_accordions'], null, null, null, false, false, null]],
        '/components/modals' => [[['_route' => 'ui_components_modals', '_controller' => 'App\\Controller\\UIController::ui_components_modals'], null, null, null, false, false, null]],
        '/components/cards' => [[['_route' => 'ui_components_cards', '_controller' => 'App\\Controller\\UIController::ui_components_cards'], null, null, null, false, false, null]],
        '/components/carousel' => [[['_route' => 'ui_components_carousel', '_controller' => 'App\\Controller\\UIController::ui_components_carousel'], null, null, null, false, false, null]],
        '/components/countdown' => [[['_route' => 'ui_components_countdown', '_controller' => 'App\\Controller\\UIController::ui_components_countdown'], null, null, null, false, false, null]],
        '/components/counter' => [[['_route' => 'ui_components_counter', '_controller' => 'App\\Controller\\UIController::ui_components_counter'], null, null, null, false, false, null]],
        '/components/sweetalert' => [[['_route' => 'ui_components_sweetalert', '_controller' => 'App\\Controller\\UIController::ui_components_sweet_alert'], null, null, null, false, false, null]],
        '/components/timeline' => [[['_route' => 'ui_components_timeline', '_controller' => 'App\\Controller\\UIController::ui_components_timeline'], null, null, null, false, false, null]],
        '/components/notifications' => [[['_route' => 'ui_components_notifications', '_controller' => 'App\\Controller\\UIController::ui_components_notifications'], null, null, null, false, false, null]],
        '/components/media-object' => [[['_route' => 'ui_components_media_object', '_controller' => 'App\\Controller\\UIController::ui_components_media_object'], null, null, null, false, false, null]],
        '/components/list-group' => [[['_route' => 'ui_components_list_group', '_controller' => 'App\\Controller\\UIController::ui_components_list_group'], null, null, null, false, false, null]],
        '/components/pricing-table' => [[['_route' => 'ui_components_pricing_table', '_controller' => 'App\\Controller\\UIController::ui_components_pricing'], null, null, null, false, false, null]],
        '/components/lightbox' => [[['_route' => 'ui_components_lightbox', '_controller' => 'App\\Controller\\UIController::ui_components_lightbox'], null, null, null, false, false, null]],
        '/elements/alerts' => [[['_route' => 'ui_elements_alerts', '_controller' => 'App\\Controller\\UIController::elements_alerts'], null, null, null, false, false, null]],
        '/elements/avatar' => [[['_route' => 'ui_elements_avatar', '_controller' => 'App\\Controller\\UIController::elements_avatar'], null, null, null, false, false, null]],
        '/elements/badges' => [[['_route' => 'ui_elements_badges', '_controller' => 'App\\Controller\\UIController::elements_badges'], null, null, null, false, false, null]],
        '/elements/breadcrumbs' => [[['_route' => 'ui_elements_breadcrumbs', '_controller' => 'App\\Controller\\UIController::elements_breadcrumbs'], null, null, null, false, false, null]],
        '/elements/buttons' => [[['_route' => 'ui_elements_buttons', '_controller' => 'App\\Controller\\UIController::elements_buttons'], null, null, null, false, false, null]],
        '/elements/buttons-group' => [[['_route' => 'ui_elements_buttons_group', '_controller' => 'App\\Controller\\UIController::elements_button_group'], null, null, null, false, false, null]],
        '/elements/color-library' => [[['_route' => 'ui_elements_color_library', '_controller' => 'App\\Controller\\UIController::elements_color_library'], null, null, null, false, false, null]],
        '/elements/dropdown' => [[['_route' => 'ui_elements_dropdown', '_controller' => 'App\\Controller\\UIController::elements_dropdown'], null, null, null, false, false, null]],
        '/elements/infobox' => [[['_route' => 'ui_elements_infobox', '_controller' => 'App\\Controller\\UIController::elements_infobox'], null, null, null, false, false, null]],
        '/elements/jumbotron' => [[['_route' => 'ui_elements_jumbotron', '_controller' => 'App\\Controller\\UIController::elements_jumbotron'], null, null, null, false, false, null]],
        '/elements/loader' => [[['_route' => 'ui_elements_loader', '_controller' => 'App\\Controller\\UIController::elements_loader'], null, null, null, false, false, null]],
        '/elements/pagination' => [[['_route' => 'ui_elements_pagination', '_controller' => 'App\\Controller\\UIController::elements_pagination'], null, null, null, false, false, null]],
        '/elements/popovers' => [[['_route' => 'ui_elements_popovers', '_controller' => 'App\\Controller\\UIController::elements_popovers'], null, null, null, false, false, null]],
        '/elements/progress-bar' => [[['_route' => 'ui_elements_progress_bar', '_controller' => 'App\\Controller\\UIController::elements_progress_bar'], null, null, null, false, false, null]],
        '/elements/search' => [[['_route' => 'ui_elements_search', '_controller' => 'App\\Controller\\UIController::elements_search'], null, null, null, false, false, null]],
        '/elements/tooltips' => [[['_route' => 'ui_elements_tooltips', '_controller' => 'App\\Controller\\UIController::elements_tooltips'], null, null, null, false, false, null]],
        '/elements/treeview' => [[['_route' => 'ui_elements_treeview', '_controller' => 'App\\Controller\\UIController::elements_treeview'], null, null, null, false, false, null]],
        '/elements/typography' => [[['_route' => 'ui_elements_typography', '_controller' => 'App\\Controller\\UIController::elements_typography'], null, null, null, false, false, null]],
        '/charts' => [[['_route' => 'charts', '_controller' => 'App\\Controller\\UIController::charts'], null, null, null, false, false, null]],
        '/widgets' => [[['_route' => 'widgets', '_controller' => 'App\\Controller\\UIController::widgets'], null, null, null, false, false, null]],
        '/font-icons' => [[['_route' => 'font_icons', '_controller' => 'App\\Controller\\UIController::font_icons'], null, null, null, false, false, null]],
        '/dragndrop' => [[['_route' => 'drag_and_drop', '_controller' => 'App\\Controller\\UIController::drag_and_drop'], null, null, null, false, false, null]],
        '/tables' => [[['_route' => 'tables', '_controller' => 'App\\Controller\\TablesController::tables'], null, null, null, false, false, null]],
        '/datatables/advanced' => [[['_route' => 'datatables_advanced', '_controller' => 'App\\Controller\\TablesController::datatables_advanced'], null, null, null, false, false, null]],
        '/datatables/alt-pagination' => [[['_route' => 'datatables_alt_pagination', '_controller' => 'App\\Controller\\TablesController::datatables_alt_pagination'], null, null, null, false, false, null]],
        '/datatables/basic' => [[['_route' => 'datatables_basic', '_controller' => 'App\\Controller\\TablesController::datatables_basic'], null, null, null, false, false, null]],
        '/datatables/checkbox' => [[['_route' => 'datatables_checkbox', '_controller' => 'App\\Controller\\TablesController::datatables_checkbox'], null, null, null, false, false, null]],
        '/datatables/clone-header' => [[['_route' => 'datatables_clone_header', '_controller' => 'App\\Controller\\TablesController::datatables_clone_header'], null, null, null, false, false, null]],
        '/datatables/column-chooser' => [[['_route' => 'datatables_column_chooser', '_controller' => 'App\\Controller\\TablesController::datatables_column_chooser'], null, null, null, false, false, null]],
        '/datatables/export' => [[['_route' => 'datatables_export', '_controller' => 'App\\Controller\\TablesController::datatables_export'], null, null, null, false, false, null]],
        '/datatables/multi-column' => [[['_route' => 'datatables_multi_column', '_controller' => 'App\\Controller\\TablesController::datatables_multi_column'], null, null, null, false, false, null]],
        '/datatables/multiple-tables' => [[['_route' => 'datatables_multiple_tables', '_controller' => 'App\\Controller\\TablesController::datatables_multiple_tables'], null, null, null, false, false, null]],
        '/datatables/order-sorting' => [[['_route' => 'datatables_order_sorting', '_controller' => 'App\\Controller\\TablesController::datatables_order_sorting'], null, null, null, false, false, null]],
        '/datatables/range-search' => [[['_route' => 'datatables_range_search', '_controller' => 'App\\Controller\\TablesController::datatables_range_search'], null, null, null, false, false, null]],
        '/datatables/skin' => [[['_route' => 'datatables_skin', '_controller' => 'App\\Controller\\TablesController::datatables_skin'], null, null, null, false, false, null]],
        '/datatables/sticky-header' => [[['_route' => 'datatables_sticky_header', '_controller' => 'App\\Controller\\TablesController::datatables_sticky_header'], null, null, null, false, false, null]],
        '/forms/basic' => [[['_route' => 'forms_basic', '_controller' => 'App\\Controller\\FormsController::forms_basic'], null, null, null, false, false, null]],
        '/forms/input-group' => [[['_route' => 'forms_input_group', '_controller' => 'App\\Controller\\FormsController::forms_input_group'], null, null, null, false, false, null]],
        '/forms/layouts' => [[['_route' => 'forms_layouts', '_controller' => 'App\\Controller\\FormsController::forms_layouts'], null, null, null, false, false, null]],
        '/forms/validation' => [[['_route' => 'forms_validation', '_controller' => 'App\\Controller\\FormsController::forms_validation'], null, null, null, false, false, null]],
        '/forms/input-mask' => [[['_route' => 'forms_input_mask', '_controller' => 'App\\Controller\\FormsController::forms_input_mask'], null, null, null, false, false, null]],
        '/forms/checkbox-radio' => [[['_route' => 'forms_checkbox_radio', '_controller' => 'App\\Controller\\FormsController::forms_checkbox_radio'], null, null, null, false, false, null]],
        '/forms/select2' => [[['_route' => 'forms_select2', '_controller' => 'App\\Controller\\FormsController::forms_select2'], null, null, null, false, false, null]],
        '/forms/touchspin' => [[['_route' => 'forms_touchspin', '_controller' => 'App\\Controller\\FormsController::forms_touchspin'], null, null, null, false, false, null]],
        '/forms/switches' => [[['_route' => 'forms_switches', '_controller' => 'App\\Controller\\FormsController::forms_switches'], null, null, null, false, false, null]],
        '/forms/wizards' => [[['_route' => 'forms_wizards', '_controller' => 'App\\Controller\\FormsController::forms_wizards'], null, null, null, false, false, null]],
        '/forms/file-upload' => [[['_route' => 'forms_file_upload', '_controller' => 'App\\Controller\\FormsController::forms_file_upload'], null, null, null, false, false, null]],
        '/forms/quill-editor' => [[['_route' => 'forms_quill_editor', '_controller' => 'App\\Controller\\FormsController::forms_quill_editor'], null, null, null, false, false, null]],
        '/forms/markdown-editor' => [[['_route' => 'forms_markdown_editor', '_controller' => 'App\\Controller\\FormsController::forms_markdown_editor'], null, null, null, false, false, null]],
        '/forms/date-picker' => [[['_route' => 'forms_date_picker', '_controller' => 'App\\Controller\\FormsController::forms_date_picker'], null, null, null, false, false, null]],
        '/forms/clipboard' => [[['_route' => 'forms_clipboard', '_controller' => 'App\\Controller\\FormsController::forms_clipboard'], null, null, null, false, false, null]],
        '/users/profile' => [[['_route' => 'users_profile', '_controller' => 'App\\Controller\\UsersController::users_profile'], null, null, null, false, false, null]],
        '/users/user-account-settings' => [[['_route' => 'users_account_settings', '_controller' => 'App\\Controller\\UsersController::users_account_settings'], null, null, null, false, false, null]],
        '/pages/knowledge-base' => [[['_route' => 'pages_knowledge_base', '_controller' => 'App\\Controller\\PagesController::pages_knowledge_base'], null, null, null, false, false, null]],
        '/pages/contact-us' => [[['_route' => 'pages_contact_us', '_controller' => 'App\\Controller\\PagesController::pages_contact_us'], null, null, null, false, false, null]],
        '/pages/faq' => [[['_route' => 'pages_faq', '_controller' => 'App\\Controller\\PagesController::pages_faq'], null, null, null, false, false, null]],
        '/pages/coming-soon' => [[['_route' => 'pages_coming_soon', '_controller' => 'App\\Controller\\PagesController::pages_coming_soon'], null, null, null, false, false, null]],
        '/pages/error404' => [[['_route' => 'pages_error404', '_controller' => 'App\\Controller\\PagesController::pages_error404'], null, null, null, false, false, null]],
        '/pages/error500' => [[['_route' => 'pages_error500', '_controller' => 'App\\Controller\\PagesController::pages_error500'], null, null, null, false, false, null]],
        '/pages/error503' => [[['_route' => 'pages_error503', '_controller' => 'App\\Controller\\PagesController::pages_error503'], null, null, null, false, false, null]],
        '/pages/maintenence' => [[['_route' => 'pages_maintenence', '_controller' => 'App\\Controller\\PagesController::pages_maintenence'], null, null, null, false, false, null]],
        '/auth/boxed-signin' => [[['_route' => 'auth_boxed_signin', '_controller' => 'App\\Controller\\AuthController::auth_boxed_signin'], null, null, null, false, false, null]],
        '/auth/boxed-signup' => [[['_route' => 'auth_boxed_signup', '_controller' => 'App\\Controller\\AuthController::auth_boxed_signup'], null, null, null, false, false, null]],
        '/auth/boxed-lockscreen' => [[['_route' => 'auth_boxed_lockscreen', '_controller' => 'App\\Controller\\AuthController::auth_boxed_lockscreen'], null, null, null, false, false, null]],
        '/auth/boxed-password-reset' => [[['_route' => 'auth_boxed_password_reset', '_controller' => 'App\\Controller\\AuthController::auth_boxed_password_reset'], null, null, null, false, false, null]],
        '/auth/cover-login' => [[['_route' => 'auth_cover_login', '_controller' => 'App\\Controller\\AuthController::auth_cover_login'], null, null, null, false, false, null]],
        '/auth/cover-register' => [[['_route' => 'auth_cover_register', '_controller' => 'App\\Controller\\AuthController::auth_cover_register'], null, null, null, false, false, null]],
        '/auth/cover-lockscreen' => [[['_route' => 'auth_cover_lockscreen', '_controller' => 'App\\Controller\\AuthController::auth_cover_lockscreen'], null, null, null, false, false, null]],
        '/auth/cover-password-reset' => [[['_route' => 'auth_cover_password_reset', '_controller' => 'App\\Controller\\AuthController::auth_cover_password_reset'], null, null, null, false, false, null]],
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
                .'|/client/(?'
                    .'|([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                    .')'
                    .'|getClient(?'
                        .'|Facture/([^/]++)(*:241)'
                        .'|/([^/]++)(*:258)'
                    .')'
                    .'|([^/]++)(*:275)'
                .')'
                .'|/facture/([^/]++)(?'
                    .'|(*:304)'
                    .'|/(?'
                        .'|pdf(*:319)'
                        .'|generatePdf(*:338)'
                        .'|sendPdfByEmail(*:360)'
                        .'|edit(?'
                            .'|(*:375)'
                            .'|FactureService(*:397)'
                        .')'
                    .')'
                    .'|(*:407)'
                .')'
                .'|/ligne/facture/([^/]++)(?'
                    .'|(*:442)'
                    .'|/edit(*:455)'
                    .'|(*:463)'
                .')'
                .'|/pro(?'
                    .'|duit/([^/]++)(?'
                        .'|(*:495)'
                        .'|/edit(*:508)'
                        .'|(*:516)'
                    .')'
                    .'|file_user/([^/]++)(*:543)'
                .')'
                .'|/s(?'
                    .'|ervice/([^/]++)(?'
                        .'|(*:575)'
                        .'|/edit(*:588)'
                        .'|(*:596)'
                    .')'
                    .'|aveChangedRole/([^/]++)(*:628)'
                .')'
                .'|/([^/]++)/(?'
                    .'|edit_user(*:659)'
                    .'|reset_password(*:681)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'getClientFacture', '_controller' => 'App\\Controller\\ClientController::getClientFacture'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'getClient', '_controller' => 'App\\Controller\\ClientController::getClient'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        319 => [[['_route' => 'app_facture_show_pdf', '_controller' => 'App\\Controller\\FactureController::showpdf'], ['id'], ['GET' => 0], null, false, false, null]],
        338 => [[['_route' => 'app_generate_pdf', '_controller' => 'App\\Controller\\FactureController::generatePdfAction'], ['id'], ['GET' => 0], null, false, false, null]],
        360 => [[['_route' => 'app_send_email', '_controller' => 'App\\Controller\\FactureController::sendPdfByEmail'], ['id'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'app_facture_edit_service', '_controller' => 'App\\Controller\\FactureController::editFactureService'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_ligne_facture_show', '_controller' => 'App\\Controller\\LigneFactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_ligne_facture_edit', '_controller' => 'App\\Controller\\LigneFactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'app_ligne_facture_delete', '_controller' => 'App\\Controller\\LigneFactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        495 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        516 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UsersController::profile_user'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        575 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        596 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        628 => [[['_route' => 'saveChangedRole', '_controller' => 'App\\Controller\\UsersController::saveChangedRole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        659 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        681 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\UsersController::reset_password'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
