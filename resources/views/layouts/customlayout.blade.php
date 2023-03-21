<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{route("index")}}">
    <title>Authentication</title>
    <!-- Bootstrap CSS -->
    
    <link rel="shortcut icon" href="uploads/bitpaddyltd_icon2.jpg">
    
    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="assets/dist/css/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="assets/dist/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="assets/dist/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/dist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/dist/css/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link href="assets/dist/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/intlTelInput.css">

    <script src="assets/dist/js/jquery.min.js"></script>
        </head>
    <body class="dt-header--fixed theme-dark dt-layout--full-width dt-sidebar--fixed o-auto">
        <!-- Root -->
        <div class="dt-root op-1">
            <div class="dt-root__inner">
                                        <!-- Login Container -->
        <div class="dt-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <div class="dt-login__bg-content">
                        <!-- Login Title -->
                        <h1 class="dt-login__title text-capitalize">{{isset($title)? $title:"Password reset"}}</h1>
                        <!-- /login title -->

                        <p class="f-16 text-capitalize">Sign in and explore                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          .</p>
                    </div>


                    <!-- Brand logo -->
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="{{route("index")}}">
                            <img class="dt-brand__logo-img" src="uploads/bitrally-logo.png" alt="logo">
                        </a>
                    </div>
                    <!-- /brand logo -->

                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">
                    <ul style="float: right;background-color: #f4f4f4;padding: 5px;">
                        <li class="dt-nav__item dropdown">

        

                           


                           

                        </li>
                    </ul>
								@yield('body')

								

                    <!-- Login Content Footer -->
                    <div class="dt-login__content-footer">
                      <a href="{{route('password.request')}}">Can't access your account?</a>
                  </div>
                  <!-- /login content footer -->

              </div>
              <!-- /login content section -->

          </div>
          <!-- /login content -->

      </div>
      <!-- /login container -->
<script src="assets/dist/js/login.js"></script><!---->
<script src="assets/dist/summernote/summernote-bs4.js"></script>
<script src="assets/dist/js/lang.js"></script>
<script src="assets/dist/summernote/editor-summernote.js"></script>
<script src="assets/dist/js/moment/moment.js"></script>
<script src="assets/dist/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/contact.js"></script>
<script src="assets/dist/js/perfect-scrollbar.min.js"></script>
<script src="assets/dist/js/masonry.pkgd.min.js"></script>
<script src="assets/dist/js/sweetalert2.js"></script>
<script src="assets/dist/js/customizer.js"></script>
<script src="assets/dist/js/Chart.min.js"></script>
<script src="assets/dist/js/chartist.min.js"></script>
<script src="assets/dist/js/script.js"></script>
<script src="assets/dist/js/showpass.js"></script>

</body>
</html>