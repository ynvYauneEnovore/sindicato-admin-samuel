@extends('backend.layouts.main')

@section('head')
<title>Iglesias</title>
@endsection

@section('content')

<main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group">
        <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
        <div class="logo-segment">
            <a class="flex items-center" href="index.html">
                <img src="assets-backend/images/logo/logo-c.svg" class="black_logo" alt="logo">
                <img src="assets-backend/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
            </a>
            <!-- Sidebar Type Button -->
            <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
                <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                    <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                    </div>
                </span>
                <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                    <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                    </div>
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
                    <a href="#" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                            <span>Dashboard</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="index.html">Analytics Dashboard</a>
                        </li>
                        <li>
                            <a href="ecommerce-dashboard.html">Ecommerce Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="project-dashboard.html">Project Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="crm-dashboard.html">CRM Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="banking-dashboard.html">Banking Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Apps Area -->
                <li class="sidebar-menu-title">APPS</li>
                <li>
                    <a href="chat.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                            <span>Chat</span>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="email.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                            <span>Email</span>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="kanban.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                            <span>Kanban</span>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="calander.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
                            <span>Calander</span>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="todo.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                            <span>Todo</span>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                            <span>Projects</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="project.html">Projects</a>
                        </li>
                        <li>
                            <a href="project-details.html">Project Details</a>
                        </li>
                    </ul>
                </li>
                <!-- Pages Area -->
                <li class="sidebar-menu-title">PAGES</li>
                <!-- Authentication -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:lock-closed"></iconify-icon>
                            <span>Authentication</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="signin-one.html">Signin One</a>
                        </li>
                        <li>
                            <a href="signin-two.html">Signin Two</a>
                        </li>
                        <li>
                            <a href="signin-three.html">Signin Three</a>
                        </li>
                        <li>
                            <a href="signup-one.html">Signup One</a>
                        </li>
                        <li>
                            <a href="signup-two.html">Signup Two</a>
                        </li>
                        <li>
                            <a href="signup-three.html">Signup Three</a>
                        </li>
                        <li>
                            <a href="forget-password-one.html">Forget Password One</a>
                        </li>
                        <li>
                            <a href="forget-password-two.html">Forget Password Two</a>
                        </li>
                        <li>
                            <a href="forget-password-three.html">Forget Password Three</a>
                        </li>
                        <li>
                            <a href="lock-screen-one.html">Lock Screen One</a>
                        </li>
                        <li>
                            <a href="lock-screen-two.html">Lock Screen Two</a>
                        </li>
                        <li>
                            <a href="lock-screen-three.html">Lock Screen Three</a>
                        </li>
                    </ul>
                </li>
                <!-- Utility -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                            <span>Utility</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blank-page.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="settings.html">Settings</a>
                        </li>
                        <li>
                            <a href="profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="404.html">404 Page</a>
                        </li>
                        <li>
                            <a href="comming-soon.html">Coming Soon</a>
                        </li>
                        <li>
                            <a href="under-maintanance.html">Under Maintanance</a>
                        </li>
                    </ul>
                </li>
                <!-- Elements Area -->
                <li class="sidebar-menu-title">ELEMENTS</li>
                <!-- Widgets -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
                            <span>Widgets</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="basic-widgets.html">Basic</a>
                        </li>
                        <li>
                            <a href="statistics-widgets.html">Statistic</a>
                        </li>
                    </ul>
                </li>
                <!-- Components -->
                <li>
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
                            <span>Components</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="alert.html">Alert</a>
                        </li>
                        <li>
                            <a href="buttons.html">Button</a>
                        </li>
                        <li>
                            <a href="card.html">Card</a>
                        </li>
                        <li>
                            <a href="carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="dropdown.html">Dropdown</a>
                        </li>
                        <li>
                            <a href="image.html">Image</a>
                        </li>
                        <li>
                            <a href="modal.html">Modal</a>
                        </li>
                        <li>
                            <a href="progressbar.html">Progress bar</a>
                        </li>
                        <li>
                            <a href="placeholder.html">Placeholder</a>
                        </li>
                        <li>
                            <a href="tab-accordion.html">Tab & Accordion</a>
                        </li>
                        <li>
                            <a href="badges.html">Badges</a>
                        </li>
                        <li>
                            <a href="pagination.html">Pagination</a>
                        </li>
                        <li>
                            <a href="video.html">Video</a>
                        </li>
                        <li>
                            <a href="tooltip-popover.html">Tooltip & Popover</a>
                        </li>
                    </ul>
                </li>
                <!-- Forms -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-list"></iconify-icon>
                            <span>Forms</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="input.html">Input</a>
                        </li>
                        <li>
                            <a href="input-group.html">Input group</a>
                        </li>
                        <li>
                            <a href="input-layout.html">Input layout</a>
                        </li>
                        <li>
                            <a href="form-validation.html">Form validation</a>
                        </li>
                        <li>
                            <a href="wizard.html">Wizard</a>
                        </li>
                        <li>
                            <a href="input-mask.html">Input mask</a>
                        </li>
                        <li>
                            <a href="file-input.html">File input</a>
                        </li>
                        <li>
                            <a href="form-repeater.html">Form repeater</a>
                        </li>
                        <li>
                            <a href="textarea.html">Textarea</a>
                        </li>
                        <li>
                            <a href="checkbox.html">Checkbox</a>
                        </li>
                        <li>
                            <a href="radio.html">Radio button</a>
                        </li>
                        <li>
                            <a href="switch.html">Switch</a>
                        </li>
                        <li>
                            <a href="select.html">Select</a>
                        </li>
                        <li>
                            <a href="date-picker.html">Date time picker</a>
                        </li>
                    </ul>
                </li>
                <!-- Tables -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
                            <span>Tables</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="basic-table.html">Basic table</a>
                        </li>
                        <li>
                            <a href="advance-table.html">Advanced table</a>
                        </li>
                    </ul>
                </li>
                <!-- Charts -->
                <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
                            <span>Chart</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="apex-chart.html">Apex chart</a>
                        </li>
                        <li>
                            <a href="chartjs.html">Chart js</a>
                        </li>
                    </ul>
                </li>
                <!-- Map -->
                <li class="">
                    <a href="map.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
                            <span>Map</span>
                        </span>
                    </a>
                </li>
                <!-- Icons -->
                <li class="">
                    <a href="icons.html" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:emoji-happy"></iconify-icon>
                            <span>Icons</span>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- Upgrade Your Business Plan Card Start -->
            <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white" id="sidebar_bottom_wizard">
                <img src="assets-backend/images/svg/rabit.svg" alt="" class="mx-auto relative -mt-[73px]">
                <div class="max-w-[160px] mx-auto mt-6">
                    <div class="widget-title font-Inter mb-1">Unlimited Access</div>
                    <div class="text-xs font-light font-Inter">
                        Upgrade your system to business plan
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-full block py-2 font-medium">
                        Upgrade
                    </button>
                </div>
            </div>
            <!-- Upgrade Your Business Plan Card Start -->
        </div>
    </div>
    <!-- End: Sidebar -->
    <!-- End: Sidebar -->
    <!-- BEGIN: Settings -->

    <!-- BEGIN: Settings -->
    <!-- Settings Toggle Button -->
    <button class="fixed ltr:md:right-[-29px] ltr:right-0 rtl:left-0 rtl:md:left-[-29px] top-1/2 z-[888] translate-y-1/2 bg-slate-800 text-slate-50 dark:bg-slate-700 dark:text-slate-300 cursor-pointer transform rotate-90 flex items-center text-sm font-medium px-2 py-2 shadow-deep ltr:rounded-b rtl:rounded-t" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
        <iconify-icon class="text-slate-50 text-lg animate-spin" icon="material-symbols:settings-outline-rounded"></iconify-icon>
        <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Settings</span>
    </button>

    <!-- BEGIN: Settings Modal -->
    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
        <div class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300">
            <div>
                <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
                    Theme customizer
                </h3>
                <p class="block text-sm font-Inter font-light text-[#68768A] dark:text-[#eee]">Customize & Preview in Real
                    Time</p>
            </div>
            <button type="button" class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
        </div>
        <div class="offcanvas-body flex-grow overflow-y-auto">
            <div class="settings-modal">
                <div class="p-6">

                    <h3 class="mt-4">Theme</h3>
                    <form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
                        <div class="input-group flex items-center">
                            <input type="radio" id="light" name="theme" value="light" class="themeCustomization-checkInput">
                            <label for="light" class="themeCustomization-checkInput-label">Light</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="dark" name="theme" value="dark" class="themeCustomization-checkInput">
                            <label for="dark" class="themeCustomization-checkInput-label">Dark</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="semiDark" name="theme" value="semiDark" class="themeCustomization-checkInput">
                            <label for="semiDark" class="themeCustomization-checkInput-label">Semi Dark</label>
                        </div>
                    </form>
                </div>
                <div class="divider"></div>
                <div class="p-6">

                    <div class="flex items-center justify-between mt-5">
                        <h3 class="!mb-0">Rtl</h3>
                        <label id="rtl_ltr" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-600"></span>
                        </label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="p-6">
                    <h3>Content Width</h3>
                    <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                        <div class="input-group flex items-center">
                            <input type="radio" id="fullWidth" name="content-width" value="fullWidth" class="themeCustomization-checkInput">
                            <label for="fullWidth" class="themeCustomization-checkInput-label ">Full Width</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="boxed" name="content-width" value="boxed" class="themeCustomization-checkInput">
                            <label for="boxed" class="themeCustomization-checkInput-label ">Boxed</label>
                        </div>
                    </div>
                    <h3 class="mt-4">Menu Layout</h3>
                    <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                        <div class="input-group flex items-center">
                            <input type="radio" id="vertical_menu" name="menu_layout" value="vertical" class="themeCustomization-checkInput">
                            <label for="vertical_menu" class="themeCustomization-checkInput-label ">Vertical</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="horizontal_menu" name="menu_layout" value="horizontal" class="themeCustomization-checkInput">
                            <label for="horizontal_menu" class="themeCustomization-checkInput-label ">Horizontal</label>
                        </div>
                    </div>
                    <div id="menuCollapse" class="flex items-center justify-between mt-5">
                        <h3 class="!mb-0">Menu Collapsed</h3>
                        <label class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                        </label>
                    </div>
                    <div id="menuHidden" class="!flex items-center justify-between mt-5">
                        <h3 class="!mb-0">Menu Hidden</h3>
                        <label id="menuHide" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
                        </label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="p-6">
                    <h3>Navbar Type</h3>
                    <div class="input-area flex flex-wrap items-center space-x-4 rtl:space-x-reverse">
                        <div class="input-group flex items-center">
                            <input type="radio" id="nav_floating" name="navbarType" value="floating" class="themeCustomization-checkInput">
                            <label for="nav_floating" class="themeCustomization-checkInput-label ">Floating</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="nav_sticky" name="navbarType" value="sticky" class="themeCustomization-checkInput">
                            <label for="nav_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="nav_static" name="navbarType" value="static" class="themeCustomization-checkInput">
                            <label for="nav_static" class="themeCustomization-checkInput-label ">Static</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="nav_hidden" name="navbarType" value="hidden" class="themeCustomization-checkInput">
                            <label for="nav_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                        </div>
                    </div>
                    <h3 class="mt-4">Footer Type</h3>
                    <div class="input-area flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="input-group flex items-center">
                            <input type="radio" id="footer_sticky" name="footerType" value="sticky" class="themeCustomization-checkInput">
                            <label for="footer_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="footer_static" name="footerType" value="static" class="themeCustomization-checkInput">
                            <label for="footer_static" class="themeCustomization-checkInput-label ">Static</label>
                        </div>
                        <div class="input-group flex items-center">
                            <input type="radio" id="footer_hidden" name="footerType" value="hidden" class="themeCustomization-checkInput">
                            <label for="footer_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Settings Modal -->
    <!-- END: Settings -->

    <!-- End: Settings -->
    <div class="flex flex-col justify-between min-h-screen">
        <div>
            <!-- BEGIN: Header -->
            <!-- BEGIN: Header -->
            <div class="z-[9]" id="app_header">
                <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                    <div class="flex justify-between items-center h-full">
                        <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                            <a href="index.html" class="mobile-logo xl:hidden inline-block">
                                <img src="assets-backend/images/logo/logo-c.svg" class="black_logo" alt="logo">
                                <img src="assets-backend/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                            </a>
                            <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                                <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                            </button>
                            <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 px-1
        rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                                <span class="xl:inline-block hidden ml-3">Search...
                                </span>
                            </button>

                        </div>
                        <!-- end vertcial -->
                        <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                            <a href="index.html">
                                <span class="xl:inline-block hidden">
                                    <img src="assets-backend/images/logo/logo.svg" class="black_logo " alt="logo">
                                    <img src="assets-backend/images/logo/logo-white.svg" class="white_logo" alt="logo">
                                </span>
                                <span class="xl:hidden inline-block">
                                    <img src="assets-backend/images/logo/logo-c.svg" class="black_logo " alt="logo">
                                    <img src="assets-backend/images/logo/logo-c-white.svg" class="white_logo " alt="logo">
                                </span>
                            </a>
                            <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
                                <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                            </button>

                        </div>
                        <!-- end horizental -->



                        <div class="main-menu">
                            <ul>

                                <li class="
             menu-item-has-children 
              ">
                                    <!--  Single menu -->

                                    <!-- has dropdown -->



                                    <a href="javascript:void()">
                                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                            <span class="icon-box">
                                                <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                            </span>
                                            <div class="text-box">Dashboard</div>
                                        </div>
                                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                        </div>
                                    </a>

                                    <!-- Dropdown menu -->



                                    <ul class="sub-menu">



                                        <li>
                                            <a href=index.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons:presentation-chart-line class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Analytics Dashboard
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=ecommerce-dashboard.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons:shopping-cart class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Ecommerce Dashboard
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=project-dashboard.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons:briefcase class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Project Dashboard
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=crm-dashboard.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=ri:customer-service-2-fill class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        CRM Dashboard
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=banking-dashboard.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons:wrench-screwdriver class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Banking Dashboard
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                    <!-- Megamenu -->


                                </li>

                                <li class="
             menu-item-has-children 
              ">
                                    <!--  Single menu -->

                                    <!-- has dropdown -->



                                    <a href="javascript:void()">
                                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                            <span class="icon-box">
                                                <iconify-icon icon=heroicons-outline:chip> </iconify-icon>
                                            </span>
                                            <div class="text-box">App</div>
                                        </div>
                                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                        </div>
                                    </a>

                                    <!-- Dropdown menu -->



                                    <ul class="sub-menu">



                                        <li>
                                            <a href=chat.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:chat class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Chat
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=email.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:mail class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Email
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=calender>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:calendar class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Calendar
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=kanban>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:view-boards class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Kanban
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=todo>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:clipboard-check class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Todo
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=projects>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:document class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Projects
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                    <!-- Megamenu -->


                                </li>

                                <li class="
              menu-item-has-children has-megamenu
            ">
                                    <!--  Single menu -->

                                    <!-- has dropdown -->



                                    <a href="javascript:void()">
                                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                            <span class="icon-box">
                                                <iconify-icon icon=heroicons-outline:view-boards> </iconify-icon>
                                            </span>
                                            <div class="text-box">Pages</div>
                                        </div>
                                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                        </div>
                                    </a>

                                    <!-- Dropdown menu -->


                                    <!-- Megamenu -->



                                    <div class="rt-mega-menu">
                                        <div class="flex flex-wrap space-x-8 justify-between rtl:space-x-reverse">



                                            <div>
                                                <!-- mega menu title -->
                                                <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                                    <span> Authentication</span>
                                                </div>
                                                <!-- single menu item* -->



                                                <a href=signin-one.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signin One
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=signin-two.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signin Two
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=signin-three.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signin Three
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=signup-one.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signup One
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=signup-two.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signup Two
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=signup-three.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Signup Three
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=forget-password-one.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Forget Password One
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=forget-password-two.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Forget Password Two
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=forget-password-three.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Forget Password Three
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=lock-screen-one.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Lock Screen One
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=lock-screen-two.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Lock Screen Two
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=lock-screen-three.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Lock Screen Three
                                                        </span>
                                                    </div>

                                                </a>

                                            </div>



                                            <div>
                                                <!-- mega menu title -->
                                                <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                                    <span> Components</span>
                                                </div>
                                                <!-- single menu item* -->



                                                <a href=typography.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            typography
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=colors.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            colors
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=alert.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            alert
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=button.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            button
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=card.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            card
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=carousel.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            carousel
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=dropdown.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            dropdown
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=image.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            image
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=modal.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            modal
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=progress-bar.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Progress bar
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=placeholder.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Placeholder
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=tab-accordion.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Tab &amp; Accordion
                                                        </span>
                                                    </div>

                                                </a>

                                            </div>



                                            <div>
                                                <!-- mega menu title -->
                                                <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                                    <span> Forms</span>
                                                </div>
                                                <!-- single menu item* -->



                                                <a href=input.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Input
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=input-group.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Input group
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=input-layout.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Input layout
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=form-validation.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Form validation
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=form-wizard.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Wizard
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=input-mask.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Input mask
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=file-input>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            File input
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=form-repeater.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Form repeater
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=textarea.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Textarea
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=checkbox.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Checkbox
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=radio-button.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Radio button
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=switch.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Switch
                                                        </span>
                                                    </div>

                                                </a>

                                            </div>



                                            <div>
                                                <!-- mega menu title -->
                                                <div class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                                    <span> Utility</span>
                                                </div>
                                                <!-- single menu item* -->



                                                <a href=invoice.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Invoice
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=pricing.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Pricing
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=faq.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            FAQ
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=blank-page.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Blank page
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=blog.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Blog
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=404.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            404 page
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=comming-soon.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Coming Soon
                                                        </span>
                                                    </div>

                                                </a>



                                                <a href=under-maintanance.html>

                                                    <div class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                                        <span class="capitalize text-slate-600 dark:text-slate-300">
                                                            Under Maintanance page
                                                        </span>
                                                    </div>

                                                </a>

                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <li class="
             menu-item-has-children 
              ">
                                    <!--  Single menu -->

                                    <!-- has dropdown -->



                                    <a href="javascript:void()">
                                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                            <span class="icon-box">
                                                <iconify-icon icon=heroicons-outline:view-grid-add> </iconify-icon>
                                            </span>
                                            <div class="text-box">Widgets</div>
                                        </div>
                                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                        </div>
                                    </a>

                                    <!-- Dropdown menu -->



                                    <ul class="sub-menu">



                                        <li>
                                            <a href=basic-widgets.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Basic
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=statistics-widgets.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:document-text class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Statistic
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                    <!-- Megamenu -->


                                </li>

                                <li class="
             menu-item-has-children 
              ">
                                    <!--  Single menu -->

                                    <!-- has dropdown -->



                                    <a href="javascript:void()">
                                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                            <span class="icon-box">
                                                <iconify-icon icon=heroicons-outline:template> </iconify-icon>
                                            </span>
                                            <div class="text-box">Extra</div>
                                        </div>
                                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                        </div>
                                    </a>

                                    <!-- Dropdown menu -->



                                    <ul class="sub-menu">



                                        <li>
                                            <a href=basic-table.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Basic Table
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=advance-table.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:table class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Advanced table
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=apex-chart.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Apex chart
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=chartjs.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:chart-bar class="leading-[1] text-base">
                                                    </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Chart js
                                                    </span>
                                                </div>
                                            </a>
                                        </li>



                                        <li>
                                            <a href=map.html>
                                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                    <iconify-icon icon=heroicons-outline:map class="leading-[1] text-base"> </iconify-icon>
                                                    <span class="leading-[1]">
                                                        Map
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                    <!-- Megamenu -->


                                </li>

                            </ul>
                        </div>
                        <!-- end top menu -->
                        <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                            <!-- BEGIN: Language Dropdown  -->

                            <div class="relative">
                                <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
            inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <iconify-icon icon="circle-flags:uk" class="mr-0 md:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                                    <span class="text-sm md:block hidden font-medium text-slate-600 dark:text-slate-300">
                                        En</span>
                                </button>
                                <!-- Language Dropdown menu -->
                                <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-900 !top-[25px] rounded-md
            overflow-hidden">
                                    <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                        <li>
                                            <a href="#" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                <iconify-icon icon="circle-flags:uk" class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                                                <span class="font-medium">ENG</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                <iconify-icon icon="emojione:flag-for-germany" class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                                                <span class="font-medium">GER</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Theme Changer -->
                            <!-- END: Language Dropdown -->

                            <!-- BEGIN: Toggle Theme -->
                            <div>
                                <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                                </button>
                            </div>
                            <!-- END: TOggle Theme -->

                            <!-- BEGIN: gray-scale Dropdown -->
                            <div>
                                <button id="grayScale" class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
            rounded-full text-[20px] flex flex-col items-center justify-center">
                                    <iconify-icon class="text-slate-800 dark:text-white text-xl" icon="mdi:paint-outline"></iconify-icon>
                                </button>
                            </div>
                            <!-- END: gray-scale Dropdown -->

                            <!-- BEGIN: Message Dropdown -->
                            <!-- Mail Dropdown -->
                            <div class="relative md:block hidden">
                                <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <iconify-icon class="text-slate-800 dark:text-white text-xl" icon="heroicons-outline:mail"></iconify-icon>
                                    <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[45]">
                                        10</span>
                                </button>
                                <!-- Mail Dropdown -->
                                <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-700 shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                                    <div class="flex items-center justify-between py-4 px-4">
                                        <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Messages</h3>
                                        <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See
                                            All</a>
                                    </div>
                                    <div class="divide-y divide-slate-100 dark:divide-slate-700" role="none">
                                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                                <div class="flex-none">
                                                    <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                                        <span class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                                        <img src="/assets-backend/images/all-img/user.png" alt="user" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                                        Wade Warren</a>
                                                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Hi! How
                                                        are you doing?.....</div>
                                                    <div class="text-slate-400 dark:text-slate-400 text-xs">
                                                        3 min ago</div>
                                                </div>
                                                <div class="flex-0">
                                                    <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                                                        1</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
                                            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                                <div class="flex-none">
                                                    <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                                        <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                                        <img src="/assets-backend/images/all-img/user2.png" alt="user" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                                        Savannah Nguyen</a>
                                                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Hi! How
                                                        are you doing?.....</div>
                                                    <div class="text-slate-400 dark:text-slate-400 text-xs">3 min ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
                                            <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                                <div class="flex-none">
                                                    <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                                        <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                                        <img src="/assets-backend/images/all-img/user3.png" alt="user" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                                        Ralph Edwards</a>
                                                    <div class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">Hi! How
                                                        are you doing?.....</div>
                                                    <div class="text-slate-400 dark:text-slate-400 text-xs">
                                                        3 min ago
                                                    </div>
                                                </div>
                                                <div class="flex-0">
                                                    <span class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                                                        8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Message Dropdown -->

                            <!-- BEGIN: Notification Dropdown -->
                            <!-- Notifications Dropdown area -->
                            <div class="relative md:block hidden">
                                <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl" icon="heroicons-outline:bell"></iconify-icon>
                                    <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[99]">
                                        4</span>
                                </button>
                                <!-- Notifications Dropdown -->
                                <div class="dropdown-menu z-10 hidden bg-white shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                                    <div class="flex items-center justify-between py-4 px-4">
                                        <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Notifications</h3>
                                        <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See
                                            All</a>
                                    </div>
                                    <div class="" role="none">
                                        <div class="bg-slate-100 dark:bg-slate-700 dark:bg-opacity-70 text-slate-800 block w-full px-4 py-2 text-sm relative">
                                            <div class="flex ltr:text-left rtl:text-right">
                                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-white rounded-full">
                                                        <img src="/assets-backend/images/all-img/user.png" alt="user" class="border-white block w-full h-full object-cover rounded-full border">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                                        Your order is placed</a>
                                                    <div class="text-slate-500 dark:text-slate-200 text-xs leading-4">Amet minim mollit non
                                                        deser unt ullamco est sit
                                                        aliqua.</div>
                                                    <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                                        3 min ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                            <div class="flex ltr:text-left rtl:text-right relative">
                                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-white rounded-full">
                                                        <img src="/assets-backend/images/all-img/user2.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                                        Congratulations Darlene 🎉</a>
                                                    <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best
                                                        seller badge</div>
                                                    3 min ago
                                                </div>
                                            </div>
                                            <div class="flex-0">
                                                <span class="h-[10px] w-[10px] bg-danger-500 border border-white dark:border-slate-400 rounded-full inline-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                        <div class="flex ltr:text-left rtl:text-right relative">
                                            <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                <div class="h-8 w-8 bg-white rounded-full">
                                                    <img src="/assets-backend/images/all-img/user3.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                                                    Revised Order 👋</a>
                                                <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best seller
                                                    badge</div>
                                                <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">3 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                        <div class="flex ltr:text-left rtl:text-right relative">
                                            <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                <div class="h-8 w-8 bg-white rounded-full">
                                                    <img src="/assets-backend/images/all-img/user4.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                                                    Brooklyn Simmons</a>
                                                <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Added you to Top Secret
                                                    Project group...</div>
                                                <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                                    3 min ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification Dropdown -->

                            <!-- BEGIN: Profile Dropdown -->
                            <!-- Profile DropDown Area -->
                            <div class="md:block hidden w-full">
                                <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
      inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                                        <img src="assets-backend/images/all-img/user.png" alt="user" class="block w-full h-full object-cover rounded-full">
                                    </div>
                                    <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">
                                        {{ Auth::user()->name}}
                                    </span>
                                    <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
      overflow-hidden">
                                    <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                        <li>
                                            <a href="index.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:user" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:chat" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Chat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:mail" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Email</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="todo.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:clipboard-check" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Todo</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="settings.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:cog" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pricing.html" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:credit-card" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Price</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                                <iconify-icon icon="heroicons-outline:login" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                <span class="font-Inter">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: Header -->
                            <button class="smallDeviceMenuController md:hidden block leading-0">
                                <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                            </button>
                            <!-- end mobile menu -->
                        </div>
                        <!-- end nav tools -->
                    </div>
                </div>
            </div>

            <!-- BEGIN: Search Modal -->
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
                        <form>
                            <div class="relative">
                                <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                                <button class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-l text-xl border-l-slate-200 dark:border-l-slate-600 dark:text-slate-300 flex items-center justify-center">
                                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Search Modal -->
            <!-- END: Header -->
            <!-- END: Header -->
            <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <div id="content_layout">

                            <div>
                                <div class="flex justify-between flex-wrap items-center mb-6">
                                    <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
                                        Dashboard</h4>
                                    <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
                                        <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                                            <span class="flex items-center">
                                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:calendar"></iconify-icon>
                                                <span>Weekly</span>
                                            </span>
                                        </button>
                                        <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                                            <span class="flex items-center">
                                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:filter"></iconify-icon>
                                                <span>Select Date</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-5 mb-5">
                                    <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
                                        <div class="bg-no-repeat bg-cover bg-center p-4 rounded-[6px] relative" style="background-image: url(assets-backend/images/all-img/widget-bg-1.png)">
                                            <div class="max-w-[180px]">
                                                <div class="text-xl font-medium text-slate-900 mb-2">
                                                    Upgrade your Dashcode
                                                </div>
                                                <p class="text-sm text-slate-800">
                                                    Pro plan for better results
                                                </p>
                                            </div>
                                            <div class="absolute top-1/2 -translate-y-1/2 ltr:right-6 rtl:left-6 mt-2 h-12 w-12 bg-white rounded-full text-xs font-medium
                            flex flex-col items-center justify-center">
                                                Now
                                            </div>
                                        </div>
                                    </div>
                                    <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                                        <div class="p-4 card">
                                            <div class="grid md:grid-cols-3 col-span-1 gap-4">

                                                <!-- BEGIN: Group Chart2 -->


                                                <div class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline1"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Totel revenue
                                                            </div>
                                                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                                3,564
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-[18px] px-4 rounded-[6px] bg-[#FFEDE5] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline2"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Products sold
                                                            </div>
                                                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                                564
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-[18px] px-4 rounded-[6px] bg-[#EAE5FF] dark:bg-slate-900	 ">
                                                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div id="wline3"></div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                                                Growth
                                                            </div>
                                                            <div class="text-slate-900 dark:text-white text-lg font-medium">
                                                                +5.0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- END: Group Chart2 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="lg:col-span-8 col-span-12">
                                        <div class="card">
                                            <div class="card-body p-6">
                                                <div class="legend-ring">
                                                    <div id="revenue-barchart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card">
                                            <header class="card-header">
                                                <h4 class="card-title">Overview</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </header>
                                            <div class="card-body p-6">
                                                <div id="radial-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-8 col-span-12">
                                        <div class="card">
                                            <header class="card-header noborder">
                                                <h4 class="card-title">All Company</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </header>
                                            <div class="card-body p-6">

                                                <!-- BEGIN: Company Table -->


                                                <div class="overflow-x-auto -mx-6">
                                                    <div class="inline-block min-w-full align-middle">
                                                        <div class="overflow-hidden ">
                                                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                                <thead class="  bg-slate-200 dark:bg-slate-700">
                                                                    <tr>

                                                                        <th scope="col" class=" table-th ">
                                                                            Company
                                                                        </th>

                                                                        <th scope="col" class=" table-th ">
                                                                            Category
                                                                        </th>

                                                                        <th scope="col" class=" table-th ">
                                                                            Sales
                                                                        </th>

                                                                        <th scope="col" class=" table-th ">
                                                                            Views
                                                                        </th>

                                                                        <th scope="col" class=" table-th ">
                                                                            revenue
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    95%</span>
                                                                                <span class=" text-xl  text-danger-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">343</td>
                                                                        <td class="table-td ">$231.26</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    197%</span>
                                                                                <span class=" text-xl  text-success-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">315</td>
                                                                        <td class="table-td ">$432.81</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    137%</span>
                                                                                <span class=" text-xl  text-success-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">329</td>
                                                                        <td class="table-td ">$437.65</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    101%</span>
                                                                                <span class=" text-xl  text-success-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">336</td>
                                                                        <td class="table-td ">$387.55</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-5.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    99%</span>
                                                                                <span class=" text-xl  text-danger-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">375</td>
                                                                        <td class="table-td ">$489.80</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="table-td">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-none">
                                                                                    <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                                                        <img src=assets-backend/images/users/user-6.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-1 text-start">
                                                                                    <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                        Biffco Enterprises Ltd.
                                                                                    </h4>
                                                                                    <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                                                                        Biffco@example.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td">Technology</td>
                                                                        <td class="table-td ">
                                                                            <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                                                                <span>
                                                                                    101%</span>
                                                                                <span class=" text-xl  text-success-500 ">

                                                                                    <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>

                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table-td ">490</td>
                                                                        <td class="table-td ">$421.45</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Company Table -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <h4 class="card-title">Recent Activity</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </div>
                                            <div class="card-body p-6">

                                                <!-- BEGIN: Activity Card -->

                                                <div>
                                                    <ul class="list-item space-y-3 h-full overflow-x-auto">



                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-5.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-6.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <li class="flex items-center space-x-3 rtl:space-x-reverse border-b border-slate-100 dark:border-slate-700 last:border-b-0 pb-3 last:pb-0">
                                                            <div>
                                                                <div class="w-8 h-8 rounded-[100%]">
                                                                    <img src=assets-backend/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                                                </div>
                                                            </div>
                                                            <div class="text-start overflow-hidden text-ellipsis whitespace-nowrap max-w-[63%]">
                                                                <div class="text-sm text-slate-600 dark:text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                    Finance KPI Mobile app launch preparion meeting.
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 ltr:text-right rtl:text-left">
                                                                <div class="text-sm font-light text-slate-400 dark:text-slate-400">
                                                                    1 hours
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- END: Activity Card -->



                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-8 col-span-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Most Sales</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </div>
                                            <div class="card-body p-6">

                                                <!-- BEGIN: Most Sale -->



                                                <div class="md:flex items-center">
                                                    <div class="grow-0">
                                                        <h4 class="text-slate-600 dark:text-slate-200 text-sm font-normal mb-[6px]">
                                                            Total earnings
                                                        </h4>

                                                        <div class="text-lg font-medium mb-[6px] dark:text-white text-slate-900">
                                                            $12,65,64787.00
                                                        </div>


                                                        <div class="text-xs font-light dark:text-slate-200">
                                                            <span class="text-primary-500">+08%</span> From last month
                                                        </div>
                                                        <ul class="bg-slate-50 dark:bg-slate-900 rounded p-4 min-w-[184px] space-y-5 mt-4">



                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-primary-500 ring-primary-500
                        "></span>
                                                                    <span>Nevada</span>
                                                                </span>
                                                                <span>$125k</span>
                                                            </li>


                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-success-500 ring-success-500
                        "></span>
                                                                    <span>Colorado</span>
                                                                </span>
                                                                <span>$$325k</span>
                                                            </li>


                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-info-500 ring-info-500
                        "></span>
                                                                    <span>Iowa</span>
                                                                </span>
                                                                <span>$67</span>
                                                            </li>


                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-warning-500 ring-warning-500
                        "></span>
                                                                    <span>Arkansas</span>
                                                                </span>
                                                                <span>$354k</span>
                                                            </li>


                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-success-500 ring-success-500
                        "></span>
                                                                    <span>Wyoming</span>
                                                                </span>
                                                                <span>$195k</span>
                                                            </li>


                                                            <li class="flex justify-between text-xs text-slate-600 dark:text-slate-300">
                                                                <span class="flex space-x-2 rtl:space-x-reverse items-center">
                                                                    <span class="inline-flex h-[6px] w-[6px] bg-primary-500 ring-opacity-25 rounded-full ring-4
                        bg-secondary-500 ring-secondary-500
                        "></span>
                                                                    <span>Other countries</span>
                                                                </span>
                                                                <span>$295k</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=" grow">
                                                        <div class="h-[360px] w-full bg-white dark:bg-slate-800 ltr:pl-10 rtl:pr-10">
                                                            <div id="world-map" class="h-full w-full"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END: Most Sale -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-4 col-span-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Overview</h4>
                                                <div>
                                                    <!-- BEGIN: Card Dropdown -->
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                                                                    <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                                                </span>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last 28 Days</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Month</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                                                        Last Year</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END: Card Droopdown -->
                                                </div>
                                            </div>
                                            <div class="card-body p-6">
                                                <div id="radar-home-chart"></div>
                                                <div class="bg-slate-50 dark:bg-slate-900 rounded p-4 mt-8 flex justify-between flex-wrap">
                                                    <div class="space-y-1">
                                                        <h4 class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
                                                        </div>
                                                        <div class="text-slate-500 dark:text-slate-300 text-xs font-normal">
                                                            +0.001.23 (0.2%)
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1">
                                                        <h4 class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1">
                                                        <h4 class="text-slate-600 dark:text-slate-200 text-xs font-normal">
                                                            Invested amount
                                                        </h4>
                                                        <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                            $8264.35
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
            </div>
        </div>

        <!-- BEGIN: Footer For Desktop and tab -->
        <footer class="md:block hidden" id="footer">
            <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                    <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                        COPYRIGHT ©
                        <span id="thisYear"></span>
                        DashCode, All rights Reserved
                    </div>
                    <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                        Hand-crafted &amp; Made by
                        <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                            Codeshaper
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer For Desktop and tab -->

        <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
            <a href="chat.html">
                <div>
                    <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                        <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
                        <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                            10
                        </span>
                    </span>
                    <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                        Messages
                    </span>
                </div>
            </a>
            <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                    <img src="assets-backend/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
                </div>
            </a>
            <a href="#">
                <div>
                    <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                        <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                            2
                        </span>
                    </span>
                    <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                        Notifications
                    </span>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection