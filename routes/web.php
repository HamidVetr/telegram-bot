<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
//    $response = Telegram::getMe();
//
//    $botId = $response->getId();
//    $firstName = $response->getFirstName();
//    $username = $response->getUsername();

//    $response = Telegram::getUpdates();

//    $response = Telegram::sendMessage([
//        'chat_id' => '78182085',
//        'text' => 'Hello World'
//    ]);
//
//    $messageId = $response->getMessageId();

    $response = Telegram::setWebhook(['url' => 'https://zhenic.co/392743650:AAEEQfeYwUairiyLUgyAavlPeOGjTxoRHVU/webhook']);

    dd($response);
});

Route::post('/392743650:AAEEQfeYwUairiyLUgyAavlPeOGjTxoRHVU/webhook', function () {
    $update = Telegram::commandsHandler(true);

    // Commands handler method returns an Update object.
    // So you can further process $update object
    // to however you want.

    return 'ok';
});