@extends('layout')

@section('content')
    <div class="alert alert-danger" role="alert">
        Usuario eliminado correctamente
        <a href="{{ route('home') }}" class="alert-link"> ir al home</a>
    </div>
@endsection