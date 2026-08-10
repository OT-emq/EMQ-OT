@extends('layouts.app')

@section('title', 'Tarjetas')

@section('content')
    Pantalla creada para probar las tarjetas del aplicativo
    <x-card-dashboard title="planes diarios" :value="10"/>
@endsection