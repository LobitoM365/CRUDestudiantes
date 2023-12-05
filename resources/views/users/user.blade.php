@extends('app')
@section('title', 'Register')
@section('content')

<div class="mt-20 h-full w-max  max-h-full">
    <button id="addUser" data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Añadir</button>
    <div class="w-max bg-white h-max max-h-[50%] overflow-auto shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
            <thead class="sticky top-0 bg-gray-200 z-10">
                <tr class=" text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Id</th>
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-center">Apellido</th>
                    <th class="py-3 px-6 text-center">email</th>
                    <th class="py-3 px-6 text-center">Rol</th>
                    <th class="py-3 px-6 text-center">Opciones</th>

                </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light" id="tbodyTable">

                <tr id="trTableUsers">


                    <td class="py-3 px-6 text-center td-table">
                        <div class="flex items-center justify-center">

                        </div>
                    </td>

                    <td class="py-3 px-6 text-center td-options-table">
                        <div class="flex item-center justify-center">

                            <div class="cursor-pointer hover:bg-black/10 rounded-sm w-5 h-5 flex items-center justify-center mr-2 transform  hover:scale-110 div-options-update">
                                <svg class="w-3/4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="orange">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>

                        </div>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</div>

<div id="Modal" tabIndex="-1" style="display: none;" class="bg-black/60  fixed top-0 left-0 right-0 z-50 w-full h-full flex items-center justify-center  overflow-x-hidden overflow-y-auto md:inset-0  max-h-full">
    <div ref={showModal} class="relative w-full max-w-md max-h-full">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Registrar usuario
                </h3>
                <button type="button" class="closeModal text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="p-6 space-y-6">
                <form id="formUser" class="space-y-6" action="#">
                    <div>
                        <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input  type="text" name="name" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el nombre del usuario..." required />
                        <h4 class="text-red-700 text-xs error-input" style="display: none;"></h4>
                    </div>

                    <div>
                        <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                        <input  type="text" name="apellido" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el email del usuario..." required />
                        <h4 class="text-red-700 text-xs error-input" style="display: none;"></h4>
                    </div>

                    <div>
                        <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identificacion</label>
                        <input type="text" name="identificacion" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese la identificacion del usuario..." required />
                        <h4 class="text-red-700 text-xs error-input" style="display: none;"></h4>
                    </div>
                    <div>
                        <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el email del usuario..." required />
                        <h4 class="text-red-700 text-xs error-input" style="display: none;"></h4>
                    </div>
                    <div>
                        <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rol</label>
                        <select name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingrese el nombre del usuario...">
                            <option value="">Seleccione una opcion...</option>
                            <option value="administrador">Administrador</option>
                            <option value="estudiantes">Estudiante</option>
                            <option value="profesor">Profesor</option>
                        </select>
                        <h4 class="text-red-700 text-xs error-input" style="display: none;"></h4>
                    </div>
                </form>
            </div>

            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button id="registrarUsuario" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>

                <button type="button" class="closeModal text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<script  src="js/user.js"></script>

@endsection