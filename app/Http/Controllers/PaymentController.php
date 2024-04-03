<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# U7.3 订单/支付宝支付
use App\Models\Order;
use App\Exceptions\InvalidRequestException;

use Carbon\Carbon;


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
        try {
            app('alipay')->callback();
        } catch (\Exception $e) {
            return view('pages.error', ['msg' => '数据不正确']);
        }
        return view('pages.success', ['msg' => '付款成功']);
    }

    // 服务器端回调
    public function alipayNotify()
    {
        // 校验输入参数
        $data = app('alipay')->callback();
        \Log::debug('Alipay notify', $data->all());

        // 如果订单状态不是成功或者结束，则不走后续的逻辑
        // 所有交易状态：https://docs.open.alipay.com/59/103672
        // WAIT_BUYER_PAY	交易创建，等待买家付款。
        // TRADE_CLOSED	    在指定时间段内未支付时关闭的交易； 在交易完成全额退款成功时关闭的交易。
        // TRADE_SUCCESS	交易成功，且可对该交易做操作，如：多级分润、退款等。
        // TRADE_FINISHED	交易成功且结束，即不可再做任何操作。

        if(!in_array($data->trade_status, ['TRADE_SUCCESS', 'TRADE_FINISHED'])) {
            \Log::debug('trade status != success/finished');
            return app('alipay')->success();
        }
        /**
         * 根据上一句
         * 下面的代码只有交易状态 == success 或 finished 时才会执行
         * 成功交易后, 才会把付款时间啥的保存到数据库
         * 
         * 
         */
        // $data->out_trade_no 拿到订单流水号，并在数据库中查询
        \Log::debug('状态为 成功 或 结束');
        $order = Order::where('no', $data->out_trade_no)->first();
        \Log::debug('myrzd',[$order]);

        // 正常来说不太可能出现支付了一笔不存在的订单，这个判断只是加强系统健壮性。
        if (!$order) {
            return 'fail';
        }

        // 如果这笔订单的状态已经是已支付
        if ($order->paid_at) {
            // 返回数据给支付宝
            return app('alipay')->success();
        }

        $order->update([
            'paid_at'        => Carbon::now(), // 支付时间
            'payment_method' => 'alipay', // 支付方式
            'payment_no'     => $data->trade_no, // 支付宝订单号
        ]);
        \Log::debug('更新数据库 paid_at payment_method payment_no Order模型为',[$order]);

        return app('alipay')->success();


    }











}
