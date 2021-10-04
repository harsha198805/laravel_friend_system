<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Str;
use App\Invite;

class InviteCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $invite;

    /**
     * Create a new message instance.
     *
     * @return void
     */
public function __construct(Invite $invite)
{
    $this->invite = $invite;
}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('you@example.com')
                ->view('emails.invite');
		//$token = Str::random(20);
		
			    //$invite = Invite::where('token', $token)->first();
		//dd($invite);
   // return view('emails.invite',['invite' => $invite]);
      // return $this->from('you@example.com')
        //       ->view('emails.invite',['invite' => $token]);
    }
}
