@extends('layouts.principal')

@section('title', 'Regulations')

@section('content')
    <div>
        {{-- slide --}}
        <div style="background-image: url({{ asset('/img/fondo_filtro.png')}}), url({{ asset('/img/background-normativa.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-52 xs:h-52 sm:h-84 lg:h-72 xl:h-[32rem]">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-xl md:text-1xl lg:text-1xl xl:text-2xl">
                    Como agente autorizado para la administración de productos de inversion coletiva, CYC Administradora de Fondos S.A se encuentra regulado y bajo supervisión de la Comisión Nacional de Valores (CNV).
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
                                Los fondos comunes de inversión (FCI) están regulados por la Comisión Nacional de Valores (CNV), organismo encargado de supervisar y controlar los mercados de valores en Argentina.<br/><br/>
                                La CNV establece normativas específicas para la creación, funcionamiento y operación de los fondos comunes de inversión. Estas normativas abarcan aspectos como la constitución del fondo, los requisitos de diversificación de activos, la valuación de los instrumentos financieros, la divulgación de información a los inversores, entre otros. Asimismo, la entidad regulatoria realiza auditorías periódicas para asegurarse de que las sociedades administradoras cumplan con las normas establecidas y que los fondos operen de acuerdo con los intereses y derechos de los inversores.<br/><br/>
                                Bajo este marco legal, <b>CYC Administradora de Fondos S.A. opera como Agente de Administración de Productos de Inversión Colectiva de Fondos Comunes de Inversión, inscripto en CNV bajo el n. 54</b>, respetando la normativa vigente y garantizando la transparencia y seguridad de todas sus operaciones.
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-start">
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                Código de conducta
                            </a>
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                Resumen explicativo
                            </a>
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                Texto de Normas CNV 2013
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[10rem]"></div>
@endsection
