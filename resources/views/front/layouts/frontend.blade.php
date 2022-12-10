<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--My animate CSS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Husein</title>

        <link rel="stylesheet" href="{{asset('template\assets/css/main.css')}}">

        <link rel="stylesheet" href="{{asset('template\assets/css/index.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.includes.header')
        <!-- end navbar -->

        
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
            <div class="carousel-inner">
                <div class="carousel-item active c-item" data-bs-interval="3000">
                    <img src="{{asset('template\assets/images/kopi.jpeg')}}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item c-item" data-bs-interval="3000">
                    <img src="{{asset('template\assets/images/kopii2.jpeg')}}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item c-item" data-bs-interval="3000">
                    <img src="{{asset('template\assets/images/lagibaksos.jpeg')}}" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section id="home">
            <div class="container-fluid px-0 top-banner" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-sm-6 col-xs-10 col-md-6 col-lg-7" >
                            <div class="isi text-md-start text-sm-start text-xl-start text-lg-start" data-aos="zoom-out-right">
                                <h1 class="mt-5 ">Muhammad Husein Fadlullah, B.Bus., MM., M.BA.</h1>
                                <p class="text-home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget pulvinar lacus, non egestas dolor</p>
                            </div>
                        
                            <div class="mt-5 mb-3 text-md-start text-sm-start text-xl-start text-lg-start" data-aos="zoom-out-right">
                                <button class="main-btn rounded-2 text-capitalize">Lebih lanjut</button>
                            </div>
                        </div>
                        <div class="foto col-xl-4 col-lg-5 col-md-6 col-sm-6 mt-5 mb-5 align-items-sm-center" data-aos="zoom-out-left">
                            <img src="{{asset('template\assets/images/husein_bndr.jpeg')}}" class="rounded img-fluid"  alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- pencapaian section -->
        <section id="pencapaian">
                <div class="container p-3" data-aos="fade-up">
                    @yield('content')
                </div>
        </section>
        <!-- end pencapaian section -->

        <!-- featured section -->
        <section id="featured" class="feature p-5">
            <div class="container">
                <div class="row">
                    <div class="gambar col-sm-4 border">
                    </div>
                    <div class="col-sm-8 border">
                    </div>
                </div>
            </div>
        </section>
        <!-- end featured section -->

        <!-- span section -->
            <section id="span" class="spann">
                <div class="container p-4">
                    <div class="text-center">
                        <img src="{{asset('template\assets/images/gerindra.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </section>
        <!-- end span section -->

                <!-- Footer -->
                @include('front.includes.footer')
                <!-- end Footer -->

                @include('front.includes.js')
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
