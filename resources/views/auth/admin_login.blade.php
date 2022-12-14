<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="assets/images/image 1.png">
        <title>Alumin-Log In</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
        <!--Scroll In Animation-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body id="back">
        <section class="logIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="sign">
                            <h4>
                                <img src="assets/images/image 1.png" draggable="false" alt="">  LogIn
                            </h4>
                            <div class="line-rule"></div>
                            <form method="POST" class="sign-div" action="{{ route('login') }}">
                                    @csrf
                                <div class="row">
                                    <!--Email-->
                                    <div class="col-lg-12">
                                        <label>Email</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <i class="bi bi-envelope"></i>
                                                <input type="email" placeholder="Enter Your Email Address" name="email" class="input @error('email') is-invalid @enderror" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <i class="bi bi-phone"></i>
                                                <input type="password" placeholder="Enter Your Password" name="password" class="input @error('password') is-invalid @enderror" required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit">LogIn</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <!--Scroll In Animation-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/main.js')}}"></script>
    </body>
</html>