<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
    <div class="logo-segment">
        <a class="flex items-center" href="index.html">
            <img src="images/road.svg" class="black_logo" alt="logo">
            <img src="images/roadW.svg" class="white_logo" alt="logo">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">Transportegya</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
            </span>
            <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
            </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENU</li>
            <li class="">
                <a href="{{ route('dashboard') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Inicio</span>
                    </span>
                </a>
            </li>

            <li class="">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:users"></iconify-icon>
                        <span>Asociados</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('backend.asociado.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('backend.asociado.create') }}">Crear</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:users"></iconify-icon>
                        <span>Rutas</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('backend.asociado.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('backend.asociado.create') }}">Crear</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:users"></iconify-icon>
                        <span>Contabilidad</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('backend.asociado.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('backend.asociado.create') }}">Crear</a>
                    </li>
                </ul>
            </li>

            
            <li class="">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:users"></iconify-icon>
                        <span>Reportes</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('backend.asociado.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('backend.asociado.create') }}">Crear</a>
                    </li>
                </ul>
            </li>

        

            <!-- Upgrade Your Business Plan Card Start -->
            <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white" id="sidebar_bottom_wizard">
                <img src="images/ruta.svg" alt="" class="mx-auto relative -mt-[73px]">
                <div class="max-w-[160px] mx-auto mt-6">
                    <div class="widget-title font-Inter mb-1">Rutas</div>
                    <div class="text-xs font-light font-Inter">
                       Ver detalles de las rutas en movimiento.
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-full block py-2 font-medium">
                        Ver
                    </button>
                </div>
            </div>
            <!-- Upgrade Your Business Plan Card Start -->
    </div>
</div>