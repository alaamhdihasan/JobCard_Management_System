<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('auth', 'Auth::index');
$routes->get('auth/logout', 'Auth::logout');

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {


    $routes->get('admins', 'Admin_C::index');
    //routes of Users.
    $routes->get('users', 'Users_C::index');
    $routes->get('users-fetch', 'Users_C::fetch');
    $routes->post('users-store', 'Users_C::store');
    $routes->get('users-edit', 'Users_C::edit');
    $routes->get('users-edit2', 'Users_C::edit2');
    $routes->post('users-update', 'Users_C::update');
    $routes->post('users-delete', 'Users_C::delete');
    $routes->get('users-filldata', 'Users_C::filldata');
    $routes->get('users-getPermissions', 'Users_C::getUsersPermission');

    //user profile.
    $routes->get('userprofile-fetch', 'UsersProfile_C::index');
    $routes->get('userprofile-fetch2', 'UsersProfile_C::index2');
    $routes->get('userprofile-fetch3', 'UsersProfile_C::fetch');
    $routes->post('userprofile-update', 'UsersProfile_C::update');

    // workshop ..
    $routes->get('workshopplace', 'WorkShopsPlace_C::index');
    $routes->get('workshopplace-fetch', 'WorkShopsPlace_C::fetch');
    $routes->get('workshopplace-filldata', 'WorkShopsPlace_C::filldata');
    $routes->post('workshopplace-store', 'WorkShopsPlace_C::store');
    $routes->get('workshopplace-edit', 'WorkShopsPlace_C::edit');
    $routes->post('workshopplace-update', 'WorkShopsPlace_C::update');
    $routes->post('workshopplace-delete', 'WorkShopsPlace_C::delete');

    // Workers ..
    $routes->get('workers', 'Workers_C::index');
    $routes->get('workers-fetch', 'Workers_C::fetch');
    $routes->get('workers-filldata', 'Workers_C::filldata');
    $routes->post('workers-store', 'Workers_C::store');
    $routes->get('workers-edit', 'Workers_C::edit');
    $routes->post('workers-update', 'Workers_C::update');
    $routes->post('workers-delete', 'Workers_C::delete');
    $routes->post('workers-GetInfo', 'Workers_C::Get_WorkersInfo');

    // State...
    $routes->get('state', 'State_C::index');
    $routes->get('state-fetch', 'State_C::fetch');
    $routes->post('state-store', 'State_C::store');
    $routes->get('state-edit', 'State_C::edit');
    $routes->post('state-update', 'State_C::update');
    $routes->post('state-delete', 'State_C::delete');

    // Brand...
    $routes->get('brand', 'Brand_C::index');
    $routes->get('brand-fetch', 'Brand_C::fetch');
    $routes->post('brand-store', 'Brand_C::store');
    $routes->get('brand-edit', 'Brand_C::edit');
    $routes->post('brand-update', 'Brand_C::update');
    $routes->post('brand-delete', 'Brand_C::delete');

    // Color...
    $routes->get('color', 'Color_C::index');
    $routes->get('color-fetch', 'Color_C::fetch');
    $routes->post('color-store', 'Color_C::store');
    $routes->get('color-edit', 'Color_C::edit');
    $routes->post('color-update', 'Color_C::update');
    $routes->post('color-delete', 'Color_C::delete');

    // Permission..
    $routes->get('permission', 'Permission_C::index');
    $routes->get('permission-fetch', 'Permission_C::fetch');
    $routes->post('permission-store', 'Permission_C::store');
    $routes->get('permission-edit', 'Permission_C::edit');
    $routes->post('permission-update', 'Permission_C::update');
    $routes->post('permission-delete', 'Permission_C::delete');

    // CarType..
    $routes->get('cartype', 'CarType_C::index');
    $routes->get('cartype-fetch', 'CarType_C::fetch');
    $routes->post('cartype-store', 'CarType_C::store');
    $routes->get('cartype-edit', 'CarType_C::edit');
    $routes->post('cartype-update', 'CarType_C::update');
    $routes->post('cartype-delete', 'CarType_C::delete');

    // Company..
    $routes->get('company', 'Company_C::index');
    $routes->get('company-fetch', 'Company_C::fetch');
    $routes->post('company-store', 'Company_C::store');
    $routes->get('company-edit', 'Company_C::edit');
    $routes->post('company-update', 'Company_C::update');
    $routes->post('company-delete', 'Company_C::delete');

    // Kind..
    $routes->get('kind', 'Kind_C::index');
    $routes->get('kind-fetch', 'Kind_C::fetch');
    $routes->post('kind-store', 'Kind_C::store');
    $routes->get('kind-edit', 'Kind_C::edit');
    $routes->post('kind-update', 'Kind_C::update');
    $routes->post('kind-delete', 'Kind_C::delete');

    // Model..
    $routes->get('model', 'Model_C::index');
    $routes->get('model-fetch', 'Model_C::fetch');
    $routes->post('model-store', 'Model_C::store');
    $routes->get('model-edit', 'Model_C::edit');
    $routes->post('model-update', 'Model_C::update');
    $routes->post('model-delete', 'Model_C::delete');

    // Side..
    $routes->get('side', 'Side_C::index');
    $routes->get('side-fetch', 'Side_C::fetch');
    $routes->post('side-store', 'Side_C::store');
    $routes->get('side-edit', 'Side_C::edit');
    $routes->post('side-update', 'Side_C::update');
    $routes->post('side-delete', 'Side_C::delete');

    // Unit..
    $routes->get('unit', 'Unit_C::index');
    $routes->get('unit-fetch', 'Unit_C::fetch');
    $routes->post('unit-store', 'Unit_C::store');
    $routes->get('unit-edit', 'Unit_C::edit');
    $routes->post('unit-update', 'Unit_C::update');
    $routes->post('unit-delete', 'Unit_C::delete');

    // Specialization..
    $routes->get('specialization', 'Specialization_C::index');
    $routes->get('specialization-fetch', 'Specialization_C::fetch');
    $routes->post('specialization-store', 'Specialization_C::store');
    $routes->get('specialization-edit', 'Specialization_C::edit');
    $routes->post('specialization-update', 'Specialization_C::update');
    $routes->post('specialization-delete', 'Specialization_C::delete');

    // City..
    $routes->get('city', 'City_C::index');
    $routes->get('city-fetch', 'City_C::fetch');
    $routes->post('city-store', 'City_C::store');
    $routes->get('city-edit', 'City_C::edit');
    $routes->post('city-update', 'City_C::update');
    $routes->post('city-delete', 'City_C::delete');

    // workshops..
    $routes->get('workshop', 'WorkShops_C::index');
    $routes->get('workshop-fetch', 'WorkShops_C::fetch');
    $routes->get('workshop-filldata', 'WorkShops_C::filldata');
    $routes->post('workshop-store', 'WorkShops_C::store');
    $routes->get('workshop-edit', 'WorkShops_C::edit');
    $routes->post('workshop-update', 'WorkShops_C::update');
    $routes->post('workshop-delete', 'WorkShops_C::delete');

    // Currency..
    $routes->get('currency', 'Currency_C::index');
    $routes->get('currency-fetch', 'Currency_C::fetch');
    $routes->get('currency-filldata', 'Currency_C::filldata');
    $routes->post('currency-store', 'Currency_C::store');
    $routes->get('currency-edit', 'Currency_C::edit');
    $routes->post('currency-update', 'Currency_C::update');
    $routes->post('currency-delete', 'Currency_C::delete');

    // Group Saling..
    $routes->get('groupsaling', 'GroupSaling_C::index');
    $routes->get('groupsaling-fetch', 'GroupSaling_C::fetch');
    $routes->get('groupsaling-filldata', 'GroupSaling_C::filldata');
    $routes->post('groupsaling-store', 'GroupSaling_C::store');
    $routes->get('groupsaling-edit', 'GroupSaling_C::edit');
    $routes->post('groupsaling-update', 'GroupSaling_C::update');
    $routes->post('groupsaling-delete', 'GroupSaling_C::delete');

    // Accounts..
    $routes->get('accounts', 'Accounts_C::index');
    $routes->get('accounts-fetch', 'Accounts_C::fetch');
    $routes->get('accounts-filldata', 'Accounts_C::filldata');
    $routes->post('accounts-store', 'Accounts_C::store');
    $routes->get('accounts-edit', 'Accounts_C::edit');
    $routes->post('accounts-update', 'Accounts_C::update');
    $routes->post('accounts-delete', 'Accounts_C::delete');

    // Customers..
    $routes->get('customer', 'Customers_C::index');
    $routes->get('customer-fetch', 'Customers_C::fetch');
    $routes->get('customer-filldata', 'Customers_C::filldata');
    $routes->post('customer-store', 'Customers_C::store');
    $routes->get('customer-edit', 'Customers_C::edit');
    $routes->post('customer-update', 'Customers_C::update');
    $routes->post('customer-delete', 'Customers_C::delete');

    // JobCard Mainly..
    $routes->get('jobcardmainlydaily', 'JobCardMainly_C::index');
    $routes->get('jobcardmainlydaily-fetch', 'JobCardMainly_C::fetch');
    $routes->get('jobcardmainlydaily-filldata', 'JobCardMainly_C::filldata');
    $routes->post('jobcardmainlydaily-store', 'JobCardMainly_C::store');
    $routes->get('jobcardmainlydaily-edit', 'JobCardMainly_C::edit');
    $routes->post('jobcardmainlydaily-update', 'JobCardMainly_C::update');
    $routes->post('jobcardmainlydaily-delete', 'JobCardMainly_C::delete');
    $routes->get('jobcardmainlydaily-getcustomer', 'JobCardMainly_C::getcustomer');
    $routes->get('jobcardmainlydaily-getcarinformations', 'JobCardMainly_C::getCarInformations');
    $routes->get('jobcardmainlydaily-maxjobcard', 'JobCardMainly_C::getmaxjobcard');
    $routes->post('jobcardmainlydaily-addorder', 'JobCardMainly_C::addorder');
    $routes->get('jobcardopen', 'JobCardMainly_C::jobcardopen');
    $routes->post('jobcardopen-store', 'JobCardMainly_C::store2');
    $routes->get('jobcardmailydaily-print', 'JobCardMainly_C::savejobcard');
    $routes->get('jobcardprint', 'JobCardMainly_C::jobcardprint');
    $routes->get('jobcardprintCmp', 'JobCardMainly_C::Cmp_jobcardprint');

    // JobCard Secondary..
    //   $routes->get('jobcardsecondarydaily','JobCardSecondary_C::index');
    $routes->get('jcs-fetch', 'Jcs_C::fetch');
    $routes->get('jcs-filldata', 'Jcs_C::filldata');
    $routes->post('jcs-store', 'Jcs_C::store');
    $routes->get('jcs-edit', 'Jcs_C::edit');
    $routes->post('jcs-update', 'Jcs_C::update');
    $routes->post('jcs-delete', 'Jcs_C::delete');
    $routes->get('jcs-total', 'Jcs_C::total');
    $routes->Get('jcs-PartNumber', 'Jcs_C::GetPartNmuberByItmeName');
    $routes->Get('jcs-LastOil', 'Jcs_C::GetLastOilEngine');

    // Orders One..
    $routes->get('orderone', 'OrderOne_C::index');
    $routes->get('orderone-fetch', 'OrderOne_C::fetch');
    $routes->get('orderone-fetch2', 'OrderOne_C::fetch2');
    $routes->get('orderone-filldata', 'OrderOne_C::filldata');
    $routes->post('orderone-store', 'OrderOne_C::store');
    $routes->get('orderone-edit', 'OrderOne_C::edit');
    $routes->post('orderone-update', 'OrderOne_C::update');
    $routes->post('orderone-delete', 'OrderOne_C::delete');
    $routes->get('orderone-getcustomer', 'OrderOne_C::getcustomer');
    $routes->get('orderone-maxjobcard', 'OrderOne_C::getmaxjobcard');


    // Orders Two..
    $routes->get('ordertwo', 'OrderTwo_C::index');
    $routes->get('ordertwo-fetch', 'OrderTwo_C::fetch');
    $routes->get('ordertwo-filldata', 'OrderTwo_C::filldata');
    $routes->post('ordertwo-store', 'OrderTwo_C::store');
    $routes->get('ordertwo-edit', 'OrderTwo_C::edit');
    $routes->post('ordertwo-update', 'OrderTwo_C::update');
    $routes->post('ordertwo-delete', 'OrderTwo_C::delete');
    $routes->get('ordertwo-getcustomer', 'OrderTwo_C::getcustomer');
    $routes->get('ordertwo-maxjobcard', 'OrderTwo_C::getmaxjobcard');



    // Reports...
    $routes->get('reports', 'Reports_C::index');
    $routes->get('reportprint', 'Reports_C::printData');
    $routes->get('datainfo', 'Reports_C::dataone');

    // Artificail Intelligence..
    $routes->get('ai', 'Ai_C::index');
    $routes->get('ai-fetch', 'Ai_C::fetch');
    $routes->get('ai-edit', 'Ai_C::edit');
    $routes->get('ai-filldata', 'Ai_C::filldata');
    $routes->post('ai-updatecustomer', 'Ai_C::updatecustomer');

    $routes->get('ai-cartype', 'Ai_C::indexCarType');
    $routes->get('ai-cartype-fetch', 'Ai_C::cartypeFetch');
    $routes->get('ai-cartype-filldata', 'Ai_C::cartypeFilldata');
    $routes->get('ai-cartype-edit', 'Ai_C::cartypeEdit');
    $routes->post('ai-cartype-updatecartype','Ai_C::cartypeupdate');

    $routes->get('ai-itemprice', 'Ai_C::ItemPriceindex');
    $routes->get('ai-itemprice-fetch', 'Ai_C::ItemPriceFetch');
    $routes->get('ai-itemprice-edit', 'Ai_C::ItemPriceEdit');
    $routes->post('ai-itemprice-update','Ai_C::ItemPriceupdate');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
