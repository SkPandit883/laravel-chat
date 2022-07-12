// Enable pusher logging - don't include this in production
// import axios from 'axios';
// import Echo from 'laravel-echo';
console.log('test api');

import Pusher from 'pusher-js';

Pusher.logToConsole = true;

var pusher = new Pusher('2dec91ca849ca8f054cd', {
    cluster: 'ap2'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function (data) {
    alert(JSON.stringify(data));
});

