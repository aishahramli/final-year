@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-4">
            <div class="card-body p-4">
                
                <!-- Tukar nama title -->
                <!-- <h1>{{ trans('panel.site_title') }}</h1> -->
                <h1>Facility Booking System</h1>

                <p>{{ trans('global.login') }}</p>

                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> 
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        
                        <!-- Masukkan email -->
                        
                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
<p>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
</p>
                    </div>
                    
                    <!-- Maukkan password -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                        <!-- Login button -->
                        
                    <!-- <div class="row">
                        <div class="col-4"> -->
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-5">
                            <p class="w3-center">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ trans('global.login') }}
                            </button>
                            
                            </p>
                        </div>
                        </div>

<!-- <div class="w3-row">
      <div class="w3-half">
        <h2>Contact here</h2>
        <p>smkbbbooking@gmail.com</p> -->
        <!-- <p>03-31256941</p>
      </div> -->
      <!-- <div class="w3-half">
        <h2>Where</h2>
        <p>Some place, an address</p>
        <p>Some where, some address</p>
      </div> -->
                
                    <!-- <div class="row">
                        <div class="col-4"> -->
                    <div class="input-group mb-4">
                        <div class="form-check checkbox">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                {{ trans('global.remember_me') }}
                            </label>
                        </div>

                    </div>

                    <!-- <div class="row"> -->
                        
                        
                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-5">
                            <p class="w3-center"> -->
                            <!-- <button type="submit" class="btn btn-primary px-4">
                                {{ trans('global.login') }}
                            </button> -->




                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                    <a class="btn btn-danger" href="{{ url('/') }}" role="button">Cancel</a>
                                     </div>
                                    <div class="col-sm">
                                    @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif
                                    </div>
                            
                                 </div>
                            </div>
                            <!-- <div class="col-11 text-left">
                            <p><p>
                            <a class="btn btn-danger" href="{{ url('/') }}" role="button">Cancel</a>
                            
                            </p>
                        </div>
                        </div> 


                       
                               
                        <div class="col-11 text-right">
                           
                            @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif
</p>
                            
</div>
                        </div>
                    </div> -->
                    
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection