<?php

namespace App\Notifications;

use App\Classes\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification
{
    use Queueable;

//    private Client $client;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
//        $this->client = $client;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
//        $first_name = $this->client->first_name;
        $first_name = $notifiable->first_name;
        $url = 'https://laravel.com/docs/11.x/notifications';
//        $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        return (new MailMessage)
            ->subject("Welcome $first_name")
//            ->line('The introduction to the notification.')
//            ->line('This is new Line!')
//            ->action('Notification Action', url($url))
//            ->line('Thank you for using our application!')
            ->view('mail', [
                'notifiable' => $notifiable
            ]);

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
