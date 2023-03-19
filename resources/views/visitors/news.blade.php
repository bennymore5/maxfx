@extends('layouts.spacedcustomlayout')
<style>
    .widget2 {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 800px;
        width: 100%;
        margin-bottom: 40px
    }
</style>

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/news.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>BUSINESS AND STOCKS</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <!--secondlayer-->

                <div class="row">

                    <div class="col-md-8">

                        <div>
                            <h1>
                                Latest
                            </h1>

                        </div>
                    </div>
                </div>
           </div>
        </section>
       <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily cryptocurrency news</span></a> by TradingView</div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "market",
  "market": "crypto",
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "regular",
  "width": "100%",
  "height": 830,
  "locale": "en"
}
  </script>
</div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
    @endsection
