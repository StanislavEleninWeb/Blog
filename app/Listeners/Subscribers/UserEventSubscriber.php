<?php

namespace App\Listeners\Subscribers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserEventSubscriber
 *
 * @author stanislav
 */
class UserEventSubscriber {

    /**
     * Handle user login events.
     */
    public function handleUserLogin($event) {
        
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout($event) {
        
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events) {
        $events->listen(
                'Illuminate\Auth\Events\Login',
                'App\Listeners\Subscribers\UserEventSubscriber@handleUserLogin'
        );

        $events->listen(
                'Illuminate\Auth\Events\Logout',
                'App\Listeners\Subscribers\UserEventSubscriber@handleUserLogout'
        );
    }

}
