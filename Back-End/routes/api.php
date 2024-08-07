<?php

use App\Http\Controllers\API\Auth\Login;
use App\Http\Controllers\API\Auth\Logout;
use App\Http\Controllers\API\Auth\Register;
use App\Http\Controllers\API\Contact;
use App\Http\Controllers\API\DigiflazzHandler;
use App\Http\Middleware\VerifySecret;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LandingPage;
use App\Http\Controllers\API\MidtransHandler;
use App\Http\Controllers\API\Transaction;

Route::group([
    'middleware' => VerifySecret::class
], function () {
    Route::post('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::group([
        'prefix' => 'auth',
        'middleware' => 'guest'
    ], function () {
        Route::post('register', [Register::class, 'register']);
        Route::post('login', [Login::class, 'login']);
        Route::post('logout', [Logout::class, 'logout']);
    });
    Route::get('categories', [LandingPage::class, 'getCategories']);
    Route::get('product/{id}', [LandingPage::class, 'getProduct']);
    Route::get('category/{id}', [LandingPage::class, 'getCategory']);
    Route::post('transaction/order', [Transaction::class, 'placeOrder']);
    Route::post('validate-wa', [Transaction::class, 'validateWa']);
    Route::get('transaction/{order_id}', [Transaction::class, 'getOrder']);
    Route::post('send-message', [Contact::class, 'sendMessage']);
});

Route::post('notification/midtrans', [MidtransHandler::class, 'notification']);
Route::post('notification/digiflazz', [DigiflazzHandler::class, 'notification']);
