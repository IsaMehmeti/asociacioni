<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->data['file'] == 'false'){
        return $this->from($this->data['from'])
                    ->subject($this->data['subject'])
                    ->view('auth.new-user')
                    ->with('data',$this->data)
                     ->markdown('auth.new-user');
        }
        return $this->from('noreplay@kolegjiumet.komunat-ks.net')
                    ->subject($this->data['subject'])
                    ->attach($this->data['file'])
                    ->view('auth.new-user')
                    ->with('data',$this->data)
                    ->markdown('auth.new-user');

    }
}
