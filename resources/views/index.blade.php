<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Firma budowlano-elektryczno Eletrkon, informacje o historii firmy, kontakt i wykonane prace" />
        <meta name="keywords" content="elektryka, prąd, firma elektryczna, firma budowlana, Kraków, Ojców, Wola Kalinowska, niemcy, polska"/>
        <meta name="author" content="Adrian Bugaj" />
        <meta name="robots" content="follow"/>
        <title>Elektron</title>
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="css/images/logo.png"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Czym się zajmujemy</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Nasze prace</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">O firmie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{"/elektron"}}"><img src="css/images/2.png" class="flaga"/></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{"/"}}"><img src="css/images/3.png" class="flaga"/></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead test-blur">
            <div class="container">
                <div class="masthead-heading text-uppercase bluring"><img src="css/images/ele.png"/></div>

            </div>
        </header>
        </div>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase czym-sie-zajmujemy">Czym się zajmujemy</h2>
                    <br>
                    <br>

                </div>
                <div class="row text-center">
                    <div class="col-md-4 zajecia">
                        <span class="fa-stack fa-4x" >
                            <i class="fas fa-circle fa-stack-2x text-primary" > </i>
                            <i class="fas fa-home fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Instalacje elektryczne</h4>
                        <p class="text-muted">montaż, wymiana, modernizacja, naprawa, pomiary, skrzynki i tablice bezpiecznikowe,
                            montaż tras kablowych, podpinanie szaf, urządzeń i maszyn, refabrykacja rodzielni elektrycznych, montaż oświetlenia
                        </p>
                    </div>
                    <div class="col-md-4 zajecia2">
                        <span class="fa-stack fa-4x" >
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Instalacje alarmowe, domofonowe i przeciwpożarowe</h4>
                        <p class="text-muted">Montaż nowych instalacji alaramowych, montaż instalacji przeciwpożarowej, na podstawie dostarczonego projektu, montaż i naprawa instalacji domofonowych</p>
                    </div>
                    <div class="col-md-4 zajecia3">
                        <span class="fa-stack fa-4x" >
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-broadcast-tower fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pomiary elektryczne</h4>
                        <p class="text-muted">rezystancji izolacji, uziemień, skuteczności ochrony przeciwpożarowej, ciągłości i lokalizacji przewodów, badania i pomiaty instalacji elektrycznych w budynkach jedno i wielo rodzinnych, obiektach użyteczności publicznej</p>
                    </div>
                </div>
            </div>
        </section>
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
                    @if ($realizacja ->id ==37)
                        @break


                    @endif
                    @endforeach




                </div>
                <div class="row">
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger center-route" href="{{'/realizacje'}}">Zobacz wszystkie</a>

                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase o-elektronie">O Elektronie</h2>
                    <br>

                </div>
                <ul class="timeline">
                    <li class="time-line">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="css/images/elektryk.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Styczeń 2005</h4>
                                <h4 class="subheading">Założenie firmy</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">W 2005 rozpoczęła się nasza przygoda </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted time-line-2">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="css/images/hala.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Marzec 2008</h4>
                                <h4 class="subheading">Pierwsze duże zlecenie</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Wtedy dostaliśmy pierwsze duże zlecenie na kompleksową obsługę hali w Krakowie</p></div>
                        </div>
                    </li>
                    <li class="time-line-3">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="css/images/elektryk2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2019</h4>
                                <h4 class="subheading">Kolejne zlecenia </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Firma nieustannie się rozwijała i wykonywaliśmy wiele prac na terenie Niemiec i Polski</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted time-line-4">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="css/images/ekipa.PNG" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 id="aktualna_data"></h4>
                                <h4 class="subheading">Czekamy na zlecenie od ciebie!!</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted time-line-5">
                        <div class="timeline-image">
                            <h4>
                                Bądź częścią
                                <br />

                                naszej historii


                            </h4>
                        </div>
                    </li>
                </ul>

                        <script>
                            var a = new Date();
                            document.querySelector("#aktualna_data").innerHTML = a.getDate()+"."+(a.getMonth()+1)+"."+a.getFullYear();

                        </script>





















            </div>
        </section>
        <!-- Team-->

        <!-- Clients-->

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <h1 class="text-center kontakt">Kontakt</h1>
                <hr>
                  <div class="row">
                    <div class="col-sm-8">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2552.6285076669305!2d19.805168151527216!3d50.22416217934385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716f8cbfeefcaa5%3A0x3540511ae6523c5f!2sOjcowska%2025%2C%2032-045%20Wola%20Kalinowska!5e0!3m2!1spl!2spl!4v1621940371759!5m2!1spl!2spl" width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy" class="mapa"></iframe>
                    </div>
                        <div class="col-sm-4" id="contact2">
                        <h3>Dane kontaktowe - Elektron Marcin Marszałek</h3>
                        <hr  width="80%">
                        <h4 class="pt-2">Biuro</h4>
                        <i class="fas fa-globe" style="color:#000"></i>Wola Kalinowska ul. Ojcowska 25, 32-045 Sułoszowa <br>
                        <h4 class="pt-2">Telefon</h4>
                        <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> +48 668-445-448 </a><br>

                        <h4 class="pt-2">Email</h4>
                        <i class="fa fa-envelope" style="color:#000"></i> <a href="">maliniak61@wp.pl</a><br>
                        <h4 class="pt-2">NIP</h4>
                       <a href="">677-178-04-82</a><br>
                       <h4 class="pt-2">Regon</h4>
                       <a href="">121843331</a><br>


                      </div>
                  </div>
                </div>



                <br><br>

                <div class="col-12 my-2">
                </div>
                </div>
        </section>

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
            const zajecia = document.querySelector(".zajecia");
            const zajecia2 = document.querySelector(".zajecia2");
            const zajecia3 = document.querySelector(".zajecia3");
            const czym_sie_zajmujemy = document.querySelector('.czym-sie-zajmujemy');
            const o_elektronie = document.querySelector('.o-elektronie');
            const timeline = document.querySelector('.time-line');
            const timeline2 = document.querySelector('.time-line-2');
            const timeline3 = document.querySelector('.time-line-3');
            const timeline4 = document.querySelector('.time-line-4');
            const timeline5 = document.querySelector('.time-line-5');
            const nasze_prace = document.querySelector('.nasze-prace');
            const kontakt = document.querySelector('.kontakt');
            const mapa = document.querySelector('.mapa');
            const kontakt2 = document.querySelector('#contact2');





    gsap.fromTo(header, { opacity: 0 }, { opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.header-animate'
    }})


            gsap.fromTo(zajecia, {y: '+=100', opacity: 0 }, {y:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.zajecia'
    }})
    gsap.fromTo(zajecia2, {y: '+=100', opacity: 0 }, {y:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.zajecia2'
    }})
    gsap.fromTo(zajecia3, {y: '+=100', opacity: 0 }, {y:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.zajecia3'
    }})

    gsap.fromTo(czym_sie_zajmujemy, {y: '+=100', opacity: 0 }, {y:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.czym-sie-zajmujemy'
    }})

    gsap.fromTo(o_elektronie, { opacity: 0 }, { opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.o-elektronie'
    }})

    gsap.fromTo(timeline, {x: '-=200', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.time-line'
    }})

    gsap.fromTo(timeline2, {x: '+=200', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.time-line-2'
    }})

    gsap.fromTo(timeline3, {x: '-=200', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.time-line-3'
    }})

    gsap.fromTo(timeline4, {x: '+=200', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.time-line-4'
    }})

    gsap.fromTo(timeline5, {y: '+=100', opacity: 0 }, {y:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.time-line-5'
    }})

    gsap.fromTo(nasze_prace, {y: '+=200', opacity: 0 }, {y: 0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.nasze-prace'
    }})

    gsap.fromTo(kontakt, {y: '-=100', opacity: 0 }, {y: 0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.kontakt'
    }})

    gsap.fromTo(mapa, {x: '-=100', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '.mapa'
    }})

    gsap.fromTo(kontakt2, {x: '+=200', opacity: 0 }, {x:0, opacity:1, stagger: 0.2, duration: 1, ease: 'easeInOut', scrollTrigger:{
        trigger: '#contact2'
    }})





        </script>
    </body>
</html>
