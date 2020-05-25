<?php

namespace App\Listeners;

use App\Events\CategorySaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCategoryNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CategorySaved  $event
     * @return void
     */
    public function handle(CategorySaved $event)
    {
//        echo 'Listener';
//        dd($event->category);
    }
}
