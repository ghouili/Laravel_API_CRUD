<?php

use App\Http\Controllers\api\v1\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::group(["prefix", "v1"], function() {
    Route::resource('tickets', TicketController::class);
});
