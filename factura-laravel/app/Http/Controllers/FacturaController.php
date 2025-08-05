<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    // Muestra el formulario
    public function index()
    {
        return view('factura');
    }

    // Aqui validamos datos que pusimos, calculamos subtotal, IVA y su total
    public function calcular(Request $request)
    {
        $data = $request->validate([
            'cliente'  => 'required|string',
            'producto' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'precio'   => 'required|numeric|min:0',
            'iva'      => 'nullable|numeric|min:0',
        ]);

        // Calculamos con los parametros
        $cantidad = $data['cantidad'];
        $precio   = $data['precio'];
        $ivaPct   = $data['iva'] ?? 12;  // Asumimos el 12% como se nos pide si no se ingresa

        $subtotal = $cantidad * $precio;
        $montoIva = $subtotal * ($ivaPct / 100);
        $total    = $subtotal + $montoIva;

        // Enviamos a la view del resultado
        return view('factura_resultado', [
            'data'     => $data,
            'subtotal' => $subtotal,
            'montoIva' => $montoIva,
            'total'    => $total,
            'ivaPct'   => $ivaPct,
        ]);
    }
}
