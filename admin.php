<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin">
    <meta name="author" content="#">
    <link rel="icon" href="/assets/images/logo/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="layouts/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="layouts/css/style.css">
    
    <title>ADMINISTRATIVE LOGIN | borisveins</title>
</head>

<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="layouts/dashboard.php" method="POST">

                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12 text-center mb-5">
                                        <img src="layouts/image/boris_logo.png" alt="boris_logo.png" class="img img-responsive"
                                            width="180px">
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="text-center text-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input id="email" type="email"
                                        class="form-control"
                                        name="email" value="" placeholder="Your Email Address"
                                         autofocus>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input id="password" type="password"
                                        class="form-control"
                                        name="password" placeholder="Password" >
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $err ors->first('password') }}</strong>
                                    </span>
                                    <span class="form-bar"></span>
                                </div>
                               <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label for="remember">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember"  checked>
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        
                                            <div class="forgot-phone text-right f-right">
                                                <a class="text-right f-w-600" href="{{ route('password.request') }}">
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left">
                                        <a href="/">
                                            <b class="f-w-600">Back to website</b>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>


    <script type="text/javascript" src="layouts/js/main.js"></script>

</body>

</html>
