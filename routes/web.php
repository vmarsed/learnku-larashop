<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\Taste;
use Yansongda\Pay\Pay;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PagesController@root')->name('root');
Route::redirect('/','/home');
Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
    /**
     * 收藏列表
     */
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
    /**
     * 收藏按钮
     */
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    /**
     * 加入购物车
     */
    Route::post('cart', 'CartController@add')->name('cart.add');
    /**
     * 查看购物车
     */
    Route::get('cart', 'CartController@index')->name('cart.index');
    /**
     * 在购物车移除商品
     */
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
    /**
     * 下单
     */
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    /**
     * 用户订单列表
     */
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    /**
     * U6.7 用户订单详情页
     */
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');


});

/**
 * 5.4 前台商品列表
 */

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

// 商品详情
Route::get('products/{product}', 'ProductsController@show')->name('products.show');


/**
 * 
 * 测试
 * 
 */
Route::get('alipay', function() {
    // dd(get_class_vars(Pay::class)); // 返回空数组
    // dump(Pay::MODE_SANDBOX,Pay::MODE_SERVICE,Pay::MODE_NORMAL);
    var_dump(Pay::MODE_SANDBOX);
    // dump(Pay::MODE_SANDBOX,Pay::MODE_SERVICE,Pay::MODE_NORMAL,Pay::MODE_DEV);
    // dd(Pay::MODE_SANDBOX);
    // dump(app('alipay'));
    // return app('alipay');
    // return app('alipay')->web([
    //     'out_trade_no' => time(),
    //     'total_amount' => '1',
    //     'subject' => 'test subject - 测试',
    // ]);
});