<?php

namespace App\Queue;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MailSender;
use App\Models\Thing;
use Illuminate\Support\Facades\Mail;

class MyQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $thing;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Thing $thing)
    {
        $this->thing = $thing;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = new MailSender('Вещь ' . $this->thing->name . ' была успешно добавлена.');
        Mail::to("canttrymybest@gmail.com")->send($mail);
    }
}
