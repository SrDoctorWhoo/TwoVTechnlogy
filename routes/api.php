<?php

use App\Http\Controllers\Api\WhatsappIncomingController;

Route::post('whatsapp/incoming', [WhatsappIncomingController::class,'handle']);
