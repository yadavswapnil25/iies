<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\ContactMessage;

class ContactFormSubmitted extends Notification
{
    use Queueable;

    protected $contactMessage;

    /**
     * Create a new notification instance.
     */
    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
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
        return (new MailMessage)
            ->subject('New Contact Form Submission - IIES')
            ->greeting('Hello Admin,')
            ->line('A new contact form has been submitted on the IIES website.')
            ->line('**Contact Details:**')
            ->line('Name: ' . $this->contactMessage->full_name)
            ->line('Email: ' . $this->contactMessage->email)
            ->line('Message: ' . $this->contactMessage->message)
            ->line('Submitted: ' . $this->contactMessage->created_at->format('F d, Y \a\t H:i'))
            ->action('View in Admin Panel', route('admin.contact-messages.show', $this->contactMessage))
            ->line('Please review and respond to this inquiry as soon as possible.')
            ->salutation('Best regards, IIES System');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'contact_message_id' => $this->contactMessage->id,
            'name' => $this->contactMessage->full_name,
            'email' => $this->contactMessage->email,
            'message' => $this->contactMessage->message,
        ];
    }
}
