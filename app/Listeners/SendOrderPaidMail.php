<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
# U7.8 支付后邮件通知
use App\Notifications\OrderPaidNotification;


class SendOrderPaidMail implements ShouldQueue // implements ShouldQueue 代表异步监听器
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderPaid  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        // 从事件对象中取出对应的订单
        $order = $event->getOrder();
        // 调用 notify 方法来发送通知
        $order->user->notify(new OrderPaidNotification($order));
        
    }
}
