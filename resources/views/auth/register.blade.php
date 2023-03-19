@extends('layouts.customlayout')

@section('body')







                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">
                        <div class="col-md-12">
                                                                                                            </div>
                        <h2 class="f-20 text-capitalize">Create Account</h2>
                        <!-- Form -->
                        <form action="{{route('register')}}" id="registerForm" method="post" accept-charset="utf-8">
                            @csrf                                                                                            
                          <div class="row">
                            
                            
                            
                            <div class="col-md-12">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="f-name">Name</label>
                                <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Enter Name" value="{{ old('name') }}" required
                                autocomplete="name" autofocus>
                                    <label class="error" id="firstname">
                                        @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </label>
                            </div>
                            <!-- /form group -->
                            </div>

                            {{-- <div class="col-md-6">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="l-name">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="l-name"
                                    aria-describedby="l-name" placeholder="Last Name" value="">
                                    <label class="error" id="lastname"></label>
                            </div>
                            <!-- /form group -->
                            </div> --}}
                          </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1">Email Address</label>
                                <input id="email" type="email" 
                                class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                                value="{{ old('email') }}" required autocomplete="email" id="email" >

                                    <label class="error" id="email">
                                        @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </label>
                                    @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                            </div>
                            <!-- /form group -->

                            <div class="row">
                              <div class="col-md-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="password-1">Password</label>
                                    <input  id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password" >
                                    <label class="error" id="password">

                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    </label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <!-- /form group -->
                              </div>
                              <div class="col-md-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="password-2">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                                    placeholder="Confirm Password" name="password_confirmation" required
                                                    autocomplete="new-password">
                                    <label class="error" id="cpassword">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </label>
                                </div>
                                <!-- /form group -->
                              </div>
                              <div class="col-md-12">
                              <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="ref">Referral Code</label>
                                <input type="text" class="form-control" type="text" readonly name="refid" id="refid" value="@php
                                if (isset($_GET['refid'])) {
                                    echo $_GET['refid'];
                                }
                            @endphp"
                                    placeholder="Reference ID" >
                            </div>
                            <!-- /form group -->
                            </div>
                            </div>
                            <!-- Form Group -->
                            <div>
                                <checkbox class="dt-checkbox dt-checkbox-icon dt-checkbox-only" style="margin-bottom: 20px;">
                                    <input type="checkbox" name="accept_terms" id="accept_terms" value="agree" class="checkbox-check ng-pristine ng-valid ng-touched" style="width: 20%;">
                                    <label class="font-weight-light dt-checkbox-content" for="accept_terms">
                                        <span class="unchecked">
                                            <i name="box-o" size="xl" class="icon icon-box-o icon-xl icon-fw"></i>
                                        </span>
                                        <span class="checked ng-star-inserted">
                                            <i name="box-check-o" size="xl" class="text-primary icon icon-box-check-o icon-xl icon-fw"></i>
                                        </span>
                                    </label>
                                    I agree to <a target="_blank" href="{{route("index")}}" class="checkbox-link text-capitalize">Privacy Policy</a> & 
                                  <a target="_blank" href="{{route("terms")}}" class="checkbox-link text-capitalize">Terms of Service</a>
                                </checkbox>
                                <label class="error red" id="terms" for="password"></label>
                            </div>
                            <!-- /form group -->

                            
                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-info text-uppercase" data-loading-text="Processing data" data-title="Create Account">Create Account</button>
                                <span class="d-inline-block ml-4 text-uppercase">Or                                    <a class="d-inline-block font-weight-500 ml-3 text-capitalize"
                                        href="{{route("login")}}">Login</a>
                                </span>
                            </div>
                            <!-- /form group -->
                        </form>                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->





    {{-- <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/70.html')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Register</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <!--Header section end-->

        <!--login section start-->
        <div class="login-section section-padding login-bg">
            <div class="container">

                <div class="login-admin login-admin1">
                    <div class="login-header text-center">
                        <h6>Register Form</h6>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" readonly name="refid" id="refid" value="@php
                                    if (isset($_GET['refid'])) {
                                        echo $_GET['refid'];
                                    }
                                @endphp"
                                        placeholder="Reference ID" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="username" id="username" required
                                        placeholder="Enter your Username" />
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Enter Name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="email" 
                                                class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                                                value="{{ old('email') }}" required autocomplete="email" id="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="phone" class="form-control" type="phone"
                                    placeholder="Phone Number" class="form-control" name="phone" required
                                    autocomplete="phone">
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                                    placeholder="Confirm Password" name="password_confirmation" required
                                                    autocomplete="new-password">
                                </div>
                            </div>

                            <!--ID-->


                            <hr>
                            <br>



                            <div class="form-group">
                                <div class="cols-sm-10">
                                    <div data-sitekey="6Lde--IbAAAAAFosLmTWjmlBTWkbbnD7oc_FOjDB" class="g-recaptcha"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input value="Register" type="submit">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="text-center" style="text-transform: uppercase;">
                        <br><br>
                        <a href="password/reset.html">Forgot Password</a> | <a href="{{route('login')}}">Login</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login section end-->

    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div> --}}

@endsection

