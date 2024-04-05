<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');
    $router->get('products', 'ProductsController@index');
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    // 编辑商品
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');
    // U8.1 订单列表
    $router->get('orders', 'OrdersController@index')->name('orders.index');
    // U8.2 后台订单详情
    $router->get('orders/{order}', 'OrdersController@show')->name('orders.show');
    // U8.3 在 后台订单详情页 发货
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('orders.ship');

});
