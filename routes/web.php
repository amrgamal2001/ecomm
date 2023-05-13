<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Payment Routes
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

/********* HyperPay *********/
Route::get('create-form', 'paymentController@createForm')->name('create-form');
Route::get('payment-result', 'paymentController@paymentResult')->name('payment-result');

/********* my_fatoorah *********/
Route::get('my_fatoorah', 'paymentController@my_fatoorah')->name('my_fatoorah');
Route::get('my_fatoorah_success', 'paymentController@my_fatoorah_success')->name('my_fatoorah_success');
Route::get('my_fatoorah_faild', 'paymentController@my_fatoorah_faild')->name('my_fatoorah_faild');

/*
|--------------------------------------------------------------------------
| supervisor Routes
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

#supervisor-control
Route::get('supervisor-control', 'ajaxController@supervisor_control')->name('supervisor_control');

/*
|--------------------------------------------------------------------------
| AJAX Routes
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

#rmvImage
Route::post('rmvImage', 'ajaxController@rmvImage')->name('rmvImage');

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

Route::group(['namespace' => 'site'], function () {
    #change Lang
    Route::get('change-lang/{lang}', 'mainController@language')->name('site_language');
    /*  Lang middleware */
    Route::middleware('lang')->group(function () {
        ############ start mainController ############
        #Login
        Route::get('log-in', 'mainController@login')->name('site_login');
        Route::post('log-in', 'mainController@post_login')->name('site_post_login');
        #Register
        Route::get('register/{type}', 'mainController@register')->name('site_register');
        Route::post('register', 'mainController@post_register')->name('site_post_register');
        #Forget_password
        Route::get('forget-password', 'mainController@forget_password')->name('site_forget_password');
        Route::post('forget-password', 'mainController@post_forget_password')->name('site_post_forget_password');
        #Reset_password
        Route::get('reset-password/{id}/{code}', 'mainController@reset_password')->name('site_reset_password');
        Route::post('reset-password', 'mainController@post_reset_password')->name('site_post_reset_password');
        #Logout
        Route::get('log-out', 'mainController@logout')->name('site_logout');
        #mail_list
        Route::post('mail-list', 'mainController@mail_list')->name('mail_list');
        #Home
        Route::get('/', 'mainController@home')->name('site_home');
        #Common question
        Route::get('common-question', 'mainController@common_question')->name('common_question');
        #site-condition
        Route::get('site-condition', 'mainController@site_condition')->name('site_condition');
        #Contact us
        Route::get('contact-us', 'mainController@contact_us')->name('contact_us');
        Route::post('contact-us', 'mainController@post_contact_us')->name('post_contact_us');
        #About us
        Route::get('page/{title}', 'mainController@page')->name('page');
        #sections
        Route::post('search', 'orderController@search')->name('search');
        Route::get('all-sections', 'orderController@all_sections')->name('all_sections');
        #service
        Route::get('show-service/{service_id}', 'orderController@show_service')->name('show_service');
        ############ end mainController ############

        ############ start orderController ############
        /*  Auth middleware */
        Route::middleware('siteAuth')->group(function () {
            ##############################likes
            Route::get('show-likes', 'orderController@show_likes')->name('show_likes');
            Route::post('add-to-like', 'orderController@add_to_like')->name('add_to_like');

            ##############################Cart
            #show
            Route::any('show-cart', 'orderController@show_cart')->name('show_cart');
            #add
            Route::any('add-to-cart', 'orderController@add_to_cart')->name('add_to_cart');
            #update & Delete
            Route::any('update-to-cart', 'orderController@update_to_cart')->name('update_to_cart');
            #update & Delete All
            Route::any('update-all-cart', 'orderController@update_all_cart')->name('update_all_cart');
            #check promo code
            Route::any('check_promo', 'orderController@check_promo')->name('check_promo');


            ##############################profile
            Route::get('show-profile', 'orderController@show_profile')->name('show_profile');
            Route::post('update-profile', 'orderController@update_profile')->name('update_profile');
            Route::post('update-password', 'orderController@update_password')->name('update_password');
            ##############################address
            #store
            Route::post('store-address', 'orderController@storeAddress')->name('storeAddress');
            #update
            Route::post('update-address', 'orderController@updateAddress')->name('updateAddress');
            #delete
            Route::get('delete-address/{id}', 'orderController@deleteAddress')->name('deleteAddress');
            ##############################order

            #store order
            Route::any('fill_address_data', 'orderController@fill_address_data')->name('fill_address_data');
            Route::any('checkout', 'orderController@checkout')->name('checkout');
            Route::post('store-order', 'orderController@store_order')->name('store-order');
            Route::get('order-bill/{order_id}', 'orderController@order_bill')->name('order-bill');
            #client orders
            Route::get('current-orders', 'orderController@current_orders')->name('current-orders');
            Route::get('finish-orders', 'orderController@finish_orders')->name('finish-orders');
            #show order
            Route::get('order-details/{order_id}', 'orderController@order_details')->name('order-details');
            #change order status
            Route::get('change-order-status/{order_id}/{status}', 'orderController@change_order_status')->name('change-order-status');
            Route::get('change-request-status/{order_id}/{status}', 'orderController@change_request_status')->name('change-request-status');
            #rate
            Route::post('rate-order', 'orderController@rate_order')->name('rate-order');
        });
        ############ end orderController ############
    });
});

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

