<!DOCTYPE html>

<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'COFUNDIE') }} - Realestate Micro-investment</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700%7CPoppins:200,300,400,500,600,700" rel="stylesheet">
    <!--- End google font-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!--- End favicon-->
    <link rel="stylesheet" href="assets/css/bundle.min.css">
    <!--End ALL STYLESHEET -->
</head>

<body>
    <div class="st_login_page_area banner-height" style="background-image: url(assets/images/shop/bg.png);">
        <div class="container">
            <div class="st_login_wrap banner-height text-center">
                <div class="st_login_container p-l-r-75 p-t-b-60">
                    <div class="st_login_logo m-b-45">
                        <a href="{{url('/')}}"><img src="assets/images/logo/login.png" alt=""></a>
                        <h3 class="st-font-28 m-t-20 st-line-height-1-1 m-0"><strong>Login page</strong></h3></div>
                    <div class="st_login_box">
                        <form action="{{route('login')}}" method="POST">
                        @csrf
                            <div class="st_login_form">
                                <div class="st_login_item"><i class="fas fa-user st-font-20 text-haiti"></i>
                                    <input class="st_login_input" type="email" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="st_login_item"><i class="fas fa-lock st-font-20 text-haiti"></i>
                                    <input class="st_login_input" type="password" placeholder="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button id="st_login_btn" type="submit" value="login">LOGIN</button> 
                            <a class="forget_password text-perison-blue font-weight-medium text-left d-block p-t-b-30" href="#">FORGET PASSWORD?</a>
                        </form>
                    </div>
                    <div class="st_login_social_icon">
                        <h3 class="st-font-24 m-b-25">Login With</h3>
                        <ul class="list-inline m-0 m-b-30">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <p class="st-font-18 font-weight-medium">New user in our site <a class="text-perison-blue" href="#"><u>Create a Account</u></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--End container-->
    </div>
    <!--End st_404_area-->
    <script src="assets/js/bundle.min.js"></script>
    <!-- End All Js -->
</body>

</html>


