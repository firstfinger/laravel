<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */



    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
        $weight =[
                'total'=> 21000

        ];
        $address = 'andy@abtr.io';
        $name = 'I AM ME';
        $subject = '11.11 Order Shipped';
        return $this->view('emails.ordershipped')
                    ->with($weight)
                    ->to('saintosaints@gmail.com', 'saintosaints')
                    ->from($address, $name)
                    ->cc($address, $name)
                    // ->bcc($address, $name)
                    ->subject($subject);

    }

    // public function build()
    // {
    //   return $this->view('emails.contact')
    //         ->from($this->email, $this->fname)
    //         ->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
    //         ->subject("Inquiry");
    // }
}
