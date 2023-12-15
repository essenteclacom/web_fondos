@extends('layouts.principal')

@section('title', 'Regulations')

@section('content')
    <div>
        {{-- slide --}}
        <div style="background-image: url({{ asset('/img/Derechos.jpg')}})" class="bg-cover bg-center bg-no-repeat xxs:h-52 xs:h-52 sm:h-84 lg:h-72 xl:h-[32rem]">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-3xl">
                    Cucchiara y Cía S.A. se adhiere y cumple rigurosamente todas las normativas vigentes del mercado de capitales argentino velando por la transparencia y la integridad de todas sus operaciones.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        {{-- end slide --}}
        <div class="bg-primary">
            <div class="container">
                <div class="flex flex-col xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20 pt-32 pb-10">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                            Marco regulatorio
                        </div>
                    </div>
                    <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                        <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                            <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                                Los FCI se encuentran regulados y bajo la supervisión de la Comisión Nacional de Valores.<br/>
                                La CNV es la autoridad de fiscalización y registro en todo el territorio de la República Argentina de las sociedades Gerentes, las sociedades Depositarias y los Fondos.<br/>
                                La CNV tiene facultades para dictar la reglamentación que fuere necesaria para complementar las disposiciones vigentes, resolver casos no previstos en la Ley o el Decreto e interpretar las normas allí incluidas dentro del contexto económico imperante.
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start">
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded w-72 mb-2">
                                Código de conducta
                            </a>
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded w-72 mb-2">
                                Resumen explicativo
                            </a>
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded w-72 mb-2">
                                Comunicación CVN
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[10rem]"></div>
@endsection
