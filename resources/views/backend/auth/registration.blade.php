@extends('backend.layouts.auth.auth')

@section('head')
<title>Registro</title>
@endsection


@section('content')

<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-slate-900 rounded-t">
            <a href="index.html">
                <lord-icon src="assets-admin/json/iglesi.json" trigger="hover" colors="primary:#ffffff,secondary:#107c91" style="width:60px;height:60px">
                </lord-icon>
            </a>
            <h3 class="font-semibold text-white text-xl mb-1">Campamento Emanuel</h3>
            <p class="text-xs text-slate-400">Regitrate para continuar.</p>
        </div>

        <form class="p-6" action="{{ route('register.post') }}" method="POST">
            @csrf
            <div>
                <label for="User_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Username</label>
                <input type="text" id="name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Enter Username" name="name" required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mt-2">

                <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                <input type="email" id="email_address" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Enter Email" name="email" required autofocus>

                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}
                    <div class="p-3 mb-4 text-sm text-red-700 border border-dashed border-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                    </div>
                </span>
                @endif
            </div>

            <div class="mt-2">
                <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your password</label>
                <input type="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Enter Password" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mt-2">
                <label for="Confirm_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Confirm Password</label>
                <input type="password" id="Confirm_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Enter Confirm Password" required>
                <span id="passwordMatchError" class="text-danger"></span>
            </div>

            <div class="block mt-3">
                <label class="custom-label block dark:text-slate-300">
                    <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                        <input type="checkbox" class="hidden">
                        <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-200"></i>
                    </div>
                    By registering you agree to the Robotech Terms of Use
                </label>
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded-md hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                    Register
                </button>
            </div>
        </form>

        <p class="mb-5 text-sm font-medium text-center text-slate-500"> Ya tienes cuenta ? <a href="{{ route('login') }}" class="font-medium text-brand-500 hover:underline">Acceder</a>
        </p>
    </div>
</div>
@endsection