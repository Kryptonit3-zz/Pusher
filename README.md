# Pusher
Easy pusher integration with a function.

Installation
`composer require Kryptonit3/Pusher`

Set environment variables:

~~~
PUSHER_KEY=YOUR-PUSHER-KEY
PUSHER_SECRET=YOUR-PUSHER-SECRET
PUSHER_APP_ID=YOUR-PUSHER-APP-ID
~~~

you may now use all of the normal pusher calls with the `pusher()` helper function.

Example
~~~
pusher()->trigger('my-channel-name', 'my-event-name', ['data' => true]);
~~~
