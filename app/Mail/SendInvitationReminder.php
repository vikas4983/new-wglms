<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendInvitationReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $guest;
    public function __construct($guest)
    {
        $this->guest = $guest;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reminder : Ashish & Kalyani’s Wedding Invitation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $wedding = \Carbon\Carbon::create(2026, 2, 5, 19, 0, 0);
        $now = now();
        $diff = $now->diff($wedding);
        return new Content(
            view: 'emails.reminder-wedding-invitation',
            with: [
                'email' =>  $this->guest->email,
                'name' =>  $this->guest->name,
                'phone' =>  $this->guest->phone,
                'days' => $diff->d,
                'hours' => $diff->h,
                'minutes' => $diff->i,
                'seconds' => $diff->s,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
