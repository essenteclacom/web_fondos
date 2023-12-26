@extends('layouts.principal')

@section('title', 'Research')

@section('content')
    <div>
        {{-- slide --}}
        <div style="background-image: url({{ asset('/img/Derechos.jpg')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify-center h-full">
                <div class="flex flex-col justify-center items-center w-full">
                    <h1 class="font-body text-white text-shadow font-bold text-3xl pb-6 text-center">Invertí en acciones argentinas en forma activa.</h1>
                    <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-1xl lg:text-1xl xl:text-1xl">
                        CYC Renta Mixta busca optimizar rendimientos a través de la inversión en acciones argentinas que cotizan en el mercado local. Asimismo, el fondo podrá invertir una porción menor en acciones extranjeras por medio de CEDEARs. En determinados contextos, una porción de la cartera podrá ser destinada a instrumentos de renta fija en pesos con el objetivo de reducir la volatilidad propia del mercado accionario.
                    </p>
                </div>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        {{-- end slide --}}
        {{-- start body --}}
        <div class="bg-white">
            <div class="container py-16 md:py-20">
                <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
                    <div class="grid grid-cols-7 gap-0 content-start">
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon project"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon award"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_03.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon happy clients"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_04.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon puzzle"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_05.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon puzzle"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_06.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon puzzle"/>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                            <div>
                                <img src="{{ asset('/img/icon_07.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-24 xl:h-28" alt="icon puzzle"/>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-0 justify-content items-center mt-4">
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Tipo de fondo
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Renta fija
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Moneda
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Dólares
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Plazo de rescate
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                48hrs.
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Horizonte
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Mediano plazo.
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Perfil de inversor
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Moderado
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Inversión mínima
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Moderado
                            </h4>
                        </div>
                        <div class="">
                            <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Benchmark
                            </h4>
                            <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                                Moderado
                            </h4>
                        </div>
                    </div>
                </div>
                <h3 class="text-center font-body text-2xl font-bold sm:text-2xl lg:text-2xl text-color-cucchiara">
                    Información del Fondo
                </h3>
            </div>
        </div>
        {{-- end body --}}
        {{-- start search --}}
        <div class="xs:h-20 lg:h-20"></div>
        <div class="bg-primary">
            <div class="container flex w-full justify-between xxs:flex-col xs:flex-col sm:flex-col md:flex-col lg:flex-row">
                <div>
                    <div class="">
                        <h2 class="text-white text-left font-header text-2xl font-bolder pt-16">
                            Buscar Informes
                        </h2>
                    </div>
                    <div class="pt-16 xxs:text-center xs:text-center sm:text-left">
                        <a class="cursor-pointer rounded-md bg-white text-color-cucchiara text-xl p-4 xs:pl-10 md:pl-8 lg:pl-8 xl:pl-[3.5rem]" id="all-informs">
                            Buscar
                            <i class="bx bx-chevron-down relative -right-2 text-3xl align-middle xxs:pl-24 xs:pl-48 sm:pl-32 md:pl-[13.75rem] lg:pl-[13.75rem]"></i>
                        </a>
                    </div>
                    <div class="hidden grid pb-20 pt-6 gap-1 xxs:grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 xxs:place-items-center xs:place-items-center sm:place-items-start" id="menu">
                        <div>
                            <nav class="menu xxs:w-56 xs:w-80 sm:w-64 md:w-[22.5rem] lg:w-[22.5rem] xl:w-96">
                                <ul class="text-color-cucchiara rounded-t-md rounded-b-md ">
                                    <li>
                                        <a class="submenu rounded-t-md cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-8 text-xl" id="01">Resumen Fondos CyC Liquidez</a>
                                    </li>
                                    <li>
                                        <a class="submenu rounded-b-md cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-8 text-xl" id="02">Presentación Fondos CyC Liquidez</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="flex text-a-color xxs:pt-4 xs:mt-10 sm:-mt-10">
                            <!-- Coyuntura Argentina -->
                            <div class="flex flex-col hidden list" id="lista-01">
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Resumen fondo CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Resumen fondo CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Resumen fondo CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Resumen fondo CyC Liquidez 04.11.2023</a>
                            </div>
                            <div class="flex flex-col hidden list" id="lista-02">
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Presentación Fondos CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Presentación Fondos CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Presentación Fondos CyC Liquidez 04.11.2023</a>
                                <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-a-color h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Presentación Fondos CyC Liquidez 04.11.2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="h-28 block" id="space"></div>
                </div>
                <div class="my-16 flex flex-col items-center justify-center">
                    <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded xxs:w-60 xs:w-72 sm:w-72 md:w-72 lg:w-48 xl:w-72 mb-2">
                        Reglamento de<br>gestión
                    </a>
                    <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded xxs:w-60 xs:w-72 sm:w-72 md:w-72 lg:w-48 xl:w-72 mb-2">
                        Calificación
                    </a>
                    <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded xxs:w-60 xs:w-72 sm:w-72 md:w-72 lg:w-48 xl:w-72 mb-2">
                        Resumen semanal
                    </a>
                    <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded xxs:w-60 xs:w-72 sm:w-72 md:w-72 lg:w-48 xl:w-72">
                        Resumen mensual
                    </a>
                </div>
            </div>
        </div>
        {{-- end search --}}
    </div>
    <div class="h-[10rem]"></div>
    <script src="{{ asset('/js/main.js')}}"></script>
@endsection