@extends('backend.layouts.main')

@section('head')
<title>Login</title>
@endsection


@section('content')
<div class="loginwrapper bg-cover bg-no-repeat bg-center" style="background-image: url(/images/1.jpeg);">
  <div class="lg-inner-column">
    <div class="left-columns lg:w-1/2 lg:block hidden">
      <div class="logo-box-3">
        <a heref="index.html" class="">
          <img src="assets-backend/images/logo/logo-white.svg" alt="">
        </a>
      </div>
    </div>
    <div class="lg:w-1/2 w-full flex flex-col items-center justify-center">
      <div class="auth-box-3">
        <div class="mobile-logo text-center mb-6 lg:hidden block">
          <a heref="index.html">
            <img src="assets-backend/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
            <img src="assets-backend/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
          </a>
        </div>
        <div class="text-center 2xl:mb-10 mb-5">
          <h4 class="font-medium">Acceder</h4>
          <div class="text-slate-500 dark:text-slate-400 text-base">
            Inicie sesión
          </div>
        </div>
        <!-- BEGIN: Login Form -->
        <form class="p-6" action="{{ route('login.post') }}" method="POST">
          @csrf
          <div class="fromGroup">
            <label class="block capitalize form-label">email</label>
            <div class="relative ">
              <input type="email" id="email_address" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Tu correo" name="email" required autofocus>
            </div>
          </div>
          <div class="fromGroup       ">
            <label class="block capitalize form-label  ">passwrod</label>
            <input type="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Contraceña" name="password" required>
          </div>
          <div class="flex justify-between">
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="hiddens">
              <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize">Keep me signed in</span>
            </label>
            <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="forget-password-one.html">Forgot
              Password?
            </a>
          </div>
          <button class="btn btn-dark block w-full text-center">Sign in</button>
        </form>
        <!-- END: Login Form -->
        <div class=" relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
          <div class=" absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                px-4 min-w-max text-sm text-slate-500 dark:text-slate-400font-normal ">
            Or continue with
          </div>
        </div>
        <div class="max-w-[242px] mx-auto mt-8 w-full">

          <!-- BEGIN: Social Log in Area -->
          <ul class="flex">
            <li class="flex-1">
              <a href="#" class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                <img src="assets-backend/images/icon/tw.svg" alt="">
              </a>
            </li>
            <li class="flex-1">
              <a href="#" class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                <img src="assets-backend/images/icon/fb.svg" alt="">
              </a>
            </li>
            <li class="flex-1">
              <a href="#" class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                <img src="assets-backend/images/icon/in.svg" alt="">
              </a>
            </li>
            <li class="flex-1">
              <a href="#" class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                <img src="assets-backend/images/icon/gp.svg" alt="">
              </a>
            </li>
          </ul>
          <!-- END: Social Log In Area -->
        </div>
        <div class="mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-6 uppercase text-sm text-center">
          Already registered?
          <a href="signup-one.html" class="text-slate-900 dark:text-white font-medium hover:underline">
            Sign In
          </a>
        </div>
      </div>
    </div>
    <div class="auth-footer3 text-black py-5 px-5 text-xl w-full">
      Sindicato de Transporte Guayaramerin
    </div>
  </div>
</div>

@endsection