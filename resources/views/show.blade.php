@extends('layout')

@section('content')
    <h2>Detalles del Usuario</h2>
    <div>
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Correo electrónico:</strong> {{ $user->email }}</p>
        <p><strong>Creado en:</strong