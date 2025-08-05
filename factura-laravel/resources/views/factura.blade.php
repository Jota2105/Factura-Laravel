<!--Juan D. Albarracin   NRC: 23357 -->
@extends('layouts.app')

@section('title', 'Factura Comercial')

@section('content')
<div class="container py-5">
    <h1 style="color: blue" class="mb-4">Factura Comercial</h1 >

    <form action="{{ route('factura.calcular') }}" method="POST">
        @csrf
        <!--Empezamos la creacion de los datos con el uso de bootstrap-->
        <div class="mb-3">
            <label for="cliente" class="form-label">Nombre del cliente</label>
            <input type="text" id="cliente" name="cliente"
                   class="form-control @error('cliente') is-invalid @enderror"
                   value="{{ old('cliente') }}">
            @error('cliente')
                <div class="invalid-feedback">{{ $message }}</div >
            @enderror
        </div >

        <div class="mb-3">
            <label for="producto" class="form-label">Nombre del producto</label>
            <input type="text" id="producto" name="producto"
                   class="form-control @error('producto') is-invalid @enderror"
                   value="{{ old('producto') }}">
            @error('producto')
                <div class="invalid-feedback">{{ $message }}</div >
            @enderror
        </div >

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad producto</label>
            <input type="number" id="cantidad" name="cantidad" min="1"
                   class="form-control @error('cantidad') is-invalid @enderror"
                   value="{{ old('cantidad', 1) }}">
            @error('cantidad')
                <div class="invalid-feedback">{{ $message }}</div >
            @enderror
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio unidad</label>
            <input type="text" id="precio" name="precio"
                   class="form-control @error('precio') is-invalid @enderror"
                   value="{{ old('precio') }}">
            @error('precio')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div >

        <div class="mb-4">
            <label for="iva" class="form-label">Porcentaje de IVA (opcional)</label>
            <input type="text" id="iva" name="iva"
                   class="form-control @error('iva') is-invalid @enderror"
                   value="{{ old('iva') }}" placeholder="12">
            @error('iva')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div >

        <button type="submit" class="btn btn-primary">Calcular total</button>
    </form >
</div>
@endsection
