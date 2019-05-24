<?php

namespace App\Mail;

use App\Models\Psikolog;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PsikologKayitMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Psikolog $psikolog)
    {
       $this->psikolog = $psikolog;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this

            ->subject(config('app.name'). ' - psikolog Kaydı')
            ->view('emails.psikolog_kayit');
            
    }
}
