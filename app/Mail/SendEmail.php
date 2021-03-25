<?php

namespace App\Mail;

use App\Models\EmailSubject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;
    public $subjectName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->subjectName = EmailSubject::find($data->subject_id);
        $this->infos = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->infos->email)->view('template.templateEmail')->subject($this->subjectName->subject)->with(['customerEmail' => $this->infos->email, 'content' => $this->infos->content]);
    }
}
