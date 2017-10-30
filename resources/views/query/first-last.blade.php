@extends('layout')

@section('content')
    <h1 class="page-header">First Last</h1>

    <h3>Primer registro</h3>
    <p>ID {{ $first->id }}</p>
    <p>{{ $first->name }}</p>

    <h3>Último registro</h3>
    <p>ID {{ $last->id }}</p>
    <p>{{ $last->name }}</p>
@endsection