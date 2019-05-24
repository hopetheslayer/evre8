<?php
namespace App\Mailers;

use App\Models\Psikolog;
use App\Admin;
use App\Models\Randevular;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer {
    protected $mailer;
    protected $fromAddress = 'umutderebek@gmail.com';
    protected $fromName = 'Randevu Support';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                ->to($this->to)->subject($this->subject);
        });
    }


    public function sendRandevuStatusNotificaiton($randevuowner, Randevular $randevu)
    {
        $this->to = $randevuowner->email;
        $this->subject = "Randevu İptali ";
        $this->view = 'emails.ticket_status';
        $this->data = compact('randevuowner', 'randevu');

        return $this->deliver();
    }
}