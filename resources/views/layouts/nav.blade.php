<meta name="csrf-token" content="{{ csrf_token() }}" >
<nav class="bg-gray-800">
    <div class="mx-auto  @if (!Auth::guest()) max-w-7xl @endif px-2 sm:px-6   lg:px-8 ">
        <div class="relative flex h-16 items-center justify-between">
            @if (!Auth::guest())
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="{{ asset('img/lobitom/GATO.png') }}" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="{{route('user')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Usuarios</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Cursos</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Matriculas</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <div class="">
                    <div class="flex  gap-5">
                        <style>
                            .div-icon-camera:hover svg {
                                stroke: white
                            }
                        </style>
                        
                        <div class="div-icon-camera flex gap-2  cursor-pointer relative justify-center items-center ">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(156,163,175)" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-2 absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white  shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none w-max" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <button class=" rounded w-full hover:bg-slate-800 hover:text-white   block px-4 py-2 text-sm text-gray-700" type="submit">Configuracion</button>

                    <form action="{{ route('user.logout') }}" method="POST">
                        @csrf
                        <button class="rounded  w-full hover:bg-slate-800 hover:text-white block px-4 py-2 text-sm text-gray-700" type="submit">Cerrar sesión</button>
                    </form>
                </div>
                </div>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <div class="flex">


                            <div class="flex  gap-2">
                                <img class="h-8 w-auto rounded-full" src="{{ asset('img/lobitom/gato_botas_lobo.jpg') }}" alt="Lobo botas">
                                <h5 class="text-white text-xs">{{ Auth::user()->user_name }}</h5>
                            </div>
                        </div>
                    </div>

      
                </div>
            </div>
       
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    
    @endif
    <script src="js/jquery.js"></script>
    <script src="js/swal.js"></script>

</nav>