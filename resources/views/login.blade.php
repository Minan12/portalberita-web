<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--My animate CSS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login</title>

        <!-- style -->
        <link rel="stylesheet" href="assets/CSS/style.css">

        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background: rgb(201, 77, 64);
            }
            .img-fluid{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
                margin-left: -13px;
                height: 500px;
            }
            .row{
                background: white;
                border-radius: 30px;
            }
            .btn{
                width: 100%;
                padding-bottom: 5px;
            }
            .back{
                margin-top: 10px;
            }
        </style>
    </head>
    <body class="">

        <section class="Form my-4 mx-5 mt-5">
            <div class="container bodi">
                <div class="row no-gutters">
                    <div class="col-lg-5" data-aos="fade-up">
                        <img src="{{asset('template\assets/images/husein_bndr.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-7 px-5 pt-5" data-aos="fade-down">
                        <h1 class="font-weight-bold text-center">WELCOME ADMIN</h1>
                        <h4 class="text-center">Sign into your account</h4>
                        <form action="/loginuser" method="post" class="mt-4" style="margin-left: 200px;">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" id="form2Example1" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <label class="form-label" for="form2Example2">Password</label>
                                    <input type="password" id="form2Example2" name="password" class="form-control" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                        <button type="submit" class="btn btn-outline-danger text-black mt-4">Login</button>
                                        <p class="text-center">Don't have account?      <a href="/register" class="link-danger mt-3">Register</a></p>

                                        <p class="text-center">      <a href="/" class="link-danger mt-3">Back</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <div class="judul text-center mb-4 mt-3">
                            <h1>Login</h1>
                        </div>
                        <form action="/loginuser" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email address</label>
                                <input type="email" id="form2Example1" name="email" class="form-control" />
                            </div>
                
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Password</label>
                                <input type="password" id="form2Example2" name="password" class="form-control" />
                            </div>
                                
                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-block mb-4 btn-lg">Sign in</button>
                                <p>Don't have account?    <a href="/register" class="link-warning">Register</a></p>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>