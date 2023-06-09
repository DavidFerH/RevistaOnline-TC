<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable

{

    use Queueable, SerializesModels;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($data)

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

        return $this->from('no-reply@ui1-revistas-colab.com', 'Envío de emails')->subject('Un usuario ha dejado este mensaje')->view('contact-form', ['data' => $this->data]);

    }

}