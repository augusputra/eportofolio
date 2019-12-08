<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('mahasiswa/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('mahasiswa/vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('mahasiswa/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{URL::to('mahasiswa/images/form-img.jpg')}}" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signin-form">
                    <form method="POST" action="{{url('/mahasiswa-login')}}" class="register-form" id="register-form">
                        {{ csrf_field() }}
                        <p class="alert-success">
                            <?php
                                $message=Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message', NULL);
                                }
                            ?>
                        </p>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="phone_number" class="required">Email</label>
                                    <input type="email" name="email" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="phone_number" class="required">Password</label>
                                    <input type="password" name="password" id="phone_number" />
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Sign In" class="submit" id="submit" name="submit" />
                        </div>
                    </form>
                    <center>
                        <a href="{{url('/register-mahasiswa')}}" class="signin">Sign Up</a>
                    </center>
                        
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('mahasiswa/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('mahasiswa/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('mahasiswa/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>