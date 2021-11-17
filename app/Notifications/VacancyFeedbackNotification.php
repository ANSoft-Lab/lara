<?php

namespace App\Notifications;

use App\Models\Feedback;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VacancyFeedbackNotification extends Notification
{
    use Queueable;

    protected $feedback;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
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
        $message = (new MailMessage)
                    ->subject('Finist: отклик на вакансию')
                    ->from('info@finist.ru', config('app.name'))
                    ->greeting('Приветствуем.')
                    ->line('На сайте ' . config('app.url') . ' был оставлен отклик на вакансию "' . $this->feedback->feedbackable->name . '"')
                    ->line('Имя: ' . $this->feedback->name)
                    ->line('Телефон: ' . $this->feedback->phone);

        if($this->feedback->message) {
            $message->line('Комментарий: ' . $this->feedback->message);
        }

        if($this->feedback->file) {
            $message->action('Файл', $this->feedback->file_url);
        }
        
        return $message;
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
