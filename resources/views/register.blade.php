<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Register</title>

        <!-- style -->
        <link rel="stylesheet" href="assets/CSS/style.css">
    </head>
    <body class="bg-warning">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <div class="judul text-center mb-4 mt-3">
                            <h1>REGISTER</h1>
                        </div>
                        <form action="/registeruser" method="post">
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Name</label>
                                <input type="text" id="form2Example1" name="name" class="form-control" />
                            </div>
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
                                <button type="submit" class="btn btn-warning btn-block btn-lg mb-4">Register</button>
                                <p>Already have account?   <a href="/login" class="link-warning">Login</a></p>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        


        {{-- <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center m-3">Register</h5>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><a href="{{ url('l') }}">If you have an account click here</a></label>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg">Submit</button>

                            {{-- <!-- Register buttons -->
                            <div class="text-center">
                                <p>member? <a href="/login">Login</a></p>
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>
                                
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>
                            
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div> --}}

                            {{-- <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>