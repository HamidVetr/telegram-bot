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

    $response = Telegram::setWebhook(['url' => 'https://zhenic.co/393184030:AAFwWpAtEWS53XuxOK543FiwJRoJUEI-r5U/webhook']);

    dd($response);
});
