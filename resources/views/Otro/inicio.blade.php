<?php use App\Http\Controllers\OtroController;?>
@extends('layouts.master')
@section('title', 'Listado de Otros')
{{-- Personalizo el header --}}
@section('header')
    <h1>Listado de Otros</h1>
    @parent
@stop
{{-- Personalizo el Navbar --}}
@section('navbar')
    <ul>
        <li><a href="{{action([OtroController::class,'create'])}}">Agregar Nuevo</a></li>
    </ul>
@stop
{{-- Personalizo el Contenido --}}
@section('content')
<table class="min-w-full table-auto">
    <caption>Listado de otros</caption>
    <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2"> <span class="text-gray-300">id</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Nombre</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Precio</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Creado</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Actualizado</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Ver</span>
            </th>
            <th class="px-16 py-2"> <span class="text-gray-300">Borrar</span>
            </th>
        </tr>
    </thead>
    <tbody class="bg-gray-200">
    @forelse($otros as $otro)
        <tr class="bg-white border-4 border-gray-200">
            <td class="px-16 py-2 flex flex-row items-center">{{$otro->idOtro}}</td>
            <td>{{$otro->nomOtro}}</td>
            <td>{{$otro->precio}}</td>
            <td>{{$otro->created_at}}</td>
            <td>{{$otro->updated_at}} fecha</td>
            <td><a href="{{action([OtroController::class,'show'],['id'=>$otro->idOtro])}}">VER</a></td>
            <td><a href="{{action([OtroController::class,'destroy'],['id'=>$otro->idOtro])}}">DEL</a></td>
        </tr>
    @empty
        <tr>
            <td>No data</td>
        </tr>
    @endforelse
    </tbody>
</table>
@stop
{{-- Personalizo el Contenido --}}
@section('footer')
    @parent
    <p>{{date('Y')}}</p>
@stop
