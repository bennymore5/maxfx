@extends('layouts.spacedcustomlayout')
@section('body')




            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/sl2.jpg')}}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Professionals, when it comes</p>
                            <h1 class="animated fadeInLeft" style="background-color:#f2bd1b;padding:8px;">TO YOUR INVESTMENT</h1>
                            <a class="btn animated fadeInUp" href="{{route('register')}}">GET STARTED NOW!</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('img/ki5.jpg')}}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Your ROI is quantified and</p>
                            <h1 class="animated fadeInLeft" style="background-color:#ffffff;padding:8px;color:#000425;">CAN BE TRACKED</h1>
                            <a class="btn animated fadeInUp" href="login">ACCESS MY ACCOUNT</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('img/ki3.jpg')}}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft" style="background-color:#ffffff;padding:8px;color:#000425;">YOUR INVESTMENT IS SAFE</h1>
                            <a class="btn animated fadeInUp"href="https://find-and-update.company-information.service.gov.uk/company/13115652" target="_blank">Verify Certificate</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->

            <div style="">
                <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>            </div>
            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Instant Payment</h3>
                                    <p>All payments are processed instantly. Our system is fully automated which will process your withdrawal request instantly. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Professional team</h3>
                                    <p>Our team of experts have developed an automatic system that will allow you to make profit handsomely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>24/7 Support</h3>
     <p>Our live chat support is online 24 hours every day and the team is ready to give you any kind of support. Our helpline is available 8:00am - 5pm GMT.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{asset('img/bn-bg3.png')}}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>WHO WE ARE</p>
                                <h2>COMPANY SERVICE WE OFFER</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    {{$company_features? $company_features->companyname:"No company name set"}}  management to maximize your returns on investment. We help you make the most out of your assets. {{$company_features? $company_features->companyname:"No company name set"}}  is a global crypto finance solution for all the crypto enthusiasts who are in search of the trusted, secure and reliable platform.
                                </p>
                                <!--<p>-->
                                <!--   <h1>-</h1> SIMPLE AND AFFORDABLE-->
                                <!--</p>-->
                                <!--<p>-->
                                <!--   <h1>-</h1> ASSET MANAGEMENT-->
                                <!--</p>-->
                                <a class="btn" href="about-us.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            



             <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s" style="background-image: url('{{asset('img/row-bgimage-11.jpg')}}'); background-size:cover;">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>LICENCES CERTIFICATE</p>
                                <h2>BANK LEVEL SECURITY</h2>
                            </div>
                            <div class="about-text">
                                <div class="section-header text-left">
                                    <p>COMPANY NAME</p>
                                    <h2>CRYPTOCURRENCY INVESTMENT LIMITED - {{$company_features? $company_features->companyname:"No company name set"}}</h2>
                                </div>

                                <div class="section-header text-left">
                                    <p>COMPANY NUMBER</p>
                                    <h2>13115652</h2>
                                </div>


                                <!-- <div class="section-header text-left">-->
                                <!--    <p>DATE INCORPORATED</p>-->
                                <!--    <h2>01-03-2021</h2>-->
                                <!--</div>-->

                                <!-- <div class="section-header text-left">-->
                                <!--    <p>DATE CERTIFICATE ISSUED</p>-->
                                <!--    <h2>01-06-2021</h2>-->
                                <!--</div>-->

                               
                            <a class="btn" href="{{asset('img/bitrally%20certificate%20of%20incorporation.pdf')}}" target="_blank">VIEW COMPANY CERTIFICATE</a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <br /><br />
                                <img src="{{asset('img/bitrally%20certificate%20of%20incorporation.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->








            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-left">
                        <p>The benefits of cooperation with</p>
                        <h2>{{$company_features? $company_features->companyname:"No company name set"}} </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>ASSET MANAGEMENT</h2>
                                    <p>Get up to 29% in passive mode by investing funds, as well as develop your skills as {{$company_features? $company_features->companyname:"No company name set"}}.top.</p>
                                </div>
                                
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>MAXIMUM TRANSPARENCY</h2>
                                    <p>The company provides weekly reports on all transactions with Golden, as well as trade forecasts for the future.</p>
                                </div>
                                
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>SIMPLE AND AFFORDABLE</h2>
                                    <p>Invest, starting from $50 with professional traders. To do this, you do not need knowledge or experience of the trading.</p>
                                </div>
                                
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>AFFILIATE PROGRAM</h2>
                                    <p>Develop your own team to generate income without investment. Thanks to a multilevel bonus system.</p>
                                </div>
                                
                            </div>
                        </div>



                       
                       
                    </div>
                </div>
            </div>
            <!-- Team End -->
            


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-left">
                        <p>GET STARTED</p>
                        <h2>OUR INVESTMENT PLANS</h2>
                    </div>
                    <div class="row">
                        @if ($investmentplans)

                        @foreach ($investmentplans as $plan)



                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{asset('img/signup.jpg')}}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>{{$plan->name}}</h3>
                                    <!-- <a class="btn" href="">+</a> -->
                                </div>
                                <div class="blog-meta">
                                    <h1 style="">{{$plan->percentage}}%</h1>
                                    <p>Guaranteed ROI After <a href="#">24 Hours</a></p>
                                </div>
                                <div class="blog-text text-left">
                                    <br />
                                    <p>
                                    <strong> Min Deposit:  </strong>  <strong style="float:right;color:#182434;">${{$plan->minimum}}</strong><hr />
                                    <strong> Max Deposit:  </strong>  <strong style="float:right;color:#182434;">${{$plan->maximum}}</strong><hr />
                                    <strong> Referral Bonus:  </strong>  <strong style="color:#ff9f13;">{{$plan->refpercent}}%</strong>
                                    </p>
                                </div>


                                <div class="blog-text text-center">
                                    <p>
                                    <a href="login" style="border: 3px solid #030f27;padding:10px;"><b>INVEST NOW!</b></a>
                                    </p>
                                    <br />
                                </div>


                            </div>
                        </div>


                            
                        @endforeach
                            
                        @else

                        <h3>No investment plan set</h3>
                            
                        @endif


                        
                    </div>
                </div>
            </div>
            <!-- Blog End -->





<!-- TradingView Widget BEGIN -->


<div class="col-lg-12 col-md-12 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
    <!-- <div class="blog-item"> -->
        <iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=light&amp;cnt=6&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>
    <!-- </div> -->
    <br><br><br><br>

                        
</div>
    <!-- TradingView Widget END -->





@endsection




 
           