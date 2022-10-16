@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Apenas usuários autenticados.</p> 
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Esta é a homepage. Entre para acessar a parte restrita.</p>
        @endguest
    </div>
@endsection