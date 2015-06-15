<?php

if (!function_exists('pusher')) {
    function pusher()
    {
        $pusher = new \Pusher( env('PUSHER_KEY'), env('PUSHER_SECRET'), env('PUSHER_APP_ID'), array( 'encrypted' => true ) );

        return $pusher;
    }
}
