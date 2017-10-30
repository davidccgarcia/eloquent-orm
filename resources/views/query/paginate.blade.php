@extends('layout')

@section('content')
    <h1 class="page-header">Paginate Eloquent</h1>
    <p>
        {{ $users->total() }} Registros || 
        Página {{ $users->currentPage() }} de {{ $users->lastPage() }}
    </p>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Genero</th>
                <th>Biografía</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
    {!! $users->render() !!}
@endsection