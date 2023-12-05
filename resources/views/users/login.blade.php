@extends('app')
@section('title', 'Register')
@section('content')
    
    <form class="flex justify-center items-center flex-col" action="{{ route('user.sesion') }}" method="POST">
        @csrf
        <div class="border-b border-gray-900/10 pb-12 w-96">
            <h2 class="text-base font-semibold leading-7 text-gray-900 text-center">Iniciar Sesión</h2>
            

            <div class=" flex flex-col  gap-x-6 gap-y-8">
            
                <div class="sm:col-span-4 w-full">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input  name="email" type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                    <h4 class="text-red-700 text-xs"> {{ $message }}</h4>
                    @enderror
                </div>
                <div class="sm:col-span-3 w-full">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                    <div class="mt-2">
                        <input type="text" name="password"  autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-0">
                        @error('password')
                        <h4 class="text-red-700 text-xs"> {{ $message }}</h4>
                        @enderror
                    </div>
                </div>
                <div class="lx yz"><input name="remember" type="radio" class="nw rx afv ayh bnr" value="1"><label for="email" class="jw lu awa awe awp axv">Email</label></div>
      
                <!-- <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">Seleccione una opción...</option>
                            <option value="1">United States</option>
                            <option value="2">Canada</option>
                            <option value="3">Mexico</option>
                        </select>
                    </div>
                    @error('country')
                    <h4 class="text-red-700 text-xs"> {{ $message }}</h4>
                    @enderror
                </div> -->

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

@endsection
