<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubscribe extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->infos = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('navez.martin@gmail.com')->view('template.templateSubscribe')->subject('Welcome')->with(['infos' => $this->infos]);
    }
}
