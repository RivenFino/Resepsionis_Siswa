<?php
namespace App\Listeners;

use App\Events\UpdateTimeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateTimeListener
{
    public function handle(UpdateTimeEvent $event)
    {
        return $event->time;
    }
}