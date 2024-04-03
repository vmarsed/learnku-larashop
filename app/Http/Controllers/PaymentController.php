<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# U7.3 订单/支付宝支付
use App\Models\Order;
use App\Exceptions\InvalidRequestException;


class PaymentController extends Controller
{
    public function payByAlipay(Order $order, Request $request)
    {
        // 判断订单是否属于当前用户
        $this->authorize('own', $order);
        // 订单已支付或者已关闭
        if ($order->paid_at || $order->closed) {
            throw new InvalidRequestException('订单状态不正确');
        }

        // 调用支付宝的网页支付
        return app('alipay')->web([
            'out_trade_no' => $order->no, // 订单编号，需保证在商户端不重复
            'total_amount' => $order->total_amount, // 订单金额，单位元，支持小数点后两位
            'subject'      => '支付 Laravel Shop 的订单：'.$order->no, // 订单标题
        ]);
    }



    // 前端回调页面
    public function alipayReturn()
    {
        // 校验提交的参数是否合法
        // $data = app('alipay')->verify();
        $data = app('alipay')->callback();
        dd($data);
        /**
         * vendor\yansongda\pay\src\Provider\Alipay.php
         * __call ( verify )
         * "\Yansongda\Pay\Shortcut\Alipay\VerifyShortcut"
         * Artful::shortcut($plugin, ...$params)
         *      $plugin = "\Yansongda\Pay\Shortcut\Alipay\VerifyShortcut"

         *   if (!class_exists($shortcut) || !in_array(ShortcutInterface::class, class_implements($shortcut))) {
         *       throw new InvalidParamsException(Exception::PARAMS_SHORTCUT_INVALID, "参数异常: [{$shortcut}] 未实现 `ShortcutInterface`");
         *   }

         * 这个类不存在, 所以第一个判断就是 true 所以就抛出异常了
         */
    }

    // 服务器端回调
    public function alipayNotify()
    {
        $data = app('alipay')->callback();
        \Log::debug('Alipay notify', $data->all());
    }











}