Route::group(['namespace' => 'admin'], function () {
    #change lang
    Route::get('change-lang/{lang}', 'mainController@language')->name('admin_language');
    #seen contact
    Route::post('contact-seen', 'mainController@contact_seen')->name('contact-seen');
    /*  Lang middleware */
    Route::middleware('lang')->group(function () {
        #login
        Route::get('admin-panel/login', 'mainController@login')->name('admin_login');
        Route::post('login', 'mainController@post_login')->name('admin_post_login');
        #logout
        Route::get('logout', 'mainController@logout')->name('admin_logout');

        /*  Auth middleware */
        Route::middleware('adminAuth')->group(function () {
            #home
            Route::get('admin-panel/control', 'mainController@home')->name('admin_home');

            Route::middleware('hasPermission')->group(function () {
                /******************************************** settingController Start ********************************************/
                Route::get(
                    'settings',
                    [
                        'uses' => 'settingController@index', 'as' => 'settings', 'title' => 'الإعدادات', 'icon' => '<i class="fa fa-cog"></i>',
                        'child' => [
                            'updatesetting',
                            'updatesocial',
                            'updatelocation',
                            'updateseo',
                        ]
                    ]
                );

                #Update setting
                Route::post('update-setting', ['uses' => 'settingController@update', 'as' => 'updatesetting', 'title' => 'تحديث الإعدادات']);
                #Update social
                Route::post('update-social', ['uses' => 'settingController@social', 'as' => 'updatesocial', 'title' => 'تحديث مواقع التواصل']);
                #Update location
                Route::post('update-location', ['uses' => 'settingController@location', 'as' => 'updatelocation', 'title' => 'تحديث الخريطة']);
                #Update seo
                Route::post('update-seo', ['uses' => 'settingController@seo', 'as' => 'updateseo', 'title' => 'تحديث محركات البحث']);

                /********************************************* settingController End *********************************************/

                /******************************************** permissionController Start ********************************************/
                Route::get(
                    'permissions',
                    [
                        'uses' => 'permissionController@index', 'as' => 'permissions', 'title' => 'الصلاحيات', 'icon' => '<i class="fa fa-cog"></i>',
                        'child' => [
                            'addpagepermission',
                            'addpermission',
                            'editpagepermission',
                            'updatepermission',
                            'deletepermission',
                        ]
                    ]
                );

                #Add permission page
                Route::get('add-page-permission', ['uses' => 'permissionController@add', 'as' => 'addpagepermission', 'title' => 'صفحة اضافة صلاحية']);
                #Add permission
                Route::post('add-permission', ['uses' => 'permissionController@store', 'as' => 'addpermission', 'title' => 'اضافة صلاحية']);
                #Edit permission page
                Route::get('edit-page-permission/{role_id}', ['uses' => 'permissionController@edit', 'as' => 'editpagepermission', 'title' => 'صفحة تعديل صلاحية']);
                #Update permission
                Route::post('update-permission', ['uses' => 'permissionController@update', 'as' => 'updatepermission', 'title' => 'تعديل صلاحية']);
                #Delete permission
                Route::post('delete-permission', ['uses' => 'permissionController@delete', 'as' => 'deletepermission', 'title' => 'حذف صلاحية']);

                /********************************************* permissionController End *********************************************/

                /******************************************** adminController Start ********************************************/
                Route::get(
                    'admins',
                    [
                        'uses' => 'adminController@index', 'as' => 'admins', 'title' => 'المديرين', 'icon' => '<i class="fa fa-user-circle"></i>',
                        'child' => [
                            'addadmin',
                            'updateadmin',
                            'deleteadmin',
                            'deleteadmins',
                        ]
                    ]
                );

                #Add admin
                Route::post('add-admin', ['uses' => 'adminController@store', 'as' => 'addadmin', 'title' => 'اضافة مدير']);
                #Update admin
                Route::post('update-admin', ['uses' => 'adminController@update', 'as' => 'updateadmin', 'title' => 'تعديل مدير']);
                #Delete admin
                Route::post('delete-admin', ['uses' => 'adminController@delete', 'as' => 'deleteadmin', 'title' => 'حذف مدير']);
                #Delete admins
                Route::post('delete-admins', ['uses' => 'adminController@delete_all', 'as' => 'deleteadmins', 'title' => 'حذف اكثر من مدير']);

                /********************************************* adminController End *********************************************/

                /******************************************** userController Start ********************************************/
                Route::get(
                    'users',
                    [
                        'uses' => 'userController@index', 'as' => 'users', 'title' => 'الأعضاء', 'icon' => '<i class="fa fa-users"></i>',
                        'child' => [
                            'adduser',
                            'updateuser',
                            'sendnotifyuser',
                            'deleteuser',
                            'deleteusers',
                            'changestatususer',
                        ]
                    ]
                );

                #Add User
                Route::post('add-user', ['uses' => 'userController@store', 'as' => 'adduser', 'title' => 'اضافة عضو']);
                #Update User
                Route::post('update-user', ['uses' => 'userController@update', 'as' => 'updateuser', 'title' => 'تعديل عضو']);
                #Send notify
                Route::post('send-notify-user', ['uses' => 'userController@send_notify', 'as' => 'sendnotifyuser', 'title' => 'أرسال إشعار']);
                #Change User Status
                Route::post('change-user-status', ['uses' => 'userController@change_user_status', 'as' => 'changestatususer', 'title' => 'بتغير حالة عضو']);
                #Delete User
                Route::post('delete-user', ['uses' => 'userController@delete', 'as' => 'deleteuser', 'title' => 'حذف عضو']);
                #Delete Users
                Route::post('delete-users', ['uses' => 'userController@delete_all', 'as' => 'deleteusers', 'title' => 'حذف اكثر من عضو']);

                /********************************************* userController End *********************************************/

                /******************************************** providerController Start ********************************************/
                // Route::get(
                //     'providers',
                //     [
                //         'uses' => 'providerController@index', 'as' => 'providers', 'title' => 'المندوبين', 'icon' => '<i class="fa fa-users"></i>',
                //         'child' => [
                //             'addprovider',
                //             'updateprovider',
                //             'sendnotifyprovider',
                //             'deleteprovider',
                //             'deleteproviders',
                //             'changestatusprovider',
                //         ]
                //     ]
                // );

                #Add Provider
                Route::post('add-provider', ['uses' => 'providerController@store', 'as' => 'addprovider', 'title' => 'اضافة مندوب']);
                #Update Provider
                Route::post('update-provider', ['uses' => 'providerController@update', 'as' => 'updateprovider', 'title' => 'تعديل مندوب']);
                #Send notify
                Route::post('send-notify-provider', ['uses' => 'providerController@send_notify', 'as' => 'sendnotifyprovider', 'title' => 'أرسال إشعار']);
                #Change Provider Status
                Route::post('change-provider-status', ['uses' => 'providerController@change_provider_status', 'as' => 'changestatusprovider', 'title' => 'بتغير حالة مندوب']);
                #Delete Provider
                Route::post('delete-provider', ['uses' => 'providerController@delete', 'as' => 'deleteprovider', 'title' => 'حذف مندوب']);
                #Delete Providers
                Route::post('delete-providers', ['uses' => 'providerController@delete_all', 'as' => 'deleteproviders', 'title' => 'حذف اكثر من مندوب']);

                /********************************************* providerController End *********************************************/

                /******************************************** pageController Start ********************************************/
                Route::get(
                    'pages',
                    [
                        'uses' => 'pageController@index', 'as' => 'pages', 'title' => 'الصفحات الاساسية', 'icon' => '<i class="fa fa-cog"></i>',
                        'child' => [
                            'addpage',
                            'updatepage',
                            'deletepage',
                            'deletepages',
                        ]
                    ]
                );

                #Add page
                Route::post('add-page', ['uses' => 'pageController@store', 'as' => 'addpage', 'title' => 'اضافة صفحة']);
                #Update page
                Route::post('update-page', ['uses' => 'pageController@update', 'as' => 'updatepage', 'title' => 'تعديل صفحة']);
                #Delete page
                Route::post('delete-page', ['uses' => 'pageController@delete', 'as' => 'deletepage', 'title' => 'حذف صفحة']);
                #Delete pages
                Route::post('delete-pages', ['uses' => 'pageController@delete_all', 'as' => 'deletepages', 'title' => 'حذف اكثر من صفحة']);

                /********************************************* pageController End *********************************************/

                /******************************************** propertyController Start ********************************************/
                Route::get(
                    'propertys',
                    [
                        'uses' => 'propertyController@index', 'as' => 'propertys', 'title' => 'السمات', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'addproperty',
                            'updateproperty',
                            'deleteproperty',
                            'deletepropertys',
                        ]
                    ]
                );

                #Add property
                Route::post('add-property', ['uses' => 'propertyController@store', 'as' => 'addproperty', 'title' => 'اضافة سمة']);
                #Update property
                Route::post('update-property', ['uses' => 'propertyController@update', 'as' => 'updateproperty', 'title' => 'تعديل سمة']);
                #Delete property
                Route::post('delete-property', ['uses' => 'propertyController@delete', 'as' => 'deleteproperty', 'title' => 'حذف سمة']);
                #Delete propertys
                Route::post('delete-propertys', ['uses' => 'propertyController@delete_all', 'as' => 'deletepropertys', 'title' => 'حذف اكثر من سمة']);

                /********************************************* propertyController End *********************************************/

                /******************************************** property_itemController Start ********************************************/
                Route::get(
                    'property_items/{section_id}',
                    [
                        'uses' => 'property_itemController@index', 'as' => 'property_items', 'title' => 'خصائص السمات', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'addproperty_item',
                            'updateproperty_item',
                            'deleteproperty_item',
                            'deleteproperty_items',
                        ]
                    ]
                );

                #Add property_item
                Route::post('add-property_item', ['uses' => 'property_itemController@store', 'as' => 'addproperty_item', 'title' => 'اضافة خاصية']);
                #Update property_item
                Route::post('update-property_item', ['uses' => 'property_itemController@update', 'as' => 'updateproperty_item', 'title' => 'تعديل خاصية']);
                #Delete property_item
                Route::post('delete-property_item', ['uses' => 'property_itemController@delete', 'as' => 'deleteproperty_item', 'title' => 'حذف خاصية']);
                #Delete property_items
                Route::post('delete-property_items', ['uses' => 'property_itemController@delete_all', 'as' => 'deleteproperty_items', 'title' => 'حذف اكثر من خاصية']);

                /********************************************* property_itemController End *********************************************/

                /******************************************** sectionController Start ********************************************/
                Route::get(
                    'sections',
                    [
                        'uses' => 'sectionController@index', 'as' => 'sections', 'title' => 'الأقسام', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'addsection',
                            'updatesection',
                            'deletesection',
                            'deletesections',
                        ]
                    ]
                );

                #Add section
                Route::post('add-section', ['uses' => 'sectionController@store', 'as' => 'addsection', 'title' => 'اضافة قسم']);
                #Update section
                Route::post('update-section', ['uses' => 'sectionController@update', 'as' => 'updatesection', 'title' => 'تعديل قسم']);
                #Delete section
                Route::post('delete-section', ['uses' => 'sectionController@delete', 'as' => 'deletesection', 'title' => 'حذف قسم']);
                #Delete sections
                Route::post('delete-sections', ['uses' => 'sectionController@delete_all', 'as' => 'deletesections', 'title' => 'حذف اكثر من قسم']);

                /********************************************* sectionController End *********************************************/

                /******************************************** sub_sectionController Start ********************************************/
                Route::get(
                    'sub_sections/{section_id}',
                    [
                        'uses' => 'sub_sectionController@index', 'as' => 'sub_sections', 'title' => 'الأقسام الفرعية', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'addsub_section',
                            'updatesub_section',
                            'deletesub_section',
                            'deletesub_sections',
                        ]
                    ]
                );

                #Add sub_section
                Route::post('add-sub_section', ['uses' => 'sub_sectionController@store', 'as' => 'addsub_section', 'title' => 'اضافة قسم']);
                #Update sub_section
                Route::post('update-sub_section', ['uses' => 'sub_sectionController@update', 'as' => 'updatesub_section', 'title' => 'تعديل قسم']);
                #Delete sub_section
                Route::post('delete-sub_section', ['uses' => 'sub_sectionController@delete', 'as' => 'deletesub_section', 'title' => 'حذف قسم']);
                #Delete sub_sections
                Route::post('delete-sub_sections', ['uses' => 'sub_sectionController@delete_all', 'as' => 'deletesub_sections', 'title' => 'حذف اكثر من قسم']);

                /********************************************* sub_sectionController End *********************************************/

                /******************************************** serviceController Start ********************************************/
                Route::get(
                    'services',
                    [
                        'uses' => 'serviceController@index', 'as' => 'services', 'title' => 'الخدمات', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'newservice',
                            'addservice',
                            'editservice',
                            'updateservice',
                            'deleteservice',
                            'deleteservices',
                        ]
                    ]
                );

                #Add service
                Route::get('new-service', ['uses' => 'serviceController@new', 'as' => 'newservice', 'title' => 'صفحة اضافة خدمة']);
                Route::post('add-service', ['uses' => 'serviceController@store', 'as' => 'addservice', 'title' => 'اضافة خدمة']);
                #Update service
                Route::get('edit-service/{id}', ['uses' => 'serviceController@edit', 'as' => 'editservice', 'title' => 'صفحة تعديل خدمة']);
                Route::post('update-service', ['uses' => 'serviceController@update', 'as' => 'updateservice', 'title' => 'تعديل خدمة']);
                #Delete service
                Route::post('delete-service', ['uses' => 'serviceController@delete', 'as' => 'deleteservice', 'title' => 'حذف خدمة']);
                #Delete services
                Route::post('delete-services', ['uses' => 'serviceController@delete_all', 'as' => 'deleteservices', 'title' => 'حذف اكثر من خدمة']);

                /********************************************* serviceController End *********************************************/

                /******************************************** orderController Start ********************************************/
                Route::get(
                    'orders/{status}',
                    [
                        'uses' => 'orderController@index', 'as' => 'orders', 'title' => 'الطلبات',
                        'child' => [
                            'showorder',
                            'changeorder',
                            // 'deleteorder',
                            // 'deleteorders',
                        ]
                    ]
                );

                #show order
                Route::get('show-order/{id}', ['uses' => 'orderController@show', 'as' => 'showorder', 'title' => 'عرض طلب']);
                #change order
                Route::get('change-order/{id}', ['uses' => 'orderController@change', 'as' => 'changeorder', 'title' => 'تغيير حالة الطلب']);
                // #Delete order
                // Route::post('delete-order', ['uses' => 'orderController@delete', 'as' => 'deleteorder', 'title' => 'حذف طلب']);
                // #Delete orders
                // Route::post('delete-orders', ['uses' => 'orderController@delete_all', 'as' => 'deleteorders', 'title' => 'حذف اكثر من طلب']);

                /********************************************* orderController End *********************************************/

                /******************************************** countryController Start ********************************************/
                // Route::get(
                //     'countrys',
                //     [
                //         'uses' => 'countryController@index', 'as' => 'countrys', 'title' => 'الدول', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                //         'child' => [
                //             'addcountry',
                //             'updatecountry',
                //             'deletecountry',
                //             'deletecountrys',
                //         ]
                //     ]
                // );

                #Add country
                Route::post('add-country', ['uses' => 'countryController@store', 'as' => 'addcountry', 'title' => 'اضافة دولة']);
                #Update country
                Route::post('update-country', ['uses' => 'countryController@update', 'as' => 'updatecountry', 'title' => 'تعديل دولة']);
                #Delete country
                Route::post('delete-country', ['uses' => 'countryController@delete', 'as' => 'deletecountry', 'title' => 'حذف دولة']);
                #Delete countrys
                Route::post('delete-countrys', ['uses' => 'countryController@delete_all', 'as' => 'deletecountrys', 'title' => 'حذف اكثر من دولة']);

                /********************************************* countryController End *********************************************/

                /******************************************** cityController Start ********************************************/
                // Route::get(
                //     'citys',
                //     [
                //         'uses' => 'cityController@index', 'as' => 'citys', 'title' => 'المدن', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                //         'child' => [
                //             'addcity',
                //             'updatecity',
                //             'deletecity',
                //             'deletecitys',
                //         ]
                //     ]
                // );

                #Add city
                Route::post('add-city', ['uses' => 'cityController@store', 'as' => 'addcity', 'title' => 'اضافة مدينة']);
                #Update city
                Route::post('update-city', ['uses' => 'cityController@update', 'as' => 'updatecity', 'title' => 'تعديل مدينة']);
                #Delete city
                Route::post('delete-city', ['uses' => 'cityController@delete', 'as' => 'deletecity', 'title' => 'حذف مدينة']);
                #Delete citys
                Route::post('delete-citys', ['uses' => 'cityController@delete_all', 'as' => 'deletecitys', 'title' => 'حذف اكثر من مدينة']);

                /********************************************* cityController End *********************************************/

                /******************************************** neighborhoodController Start ********************************************/
                // Route::get(
                //     'neighborhoods',
                //     [
                //         'uses' => 'neighborhoodController@index', 'as' => 'neighborhoods', 'title' => 'الأحياء', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                //         'child' => [
                //             'addneighborhood',
                //             'updateneighborhood',
                //             'deleteneighborhood',
                //             'deleteneighborhoods',
                //         ]
                //     ]
                // );

                #Add neighborhood
                Route::post('add-neighborhood', ['uses' => 'neighborhoodController@store', 'as' => 'addneighborhood', 'title' => 'اضافة حي']);
                #Update neighborhood
                Route::post('update-neighborhood', ['uses' => 'neighborhoodController@update', 'as' => 'updateneighborhood', 'title' => 'تعديل حي']);
                #Delete neighborhood
                Route::post('delete-neighborhood', ['uses' => 'neighborhoodController@delete', 'as' => 'deleteneighborhood', 'title' => 'حذف حي']);
                #Delete neighborhoods
                Route::post('delete-neighborhoods', ['uses' => 'neighborhoodController@delete_all', 'as' => 'deleteneighborhoods', 'title' => 'حذف اكثر من حي']);

                /********************************************* neighborhoodController End *********************************************/

                /******************************************** sliderController Start ********************************************/
                // Route::get(
                //     'sliders',
                //     [
                //         'uses' => 'sliderController@index', 'as' => 'sliders', 'title' => 'الإعلانات', 'icon' => '<i class="nav-icon fas fa-image"></i>',
                //         'child' => [
                //             'addslider',
                //             'updateslider',
                //             'deleteslider',
                //             'deletesliders',
                //         ]
                //     ]
                // );

                #Add slider
                Route::post('add-slider', ['uses' => 'sliderController@store', 'as' => 'addslider', 'title' => 'اضافة إعلان']);
                #Update slider
                Route::post('update-slider', ['uses' => 'sliderController@update', 'as' => 'updateslider', 'title' => 'تعديل إعلان']);
                #Delete slider
                Route::post('delete-slider', ['uses' => 'sliderController@delete', 'as' => 'deleteslider', 'title' => 'حذف إعلان']);
                #Delete sliders
                Route::post('delete-sliders', ['uses' => 'sliderController@delete_all', 'as' => 'deletesliders', 'title' => 'حذف اكثر من إعلان']);

                /********************************************* sliderController End *********************************************/

                /******************************************** promo_codeController Start ********************************************/
                Route::get(
                    'promo_codes',
                    [
                        'uses' => 'promo_codeController@index', 'as' => 'promo_codes', 'title' => 'اكواد الخصم', 'icon' => '<i class="nav-icon fas fa-percent"></i>',
                        'child' => [
                            'addpromo_code',
                            'updatepromo_code',
                            'deletepromo_code',
                            'deletepromo_codes',
                        ]
                    ]
                );

                #Add promo_code
                Route::post('add-promo_code', ['uses' => 'promo_codeController@store', 'as' => 'addpromo_code', 'title' => 'اضافة كود']);
                #Update promo_code
                Route::post('update-promo_code', ['uses' => 'promo_codeController@update', 'as' => 'updatepromo_code', 'title' => 'تعديل كود']);
                #Delete promo_code
                Route::post('delete-promo_code', ['uses' => 'promo_codeController@delete', 'as' => 'deletepromo_code', 'title' => 'حذف كود']);
                #Delete promo_codes
                Route::post('delete-promo_codes', ['uses' => 'promo_codeController@delete_all', 'as' => 'deletepromo_codes', 'title' => 'حذف اكثر من كود']);

                /********************************************* promo_codeController End *********************************************/

                /******************************************** bank_accountController Start *****************************************/
                // Route::get(
                //     'bank_accounts',
                //     [
                //         'uses' => 'bank_accountController@index', 'as' => 'bank_accounts', 'title' => 'الحسابات البنكية', 'icon' => '<i class="nav-icon fas fa-dollar-sign"></i>',
                //         'child' => [
                //             'addbank_account',
                //             'updatebank_account',
                //             'deletebank_account',
                //             'deletebank_accounts',
                //         ]
                //     ]
                // );

                #Add bank_account
                Route::post('add-bank_account', ['uses' => 'bank_accountController@store', 'as' => 'addbank_account', 'title' => 'اضافة حساب']);
                #Update bank_account
                Route::post('update-bank_account', ['uses' => 'bank_accountController@update', 'as' => 'updatebank_account', 'title' => 'تعديل حساب']);
                #Delete bank_account
                Route::post('delete-bank_account', ['uses' => 'bank_accountController@delete', 'as' => 'deletebank_account', 'title' => 'حذف حساب']);
                #Delete bank_accounts
                Route::post('delete-bank_accounts', ['uses' => 'bank_accountController@delete_all', 'as' => 'deletebank_accounts', 'title' => 'حذف اكثر من حساب']);

                /********************************************* bank_accountController End *********************************************/

                /******************************************** bank_transferController Start ********************************************/
                // Route::get(
                //     'bank_transfers',
                //     [
                //         'uses' => 'bank_transferController@index', 'as' => 'bank_transfers', 'title' => 'التحويلات البنكية', 'icon' => '<i class="nav-icon fas fa-dollar-sign"></i>',
                //         'child' => [
                //             'deletebank_transfer',
                //             'deletebank_transfers',
                //         ]
                //     ]
                // );

                #Delete bank_transfer
                Route::post('delete-bank_transfer', ['uses' => 'bank_transferController@delete', 'as' => 'deletebank_transfer', 'title' => 'حذف تحويل']);
                #Delete bank_transfers
                Route::post('delete-bank_transfers', ['uses' => 'bank_transferController@delete_all', 'as' => 'deletebank_transfers', 'title' => 'حذف اكثر من تحويل']);

                /********************************************* bank_transferController End *********************************************/

                /******************************************** contactController Start ********************************************/
                Route::get(
                    'contacts',
                    [
                        'uses' => 'contactController@index', 'as' => 'contacts', 'title' => 'تواصل معنا', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'deletecontact',
                            'deletecontacts',
                        ]
                    ]
                );

                #Delete contact
                Route::post('delete-contact', ['uses' => 'contactController@delete', 'as' => 'deletecontact', 'title' => 'حذف رسالة']);
                #Delete contacts
                Route::post('delete-contacts', ['uses' => 'contactController@delete_all', 'as' => 'deletecontacts', 'title' => 'حذف اكثر من رسالة']);

                /********************************************* contactController End *********************************************/

                /******************************************** adminReportController Start ********************************************/
                Route::get(
                    'adminReports',
                    [
                        'uses' => 'adminReportController@index', 'as' => 'adminReports', 'title' => 'تقارير لوحة التحكم', 'icon' => '<i class="nav-icon fas fa-copy"></i>',
                        'child' => [
                            'deleteadminReport',
                            'deleteadminReports',
                        ]
                    ]
                );

                #Delete adminReport
                Route::post('delete-adminReport', ['uses' => 'adminReportController@delete', 'as' => 'deleteadminReport', 'title' => 'حذف تقرير']);
                #Delete adminReports
                Route::post('delete-adminReports', ['uses' => 'adminReportController@delete_all', 'as' => 'deleteadminReports', 'title' => 'حذف اكثر من تقرير']);

                /********************************************* adminReportController End *********************************************/
            });
        });
    });
});
