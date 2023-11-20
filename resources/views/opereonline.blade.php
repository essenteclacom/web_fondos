@extends('layouts.principal')

@section('title', 'Online Operation')

@section('content')
<div class="container flex items-center justify-between">
    <div>
        <div>
            <a href="/">
                <img src="{{ asset('/img/logocucchiara.png') }}" class="w-24 lg:w-48" alt="logo image"/>
            </a>
        </div>
        <div class="pt-10">
            <h1 class="text-2xl font-bold text-grey-5">Bienvenido/a</h1>
        </div>
        <form class="mx-auto w-full pt-10">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col md:flex-col">
                    <input class="w-contact-input rounded border-grey-50 py-3 font-body text-black" placeholder="Usuario*" type="text" id="user"/>
                    <input class="w-contact-input rounded border-grey-50 py-3 font-body text-black mt-6" placeholder="Contraseña*" type="text" id="Contraseña"/>
                </div>
            </div>
            <div class="flex w-full">
                <button class="mt-6 flex w-full items-center justify-center rounded bg-third px-8 py-3 font-header text-lg font-bold text-white hover:bg-grey-20">
                    Iniciar sesión
                </button>
            </div>
        </form>
    </div>
    <div class="">
        <img src="{{ asset('/img/slider_01.png') }}" class="h-full w-full" alt="author"/>
    </div>
</div>
@endsection