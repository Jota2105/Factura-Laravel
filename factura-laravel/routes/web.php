<?php

//Juan D. Albarracin    NRC: 23357

use App\Http\Controllers\FacturaController;

Route::get('/factura', [FacturaController::class, 'index']);
Route::post('/factura', [FacturaController::class, 'calcular'])->name('factura.calcular');

