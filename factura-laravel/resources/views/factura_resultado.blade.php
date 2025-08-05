@extends('layouts.app')

@section('title', 'Detalle factura')

@section('content')
<div class="container py-5">
    <h1 style = "color: blue" class="mb-4">Datos de la factura</h1 >

    <ul class="list-group mb-4">
        <li class="list-group-item">
            <strong >Cliente:</strong> {{ $data['cliente'] }}
        </li>
        <li class="list-group-item">
            <strong>Producto:</strong > {{ $data['producto'] }}
        </li>
        <li class="list-group-item">
            <strong>Cantidad:</strong > {{ $data['cantidad'] }}
        </li >
        <li class="list-group-item">
            <strong >Precio unidad:</strong> ${{ number_format($data['precio'], 2) }}
        </li>
        <li class="list-group-item">
            <strong>Subtotal:</strong> ${{ number_format($subtotal, 2) }}
        </li >
        <li class="list-group-item">
            <strong>IVA ({{ $ivaPct }}%):</strong> ${{ number_format($montoIva, 2) }}
        </li>
        <li class="list-group-item active">
            <strong >Pago total:</strong > ${{ number_format($total, 2) }}
        </li >
    </ul>

    <a href="{{ url('/factura') }}" class="btn btn-secondary">&larr; Volver</a>
</div>
@endsection
