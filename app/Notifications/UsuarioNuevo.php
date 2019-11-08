<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Correo;

class UsuarioNuevo extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $correo = Correo::first();
        config(['mail.host' => $correo->host]);
        config(['mail.driver' => $correo->driver]);
        config(['mail.port' => $correo->port]);
        config(['mail.encryption' => $correo->encryption]);
        config(['mail.username' => $correo->username]);
        config(['mail.password' => $correo->password]);
        config(['mail.from.address' => $correo->address]);
        config(['mail.from.name' => $correo->name]);

        return (new MailMessage)->markdown('mail.usuario.nuevo');
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
