@extends('backend.layouts.main')

@section('head')
<title>Asociados</title>
@endsection

@section('content')
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">




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
                            Crear Asociado</li>
                    </ul>
                </div>
                <!-- END: BreadCrumb -->
                <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">


                    <div class="card xl:col-span-2">
                        <div class="card-body flex flex-col p-6">
                            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                <div class="flex-1">
                                    <div class="card-title text-slate-900 dark:text-white">Crear Asociado</div>
                                </div>
                            </header>
                            <div class="card-text h-full">
                                <form class="space-y-4" id="typeValidation" method="POST" action="{{ route('backend.asociado.store') }}">
                                    @csrf
                                    <div class="grid md:grid-cols-2 gap-7">
                                        <div class="input-area">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" autofocus>
                                        </div>
                                        <div class="input-area">
                                            <label for="apellido" class="form-label">Apellido</label>
                                            <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido">
                                        </div>
                                        <div class="input-area">
                                            <label for="telefono" class="form-label">Teléfono</label>
                                            <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Ingrese solo números">
                                        </div>
                                        <div class="input-area">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Ingrese un correo electrónico válido">
                                        </div>
                                        <div class="input-area">
                                            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                            <input class="form-control py-2 flatpickr flatpickr-input active" id="fecha_ingreso" name="fecha_ingreso" value="" type="text" readonly="readonly">
                                        </div>
                                        <div class="input-area">
                                            <label for="licencia_conducir" class="form-label">Licencia de conducir</label>
                                            <input id="licencia_conducir" name="licencia_conducir" type="text" class="form-control" placeholder="Ingrese al menos 3 caracteres">
                                        </div>
                                        <div class="input-area">
                                            <label for="tipo_vehiculo" class="form-label">Tipo de Vehículo</label>
                                            <input id="tipo_vehiculo" name="tipo_vehiculo" type="text" class="form-control" placeholder="Ingrese al menos 3 caracteres">
                                        </div>
                                        <div class="input-area">
                                            <label for="numero_placa" class="form-label">Número de Placa</label>
                                            <input id="numero_placa" name="numero_placa" type="text" class="form-control" placeholder="Ingrese al menos 3 caracteres">
                                        </div>
                                        <div class="input-area">
                                            <label for="vehiculo_propio" class="form-label">Vehículo Propio</label>
                                            <select name="vehiculo_propio" id="vehiculo_propio" class="form-control w-full mt-2">
                                                <option selected disabled value="none" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Seleccionar una opción</option>
                                                <option value="1" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Sí</option>
                                                <option value="0" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn flex justify-center btn-dark">Enviar</button>
                                </form>

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