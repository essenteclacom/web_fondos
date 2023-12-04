@extends('layouts.principal')

@section('title', 'Home')

@section('content')
    {{-- slide --}}
    <div>
        <div class="sm:bg-no-repeat md:bg-no-repeat lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat xl:w-full xl:max-w-full xl:overflow-hidden xl:h-auto xl:grid xl:bg-cover xl:bg-no-repeat xl:bg-top justify-center items-center" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 xxs:pb-48 xs:pb-52 sm:pb-72 md:pb-96 lg:pb-48">
                <div class="xxs:text-center xs:text-center sm:text-center md:text-left lg:text-left xxs:pt-8 xs:pt-8 sm:pt-20 xl:pt-32">
                    <h1 class="font-body font-bolder text-white xxs:text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-5xl">
                        Inverti en fondos<br/>Comunes de inversión
                    </h1>
                    <div class="xxs:pt-12 xs:pt-12 sm:pt-12 md:pt-12 lg:pt-12 xl:pt-12 pl-0 md:pl-1">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-xl">
                            Delega la administración de tus inversiones en un equipo de<br/>especialistas. Diversificate con poco capital. Ofrecemos fondos de<br/>inversión con diferentes perfiles de riesgo, plazo y rentabilidad.<br/>
                            Elegí el fondo que mejor se adapte a tus objetivos.
                        </p>
                    </div>
                    {{--<div class="absolute md:top-16 lg:-top-4 xl:-top-16 right-0 z--1">
                         <img src="img/Animacion Cucchiara_Mesa de trabajo 1.png" class="xxs:hidden xs:hidden sm:hidden md:block md:w-[48rem] lg:w-[56rem] xl:w-[65rem]">
                    </div>--}}
                </div>
                <div class="xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left pt-40">
                    <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
                        Nosotros
                    </span>
                    <div class="xxs:pt-8 xs:pt-8 sm:pt-8 md:pt-8 lg:pt-8 xl:pt-8">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-2xl">
                            <span class="font-bold">CYC Administradora de Fondos S.A.</span> es un Agente de Administración de Productos de Inversión Colectiva (AAPIC) bajo el registro Nro. 54 de la Comisión Nacional de Valores (CNV). La empresa fue creada en  2016 y es la administradora de fondos perteneciente a Cucchiara y Cía S.A., Agente de Negociación, Liquidación y Compensación con más de 50 años de trayectoria en el mercado local.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container text-center mt-40 xxs:px-0 lg:px-28 xl:px-48">
        <span class="text-color-cucchiara font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
            ¿Qué es un Fondo?
        </span>
        <p class="font-body text-color-cucchiara pt-10 pb-10 font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-2xl">
            Un Fondo Común de Inversión (FCI) es un instrumento financiero de inversión colectiva que reune capital de instituciones e individuos. Su administración se delega a expertos que toman decisiónes de inversión en pos de alcanzar los objetivos financieros de los inversores. Su estructura permite acceder con poco capital a una cartera diversificada de activos financieros, sean estos bonos, acciones, cauciones, depósitos a plazo, entre otros.
        </p>
        <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
            <div class="grid grid-cols-4 gap-0 content-start">
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/home_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon project"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/home_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon award"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/home_03.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/home_04.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon puzzle"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-0 justify-content items-center mt-4">
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Diversificación
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Liquidez
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Gestión Activa
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Transparencia
                    </h4>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 xxs:gap-1 gap-y-10 pt-10 sm:gap-x-6 md:gap-x-14 lg:gap-x-14 xl:gap-x-20 md:pt-12">
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Administración<br/>de cartera
                    </h3>
                </div>
                <div>
                   <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        CYC DÓLAR<br/>RENTA FIJA
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_02.png') }}" alt="content marketing icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        CYC PESOS<br/>RENTA FIJA
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_03.png') }}" alt="Mobile Application icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        CYC<br/>LIQUIDEZ
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_04.png') }}" alt="Email Marketing icon" class="xxs:w-20"/>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    {{-- open account --}}
    <div class="container text-center mt-40 xxs:px-0 lg:px-28 xl:px-48">
        <span class="text-color-cucchiara font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
            ¿Cómo suscribir a nuestros fondos?
        </span>
        <p class="pb-20">
            Las suscripciones se realizan a través de nuestros Agentes Colocadores.
        </p>
        <div class="grid justify-items-center items-center gap-6 grid-cols-1">
            <div class="flex xxs:flex-col xs:flex-col sm:flex-col md:flex-row justify-between items-center w-[34rem]">
                <a href="https://www.byma.com.ar/" target="_blank">
                    <div><img src="{{ asset('/img/logo_suscription_01.png') }}" class="" alt="logo_suscription_01"/></div>
                </a>
                <p class="text-left my-10">
                    Cucchiara y Cia. S.A.<br/>
                    info@cucchiara.com.ar
                </p>
            </div>
            <div class="border border-services-c w-[40rem]"></div>
            <div class="flex xxs:flex-col xs:flex-col sm:flex-col md:flex-row justify-between items-center w-[34rem]">
                <a href="https://cajadevalores.com.ar/" target="_blank">
                    <div><img src="{{ asset('/img/logo_suscription_02.png') }}" class="" alt="logo_suscription_02"/></div>
                </a>
                <p class="text-left my-10">
                    Buenos Aires Valores S.A.<br/>
                    informes@bavsa.com
                </p>
            </div>
            <div class="border border-services-c w-[40rem]"></div>
            <div class="flex xxs:flex-col xs:flex-col sm:flex-col md:flex-row justify-between items-center w-[34rem]">
                <a href="https://www.matbarofex.com.ar/" target="_blank">
                    <div><img src="{{ asset('/img/logo_suscription_03.png') }}" class="" alt="logo_suscription_03"/></div>
                </a>
                <p class="text-left my-10">
                    Gio Bursátil S.A.<br/>
                    info@giobursatil.com
                </p>
            </div>
            <div class="border border-services-c w-[40rem]"></div>
            <div class="flex xxs:flex-col xs:flex-col sm:flex-col md:flex-row justify-between items-center w-[34rem]">
                <a href="https://www.mae.com.ar/" target="_blank">
                    <div><img src="{{ asset('/img/logo_suscription_04.png') }}" class="" alt="logo_suscription_04"/></div>
                </a>
                <p class="text-left my-10">
                    Bolsa y Mercados Argentinos<br/>
                    Email: info@byma.com.ar
                </p>
            </div>
        </div>
    </div>
    {{-- end open account --}}
    <div class="h-[10rem]"></div>
@endsection
