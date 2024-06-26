<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'          => 'admin.',
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
    // U8.7 拒绝退款
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('orders.handle_refund');
    // U9.1 后台 -- 优惠券列表
    $router->get('coupon_codes', 'CouponCodesController@index');
    // U9.2 后台 - 添加优惠券
    $router->post('coupon_codes', 'CouponCodesController@store');
    $router->get('coupon_codes/create', 'CouponCodesController@create');
    // U9.3. 管理后台 - 修改和删除优惠券
    $router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');
    $router->put('coupon_codes/{id}', 'CouponCodesController@update');    
    $router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');
    // 6U3.3 后台 - 管理 category    
    $router->get('categories', 'CategoriesController@index');
    $router->get('categories/create', 'CategoriesController@create');
    $router->get('categories/{id}/edit', 'CategoriesController@edit');
    $router->post('categories', 'CategoriesController@store');
    $router->put('categories/{id}', 'CategoriesController@update');
    $router->delete('categories/{id}', 'CategoriesController@destroy');
    $router->get('api/categories', 'CategoriesController@apiIndex');

    // 6U4.3 后台 众筹商品管理
    // 列表 | 添加商品 | 保存商品post | 编辑商品 | 更新商品put
    $router->get('crowdfunding_products', 'CrowdfundingProductsController@index');
    $router->get('crowdfunding_products/create', 'CrowdfundingProductsController@create');
    $router->post('crowdfunding_products', 'CrowdfundingProductsController@store');
    $router->get('crowdfunding_products/{id}/edit', 'CrowdfundingProductsController@edit');
    $router->put('crowdfunding_products/{id}', 'CrowdfundingProductsController@update');


});
