@extends('backend.layouts.main')

@section('head')
<title>Asociados</title>
@endsection

@section('content')
<!-- END: Header -->
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
                <div class=" md:flex justify-between items-center">



                    <!-- BEGIN: Breadcrumb -->
                    <div class="mb-5">
                        <ul class="m-0 p-0 list-none">
                            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                <a href="index.html">
                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                </a>
                            </li>
                            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                Asociados
                                <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                            </li>
                            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                Lista</li>
                        </ul>
                    </div>
                    <!-- END: BreadCrumb -->
                    <div class="flex flex-wrap ">


                        <a href="{{ route('backend.asociado.create') }}" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1">
                            <span class="flex items-center">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                <span>Crear Asociado</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" space-y-5 mt-3">
                <div class="card">
                    <header class=" card-header noborder">
                        <h4 class="card-title">Lista de Asociados
                        </h4>
                    </header>
                    <div class="card-body px-6 pb-6">
                        <div class="overflow-x-auto -mx-6 dashcode-data-table">
                            <span class=" col-span-8  hidden"></span>
                            <span class="  col-span-4 hidden"></span>
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                        <thead class=" border-t border-slate-100 dark:border-slate-800">
                                            <tr>

                                                <th scope="col" class=" table-th ">
                                                    #
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Nombres y Apellidos
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Telefono
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Email
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Fecha de Ingreso
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Licencia
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Tipo de Vehículo
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Placa
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Vehículo Propio
                                                </th>

                                                <th scope="col" class=" table-th ">
                                                    Acción
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                            @foreach($asociados as $asociado)
                                            <tr>
                                                <td class="table-td">
                                                    {{ $loop->index + 1 }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->nombre }} {{ $asociado->apellido }}

                                                </td>
                                                <td class="table-td">
                                                    {{ $asociado->telefono }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->email }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->fecha_ingreso }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->licencia_conducir }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->tipo_vehiculo }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->numero_placa }}
                                                </td>
                                                <td class="table-td ">
                                                    {{ $asociado->vehiculo_propio }}
                                                </td>
                                                <td class="table-td ">
                                                    <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                                <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                                </button>
                                                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                  shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                    <li>
                                                                        <a href="invoive-add.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer first:rounded-t flex space-x-2
                                      items-center rtl:space-x-reverse ">
                                                                            <span class="text-base">
                                                                                <iconify-icon icon="heroicons:paper-airplane"></iconify-icon>
                                                                            </span>
                                                                            <span class="text-sm">Send</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="invoive-preview.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                                                            <span class="text-base">
                                                                                <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                                            </span>
                                                                            <span class="text-sm">View</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="invoive-preview.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                                                            <span class="text-base">
                                                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                            </span>
                                                                            <span class="text-sm">Edit</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                                                            <span class="text-base">
                                                                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                            </span>
                                                                            <span class="text-sm">Delete</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

@endsection