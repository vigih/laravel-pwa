<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Users\User;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * @var string $token
     */
    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        /** @var User $notifiable */
        $url = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ]));

        $minutes = config('auth.passwords.users.expire');
        $appUrl = config('app.url');
        return (new MailMessage)
            ->subject('Reset Password')
            ->view('emails.reset-password', [
                'url' => $url,
                'name' => $notifiable->name,
                'appUrl' => $appUrl,
                'expired' => now()->addMinutes($minutes)->translatedFormat('d F Y H:i'),
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
