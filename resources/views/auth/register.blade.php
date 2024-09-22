
@extends('app')

@section('register')
<div class="container mt-8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
                <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                    <div class="text-center">
                        <a href="#" class="btn btn-neutral btn-icon mr-4">
                            <span class="btn-inner--icon"><img src="img/icons/common/github.svg"></span>
                            <span class="btn-inner--text">Github</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="img/icons/common/google.svg"></span>
                            <span class="btn-inner--text">Google</span>
                        </a>
                    </div>
                </div>
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small>Or sign up with credentials</small>
                </div>
                <form method="POST" action="{{route('register')}}">@csrf
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Name" :value="old('name')" required autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-12">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button  class="btn btn-primary mt-4"> {{ __('Register') }}</button>
                       
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

