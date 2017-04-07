<!DOCTYPE html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Theme CSS -->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-default2 navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
             <a class="navbar-brand page-scroll" href="#page-top" style="position:absolute;top:-5px;"><img src="{{asset('files/logo.png')}}" style="width:30%;"></img></a>
             
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{url('/')}}>Home</a>
                    </li>
                    @if(Auth::check() && Auth::user()->name=="administrator")
                    <li>
                        <a class="page-scroll" href="#about"> static Information</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Campaigns</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('client')}}"> Clients</a>
                    @else
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{url('campaigns')}}>Campaigns</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('client/create')}}">Get Funded</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">How It Works</a>
                    </li>
                    @endif
                    @if(Auth::check())
                    <li>
                        <a class="page-scroll" href={{url('logout')}}>{{auth::user()->name}}, <font color="#fed136">logout</font></a>
                    </li> 
                    @else
                    <li>
                        <a class="page-scroll" href="{{url('login')}}"><font color="#fed136">login</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('register')}}"><font color="#fed136">register</font></a>
                    </li>
                    @endif
                  
                    <li>
                        <a class="page-scroll" href="#contact">contact us</a>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

       

    @yield('content')
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container" style="margin-top:-10%">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">there's some of things to contact us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                   <p ><h5 class="section-heading">facebook:</h5>
                </div>
                <div class="col-lg-6">
                   phone:
                </div>
            </div>
        </div>
    </section>


   

    <!-- jQuery -->
    <script src={{asset('vendor/jquery/jquery.min.js')}}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{asset('vendor/bootstrap/js/bootstrap.min.js')}}></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src={{asset('js/jqBootstrapValidation.js')}}></script>
    <script src={{asset('js/contact_me.js')}}></script>

    <!-- Theme JavaScript -->
    <script src={{asset('js/agency.min.js')}}></script>

</body>

</html>
