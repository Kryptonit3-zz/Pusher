<?php

if (!function_exists('pusher')) {
    function pusher()
    {
        $pusher = new \Pusher( config('kryptonit3_pusher.app_key'), config('kryptonit3_pusher.app_secret'), config('kryptonit3_pusher.app_id'), config('kryptonit3_pusher.options') );

        return $pusher;
    }
}
