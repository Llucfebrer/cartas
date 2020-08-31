@extends('layouts.frontend')
@section('content')
@php
    dump($cartas);
@endphp

@foreach($cartas as $carta)
<div class="row bg-info p-2 mt-4">
    <div class="col-3">
        <b>{{$carta->nombre}}</b>
    </div>
    <div class="col-3">
        {{$carta->restaurante->nombre}}
    </div>
    <div class="col-6">
       @foreach($carta->productos as $producto)
        {{$producto->nombre}} {{$producto}}
        asd
       @endforeach
    </div>

</div>
@endforeach
@endsection