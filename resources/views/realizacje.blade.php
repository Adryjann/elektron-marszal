<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Wykonane prace budowlane firmy elektrycznej Elektron" />
        <meta name="keywords" content="elektryka, prąd, firma elektryczna, firma budowlana, Kraków, Ojców, Wola Kalinowska"/>
        <meta name="author" content="Adrian Bugaj" />
        <meta name="robots" content="follow"/>

        <title>Realizacje - Elektron</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <div class="header-animate">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('css/images/logo.png')}}"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#services">Czym się zajmujemy</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#portfolio">Nasze prace</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#about">O firmie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{"/elektron"}}"><img src="css/images/2.png" class="flaga"/></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{"/"}}"><img src="css/images/3.png" class="flaga"/></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead realization">
            <div class="container">

                <div class="masthead-heading text-uppercase">Nasze realizacje</div>

            </div>
        </header>
        </div>
        <!-- Services-->

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container nasze-prace">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nasze prace</h2>

                </div>
                <div class="row">
                    @foreach ($realizacje as $realizacja)


                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$realizacja ->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" id="img-f" src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie1}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$realizacja ->nazwa}}</div>

                            </div>
                        </div>
                    </div>




                    @endforeach




                </div>

            </div>
        </section>
        <!-- About-->

        <!-- Team-->

        <!-- Clients-->

        <!-- Contact-->


        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        @foreach ($realizacje as $realizacja )


        <div class="portfolio-modal modal fade" id="portfolioModal{{$realizacja ->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">{{$realizacja ->nazwa}}</h2>

                                    <div id="adam{{$realizacja->id}}" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if (isset($realizacja->zdjecie1 ))
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"  src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie1}}" alt="First slide">
                                                </div>

                                            @endif


                                            @if (isset($realizacja->zdjecie2))
                                          <div class="carousel-item">
                                            <img class="d-block w-100"  src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie2}}" alt="Second slide">
                                          </div>
                                          @endif


                                          @if (isset($realizacja->zdjecie3))
                                          <div class="carousel-item">
                                            <img class="d-block w-100"  src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie3}}" alt="Third slide">
                                          </div>
                                          @endif

                                          @if (isset($realizacja->zdjecie4))
                                          <div class="carousel-item">
                                            <img class="d-block w-100"  src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie4}}" alt="Third slide">
                                          </div>
                                          @endif


                                          @if (isset($realizacja->zdjecie5))
                                          <div class="carousel-item">
                                            <img class="d-block w-100"  src="{{asset('storage/app/public/image/')}}/{{$realizacja->zdjecie5}}" alt="Third slide">
                                          </div>
                                          @endif


                                        </div>
                                        <a class="carousel-control-prev" href="#adam{{$realizacja->id}}" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#adam{{$realizacja->id}}" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>
                                    <p>{{$realizacja ->opis}}</p>
                                    <ul class="list-inline">

                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endforeach


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->

        <!-- Core theme JS-->
        <script src="js/script.js"></script>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>



        <script>
            gsap.registerPlugin(ScrollTrigger);

            const header = document.querySelector('.header-animate');

            const nasze_prace = document.querySelector('.nasze-prace');





    gsap.fromTo(header, { opacity: 0 }, { opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.header-animate'
    }})






    gsap.fromTo(nasze_prace, {y: '+=200', opacity: 0 }, {y: 0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.nasze-prace'
    }})







        </script>
            <a href='https://pl.freepik.com/zdjecia/ludzie'>Ludzie zdjęcie utworzone przez aleksandarlittlewolf - pl.freepik.com</a>

    </body>
</html>
