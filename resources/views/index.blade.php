<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>PILEG NIH</title>

        <link rel="stylesheet" href="{{asset('template\assets/css/main.css')}}">
    </head>
    <body>
        <!-- navbar -->
        
        <!-- end navbar -->

        <!-- hero section -->
            {{-- <section id="hero">
                <div class="container p-5">
                    <div class="row h-100">
                        <div class="col-md-6">
                            <h1>I'm Rachmat Sutarman</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod <br>
                            tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, <br>
                            quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat.</p>

                            <button type="button" class="btn btn-primary">Primary</button>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/rachmat.png" alt="" class="rounded">
                        </div>
                    </div>
                </div>
            </section> --}}
        <!-- end hero section -->

        <!-- pencapaian section -->
        <section id="pencapaian">
                <div class="container p-3">
                    <div class="row mt-5">
                        <div class="col">
                            <h1 class="text-center">Pencapaian</h1>
                        </div>
                    </div>
                </div>
                <div class="container p-1 mt-4">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                @include('name')
                <!-- end Footer -->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </body>
</html>
