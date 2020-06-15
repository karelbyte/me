<!doctype html>
<html lang="es">
<head>
    <!-- Simple Page Needs
    ================================================== -->
    <title>Karel Puerto</title>
    <meta charset="UTF-8">
    <meta name="description" content="Mat - Resume & vCard HTML Template">
    <meta name="keywords" content="personal, vcard, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon
    ================================================== -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('cubeportfolio/css/cubeportfolio.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/blue.css')}}" id="color"/>
    <!-- Google Web fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Font Icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('icon-fonts/web-design/flaticon.css')}}" />
    {!! RecaptchaV3::initJs() !!}
    </head>
<body>
<!-- Wrapper -->
<div class="wrapper top_60 container">
    <div class="row">
        <!-- Profile Section
        ================================================== -->
        <div class="col-lg-3 col-md-4">
            <div class="profile">
                <div class="profile-name">
                    <span class="name">Karel Puerto</span><br>
                    <span class="job">Programador</span>
                </div>
                <figure class="profile-image">
                    <img src="{{asset('images/profile.png')}}" alt="">
                </figure>
                <ul class="profile-information">
                    <li></li>
                    <li><p><span>Nombre:</span> Karel Puerto Diaz</p></li>
                    <li><p><span>Nacimiento:</span> 07 Octubre 1978</p></li>
                    <li><p><span>Trabajo:</span> Freelancer</p></li>
                    <li><p><span>Email:</span> karelpdiaz@hotmail.com</p></li>
                </ul>
                <div class="col-md-12">
                    <button class="site-btn icon" id="cv">Descargar Cv <i class="fa fa-download" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">
            <div class="row">

                <header class="col-md-12">
                    <nav>
                        <div class="row">
                            <!-- navigation bar -->
                            <div class="col-md-8 col-sm-8 col-xs-4">
                                <ul class="tabs">
                                    <li class="tab">
                                        <a class="home-btn" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="tab"><a href="#resume">RESUMEN</a></li>
                                    <li class="tab"><a href="#portfolio">PORTAFOLIO</a></li>
                                   <!-- <li class="tab"><a href="#blog">BLOG</a></li> -->
                                    <li class="tab"><a href="#contact">CONTACTO</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                                <button class="pull-right site-btn icon hidden-xs" id="hireme" >Contratame <i class="fa fa-handshake-o" aria-hidden="true"></i></button>
                                <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <div class="hidden-md social-icons pull-right">
                                    <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                <!-- Page Content
                ================================================== -->
                <div class="col-md-12">
                    <div id="content" class="panel-container">
                        @if (\Session::has('msj'))
                            <div class="alert alert-success" id="success">
                                {!! \Session::get('msj') !!}
                            </div>
                        @endif
                        @if (\Session::has('error'))
                            <div class="alert alert-danger" id="danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                        <!-- Home Page -->
                        @component('components.home')@endcomponent
                        <!-- Resume Page  -->
                        @component('components.resumen')@endcomponent
                        <!-- Portfolio Page -->
                        @component('components.portfolio')@endcomponent
                        <!-- Blog Page -->
                        <!-- Contact Page -->
                        @component('components.contact')@endcomponent
                    </div>
                </div>
            </div>
            <!-- Footer
            ================================================== -->
            <footer>
                <div class="footer col-md-12 top_30 bottom_30">
                  <div class="name col-md-4 hidden-md hidden-sm hidden-xs"></div>
                    <div class="copyright col-lg-8 col-md-12">© 2020 All rights reserved</div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easytabs.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.cookie-1.4.1.min.js')}}"></script>
<script>
    $("document").ready(function(){
        setTimeout(function(){
            $("#success").remove();
            $("#danger").remove();
        }, 4000 );

        $('#send').click(function () {
           $('#send_ico').removeClass('fa-paper-plane').addClass('fa-spinner fa-spin fa-fw');
        })
    });
</script>
</body>
</html>
