<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
# U7.8 支付后邮件通知


class OrderPaidNotification extends Notification
{
    use Queueable;

    protected $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail']; // // 我们只需要通过邮件通知，因此这里只需要一个 mail 即可
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('订单支付成功')  // 邮件标题
                    ->greeting($this->order->user->name.'您好：') // 欢迎词
                    ->line('您于 '.$this->order->created_at->format('m-d H:i').' 创建的订单已经支付成功。') // 邮件内容
                    ->action('查看订单', route('orders.show', [$this->order->id])) // 邮件中的按钮及对应链接
                    ->success(); // 按钮的色调
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
