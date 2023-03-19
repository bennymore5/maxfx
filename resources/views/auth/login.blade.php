@extends('layouts.customlayout')
@section('body')





                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">
                        <h2 id="login-title" class="f-20">Enter your email and password below</h2>
<!-- Form -->
<form action="{{route("login")}}" id="loginForm" method="post" accept-charset="utf-8">
@csrf
<div class="email-pass">
<div class="errorClass">
<label class="error" id="overallError"></label>
</div>
<!-- Form Group -->
<div class="form-group">
<label class="sr-only" for="email-1">Email Address</label>
<input type="email" value="" id="email" class="form-control" @error('email') is-invalid @enderror name="email"
value="{{ old('email') }}" required autocomplete="email" autofocus
aria-describedby="email-1" placeholder="Email" >
@error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

</div>
<!-- /form group -->

<!-- Form Group -->
<div class="form-group">
<!--<label class="sr-only" for="password-1">Password</label>-->
<input type="password" class="form-control" type="password"
class="form-control @error('password') is-invalid @enderror" name="password"
required autocomplete="current-password">
@error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
<input class="btn" type="button" id="showPassword" value="Show Password"/>
</div>
<!-- /form group -->

<!-- Form Group -->
<!--<div class="mb-2">-->
<!--    <input class="btn" type="button" id="ShowPassword" value="Show"/>-->

<!--</div>-->
<!-- /form group -->

<!-- Form Group -->
<div class="mb-2">
<checkbox class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
<input type="checkbox" name="stay_logged_in" id="checkbox-1" value="agree" class="checkbox-check ng-pristine ng-valid ng-touched">
<label class="font-weight-light dt-checkbox-content" for="checkbox-1">
<span class="unchecked">
<i name="box-o" size="xl" class="icon icon-box-o icon-xl icon-fw"></i>
</span>
<span class="checked ng-star-inserted">
<i name="box-check-o" size="xl" class="text-primary icon icon-box-check-o icon-xl icon-fw"></i>
</span>
</label>
Keep me logged in on this device                                </checkbox>
</div>
<!-- /form group -->

<!-- /form group -->
</div>
<div class="hide" id="google-auth">
<!-- Form Group -->
<div class="form-group">
<div id="divOuter" class="">
<div id="divInner">
<input id="partitioned" class="" name="token" type="text" maxlength="6" />
<label class="error google-auth-err"></label>
</div>
</div>
</div>
</div>

<!-- Form Group -->
<div class="form-group">
<button type="button" id="confirm-user-pass" class="btn btn-info text-uppercase" data-loading-text="Processing data" data-title="Login">Login</button>
<button type="button" id="authenticate" class="hide btn btn-info text-uppercase">Login</button>
<span class="d-inline-block ml-4 text-uppercase">Or                                <a class="d-inline-block font-weight-500 ml-3 text-capitalize"
href="{{route("register")}}">Create Account</a>
</span>
</div>
<!-- /form group -->
</form>                        <!-- /form -->

</div>
<!-- /login content inner -->



    {{-- <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('https://reefresources-fm.comcom/assets/images/70.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Log In</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <!--Header section end-->


        <!--login section start-->
        <section class="circle-section section-padding section-background">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="login-admin login-admin1">
                            <div class="login-header text-center">
                                <h6>Login Form</h6>
                            </div>


                            <div class="login-form">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <input value="Login" type="submit">

                                    <div class="form-group">
                                        <div class="cols-sm-10 cols-sm-offset-2">
                                            <div class="col-sm-12 text-center">
                                                <a class="btn btn-link" href="{{route('password.request')}}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div> --}}

@endsection


