<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>R32 Instalaciones y Climatizaciones</title>
    <link rel="stylesheet" href="./app.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=magra:400" rel="stylesheet" />
    @bukStyles
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-teal-950">
    <header class="bg-teal-800 py-4">
        <div class="container mx-auto">
            <div class="flex items-center h-full ml-3">
                <img src="{{ asset('images/pingu.jpg') }}" alt="" class="h-full max-h-[150px] px-6">
                <div class="text-white m-3 text-4xl items-center">R32 Instalaciones y Climatizaciones</div>
            </div>
        </div>
    </header>

    <body>
        <div class="w-full max-w-screen-xl mx-auto mt-4">
            <div id="default-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-[500px] xl:h-[400px] 2xl:h-[600px]">

                    <!-- Slides del carrusel -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl">Primer
                            Slide</span>
                        <img src="{{ asset('images/instalacion.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/aires.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/Mundoclima.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                </div>

                <!-- Botones de navegación -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>

                <!-- Botones de navegación -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
            </div>
        </div>

        <div class="flex justify-center py-5 mx-5">
            <div class="grid grid-cols-1 gap-x-40 sm:grid-cols-3">
                <div class="text-neutral-50 flex flex-col items-center">
                    <div class="w-[150px]">{{ svg('fas-wind') }}</div>
                    <p class="m-4 text-2xl text-center "> Venta e Intalación de Sistemas de Ventilación</p>
                </div>
                <div class="text-neutral-50 flex flex-col items-center">
                    <div class="w-[150px] mt-3  ">{{ svg('fas-hammer') }}</div>
                    <p class="m-4 text-2xl text-center"> Reparación de Aires Acondicionados</p>
                </div>
                <div class="text-neutral-50 flex flex-col items-center">
                    <div class="w-[150px]">{{ svg('mdi-hammer-wrench') }}</div>
                    <p class="m-4 text-2xl text-center"> Mantenimiento de Aires Acondicionados</p>
                </div>
            </div>
        </div>


    <footer class="bg-teal-800 py-4 text-white text-xl">
    <div class="grid grid-cols-[2,auto] gap-x-4">
        <div class="justify-self-start">© 2024 R32INSTALACIONES</div>
        <div class="grid grid-cols-2 gap-x-4 justify-self-end">
            <div class="flex items-center space-x-2">
                <div class="w-[40px]">{{ svg('fab-whatsapp') }}</div>
                <p>662 480 928</p>
            </div>
            <div class="flex items-center space-x-2 mr-10">
                <div class="w-[40px]">{{ svg('entypo-mail') }}</div>
                <p>diegoc@r32instalaciones.com</p>
            </div>
        </div>
    </div>
</footer>



        @bukScripts
    </body>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</html>
