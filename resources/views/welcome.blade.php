<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78641447-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-12345678');
    </script>-->

    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="https://customerce.herokuapp.com/public/css/spark.css" rel="stylesheet">
    <link href="https://customerce.herokuapp.com/public/css/app.css" rel="stylesheet">
    <link href="https://customerce.herokuapp.com/public/css/landingpage.css" rel="stylesheet">
</head>
<body class="border-thick">

<div class="container-fluid">
    <div class="row">
        <div id="header" class="col-md-12">
            <ul class="nav nav-pills pull-right">
                @if(Auth::user())
                    <li><a href="/home">Go to dashboard &rarr;</a></li>
                @else
                    <li><a href="register">Sign up</a></li>
                    <li><a href="login">Log in</a></li>
                @endif
            </ul>
            <div class="jumbo text-center">
                <img style="height: 70px;" src="public/img/logo.svg" alt="Customerce">
                <h1 class="hero-text">Manage your business with Customerce <br/> Get up and running in 30 seconds</h1>
            </div><!-- /.jumbo -->

            <img class="img-responsive center-block" src="public/img/webUI.png" alt="">
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="feature-wrapper container">

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-uppercase">Some of the features</h2>
        </div><!-- /.col-md-12 -->
    </div><!-- row -->

    <div class="row">
        <div class="col-md-5">
            <div class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-photos heroicon heroicon-sm">
                    <path class="heroicon-photos-edge heroicon-component-accent heroicon-component-fill" d="M9 16h50v36H9V16zm4 4v28h42V20H13zm38-4h-4v-4H5v28h4v4H1V8h50v8z"></path>
                    <path class="heroicon-photos-back-background heroicon-component-fill" d="M7 12H5v28h4V16h38v-4H7z"></path>
                    <polygon class="heroicon-photos-front-ground heroicon-component-fill" points="14 41 14 47 54 47 54 41 41 41 40.586 41"></polygon>
                    <polygon class="heroicon-photos-front-sky heroicon-component-fill" points="54 21 14 21 14 39 26.293 26.707 27 26 27.707 26.707 36 35 42.293 28.707 43 28 43.707 28.707 54 39"></polygon>
                    <path class="heroicon-photos-front-sun heroicon-component-fill" d="M38 27a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path>
                    <path class="heroicon-photos-front-mountains heroicon-component-fill" d="M41 40l-4.3-4.3 6.3-6.29L53.59 40H41zm-26.59 0L27 27.41 39.59 40H14.4z"></path>
                    <path class="heroicon-shadows" d="M8 14H7v31h2V16h42v-2H8z"></path>
                    <path class="heroicon-outline"
                          d="M8 45H0V7h52v8h8v38H8v-8zM2 9v34h6v-2H4V11h44v4h2V9H2zm6 30V15h38v-2H6v26h2zm2-22v34h48V17H10zm4 2h42v30H12V19h2zm40 2H14v18l12.3-12.3.7-.7.7.7L36 35l6.3-6.3.7-.7.7.7L54 39V21zm-18 9a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm2-3a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM14 41v6h40v-6H14zm27-1h12.59L43 29.41l-6.3 6.3L41 40zm-26.59 0H39.6L27 27.41 14.41 40zM49 42v1H33v-1h16z"></path>
                </svg>
            </div>
            <div class="description">
                <h3 class="text-headline">Intuitive design</h3>
                <p class="text-description">Customerce has a simple and intuitive design that is really easy to get started with and get started with creating beautiful invoices.</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->

        <div class="col-md-5 col-md-offset-2">
            <h3 class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-bell heroicon heroicon-sm">
                    <path class="heroicon-bell-bowl heroicon-component-fill" d="M50.7 48c-.34-.3-.66-.64-.95-1l-.68-1A7.96 7.96 0 0 1 48 42V24a18 18 0 0 0-36 0V42.01A7.98 7.98 0 0 1 9.3 48h41.4z"></path>
                    <path class="heroicon-bell-lip heroicon-component-accent heroicon-component-fill" d="M2 51v-1h56v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"></path>
                    <path class="heroicon-bell-top heroicon-component-accent heroicon-component-fill" d="M32 4.1V4a2 2 0 1 0-4 .1 20.24 20.24 0 0 1 4 0z"></path>
                    <path class="heroicon-bell-clapper heroicon-component-accent heroicon-component-fill" d="M26 54a4 4 0 0 0 8 0h-8z"></path>
                    <rect class="heroicon-shadows" width="10" height="3" x="25" y="53"></rect>
                    <path class="heroicon-outline"
                          d="M26 4a4 4 0 1 1 7.98.4A20 20 0 0 1 50 24v18a6 6 0 0 0 6 6h4v3a3 3 0 0 1-3 3H36a6 6 0 0 1-12 0H3a3 3 0 0 1-3-3v-3h4a6 6 0 0 0 6-6V24A20 20 0 0 1 26.02 4.4 4.02 4.02 0 0 1 26 4zm6 .1V4a2 2 0 1 0-4 .1 20.24 20.24 0 0 1 4 0zM50.7 48c-.34-.3-.66-.64-.95-1H34v-1h15.07A7.96 7.96 0 0 1 48 42V24a18 18 0 0 0-36 0V42.01A7.98 7.98 0 0 1 9.3 48h41.4zM26 54a4 4 0 0 0 8 0h-8zM2 51a1 1 0 0 0 1 1h54a1 1 0 0 0 1-1v-1H2v1zm15.74-33.77A14 14 0 0 1 30 10v1a13 13 0 0 0-11.35 6.66l-.9-.43zm-1.12 2.62l.98.23c-.3.93-.49 1.91-.56 2.92h-1c.07-1.09.27-2.14.58-3.15zM17 25v8h-1v-8h1z"></path>
                </svg>
            </h3><!-- icon-feature -->
            <div class="description">
                <h3 class="text-headline">Notifications</h3>
                <p class="text-description">Get notifications when your customer is missing a due date or when the customer has paid your invoices with our notification system.</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            <div class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-clock heroicon heroicon-sm">
                    <path class="heroicon-clock-edge heroicon-component-accent heroicon-component-fill" d="M30 59a29 29 0 1 1 0-58 29 29 0 0 1 0 58zm0-5a24 24 0 1 0 0-48 24 24 0 0 0 0 48z"></path>
                    <circle class="heroicon-clock-background heroicon-component-fill" cx="30" cy="30" r="25"></circle>
                    <path class="heroicon-shadows" d="M55 29.5A25 25 0 0 0 5 29a25 25 0 1 1 50 .5zm3 0v.5a28 28 0 1 1-56-.5 28 28 0 0 0 56 0z"></path>
                    <path class="heroicon-outline"
                          d="M30 60a30 30 0 1 1 0-60 30 30 0 0 1 0 60zm28-30a28 28 0 1 0-56 0 28 28 0 0 0 56 0zM30 55a25 25 0 1 1 0-50 25 25 0 0 1 0 50zm24-25a24 24 0 1 0-48 0 24 24 0 0 0 48 0zM29 8h2v4h-2V8zm23 21v2h-4v-2h4zM29 52v-4h2v4h-2zM8 31v-2h4v2H8zm36.44-16.85l1.4 1.41-13.2 14.34.9.8L31 33.25V46h-2V33.24l-2.54-2.53.94-.87-8.71-9.74 1.41-1.41 8.9 7.96V24h2v2.53l13.44-12.38zM31 30a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"></path>
                </svg>
            </div><!-- icon-feature -->
            <div class="description">
                <h3 class="text-headline">Past Due Notices</h3>
                <p class="text-description">The customer and you will both get a notification then an invoice is past due date.</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->

        <div class="col-md-5 col-md-offset-2">
            <div class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-envelope-open heroicon heroicon-sm">
                    <path class="heroicon-envelope-open-body heroicon-component-fill" d="M28.44 1.25a2.61 2.61 0 0 1 3.12 0L60 24v34a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V24L28.44 1.25z"></path>
                    <polygon class="heroicon-envelope-open-document heroicon-component-fill" points="12 8 48 8 48 34 38 42 22.5 42 12 34"></polygon>
                    <path class="heroicon-envelope-open-sides heroicon-component-accent heroicon-component-fill" d="M1 25l4 4v26l-4 4V25zm58 34l-4-4V29l4-4v34z"></path>
                    <polygon class="heroicon-shadows" points="3 26 22 38 38 38 57 26 38 42 22 42"></polygon>
                    <path class="heroicon-outline" fill-rule="nonzero"
                          d="M20 8l8.44-6.75a2.61 2.61 0 0 1 3.12 0L40 8h8v6.4L60 24v34a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V24l12-9.6V8h8zm3.2 0h13.6L30.3 2.8c-.13-.1-.49-.1-.62 0L23.2 8zM12 16.96L3.2 24H12v-7.04zM12 26H3.52L12 32.72V26zM2 27.34V56.4l2-1.6V28.93l-2-1.59zM3.2 58h53.6L38.05 43h-16.1L3.2 58zM58 56.4V27.34l-2 1.6V54.8l2 1.6zM56.48 26H48v6.72L56.48 26zM48 24h8.8L48 16.96V24zM14 10v24.3l4.65 3.7H39v1H19.91l2.52 2h15.14L46 34.3V10H14zm41 19.72L39.76 41.81 55 54V29.72zM5 54l15.24-12.2L5 29.73V54zm13-38h24v1H18v-1zm0 2h23v1H18v-1zm22 2v1H18v-1h22zm-22 2h24v1H18v-1zm14 2v1H18v-1h14zm-14 3h22v1H18v-1zm24 2v1H18v-1h24zm-24 2h23v1H18v-1zm18 2v1H18v-1h18zm-18 3h24v1H18v-1z"></path>
                </svg>
            </div><!-- icon-feature -->
            <div class="description">
                <h3 class="text-headline">Send Invoices by email</h3>
                <p class="text-description">We automatic send invoices to your customer's email address when you create a new invoice.</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            <div class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-currency heroicon heroicon-sm">
                    <rect class="heroicon-currency-background heroicon-component-fill" width="58" height="37" x="1" y="12"></rect>
                    <path class="heroicon-currency-decorative heroicon-component-accent heroicon-component-fill"
                          d="M56 35a4 4 0 0 0-4 4H8a4 4 0 0 0-4-4V19a4 4 0 0 0 4-4h44a4 4 0 0 0 4 4v16zm-2-1.66V20.66A6.02 6.02 0 0 1 50.34 17H9.66A6.02 6.02 0 0 1 6 20.66v12.68c1.7.6 3.06 1.96 3.66 3.66h40.68A6.02 6.02 0 0 1 54 33.34zM30 34a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-4a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-15-1a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm30 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path>
                    <rect class="heroicon-shadows" width="58" height="7" x="1" y="42"></rect>
                    <path class="heroicon-outline"
                          d="M0 47V11h60v39H0v-3zm2-6h56V13H2v28zm0 2v1h14v1H2v1h20v1H2v1h56v-1H41v-1h17v-1H47v-1h11v-1H2zm49-28h1a4 4 0 0 0 4 4v16a4 4 0 0 0-4 4H8a4 4 0 0 0-4-4V19a4 4 0 0 0 4-4h43zm.1 1H8.9A5 5 0 0 1 5 19.9v14.2A5 5 0 0 1 8.9 38h42.2a5 5 0 0 1 3.9-3.9V19.9a5 5 0 0 1-3.9-3.9zM54 33.34A6.02 6.02 0 0 0 50.34 37H9.66A6.02 6.02 0 0 0 6 33.34V20.66A6.02 6.02 0 0 0 9.66 17h40.68A6.02 6.02 0 0 0 54 20.66v12.68zM7 21.33v11.34A7.02 7.02 0 0 1 10.33 36h39.34A7.02 7.02 0 0 1 53 32.67V21.33A7.02 7.02 0 0 1 49.67 18H10.33A7.02 7.02 0 0 1 7 21.33zM37 27a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm-7 6a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm0-2a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3-4a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-16 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-2 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm30 1a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm1-2a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"></path>
                </svg>
            </div><!-- icon-feature -->
            <div class="description">
                <h3 class="text-headline">No Fees</h3>
                <p class="text-description">There are no hidden feeds</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->

        <div class="col-md-5 col-md-offset-2">
            <div class="icon-feature">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-heart heroicon heroicon-sm">
                    <path class="heroicon-heart-outer heroicon-component-accent heroicon-component-fill" d="M31.41 9.97L30 11.37l-1.4-1.41-1.28-1.27A16 16 0 0 0 4.7 31.3L30.13 56.5 55.31 31.3A16 16 0 0 0 32.7 8.7L31.4 9.97z"></path>
                    <path class="heroicon-heart-inner heroicon-component-fill" d="M31.4 15.63l-1.41 1.41-1.41-1.41-1.42-1.43-2.67-2.69A12 12 0 0 0 7.5 28.48l22.6 22.37L52.5 28.5A12 12 0 0 0 35.5 11.5l-4.11 4.12z"></path>
                    <path class="heroicon-outline"
                          d="M31.41 9.97l1.28-1.28A16 16 0 0 1 55.3 31.3L30.13 56.5 4.7 31.3A16 16 0 0 1 27.3 8.7l1.27 1.27L30 11.38l1.42-1.41zM53.9 29.9a14 14 0 0 0-19.8-19.8L30 14.21l-1.41-1.42-2.68-2.69A14 14 0 0 0 6.1 29.9l24.02 23.77L53.9 29.9zM31.4 15.63l4.11-4.12A12 12 0 0 1 52.5 28.5L30.12 50.85 7.5 28.48A12 12 0 0 1 24.49 11.5l2.67 2.69 1.42 1.43 1.4 1.41 1.42-1.4zm19.67-2.7a10 10 0 0 0-14.14 0l-6.95 6.95-4.24-4.27c-1.1-1.12-2-2.01-2.67-2.68A10 10 0 0 0 8.91 27.06l21.2 20.97 20.96-20.96a10 10 0 0 0 0-14.14zm-40.73 1.41A7.97 7.97 0 0 1 16 12v1a6.98 6.98 0 0 0-6.26 3.87l-.9-.45a8 8 0 0 1 1.5-2.08zm-2 3.36l.95.29c-.2.65-.3 1.33-.3 2.01H8c0-.77.12-1.55.35-2.3zm1.98 7.94a7.92 7.92 0 0 1-2.17-4.07l.98-.2a6.9 6.9 0 0 0 1.9 3.55L16 29.85v1.4l-5.68-5.61z"></path>
                </svg>
            </div><!-- icon-feature -->
            <div class="description">
                <h3 class="text-headline">Secure Online Payments</h3>
                <p class="text-description">With Customerce your customers will alway be secure when they pay your invoices.</p>
            </div><!-- /.description -->
        </div><!-- col-md-4 -->
    </div><!-- /.row -->
</div><!-- /.feature-wrapper container -->

<div class="feature-wrapper container-fluid feature-soft-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-uppercase">Start your free trial</h2>
            </div><!-- /.col-md-12 -->
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <h3 class="text-headline text-lg">Cheap Pricing</h3>
                <p class="text-description">
                    At Customerce you can get started with sending invoices to your customers with our <b>30 days free trial</b>
                    and after that you can sign up to our basic plan for a cheap price. <br/><br/>
                    You can start tracking your expenses and track your expenditure..
                </p>
                <br/>
                <a href="/register">
                    <button class="btn btn-action">Start your free trial</button>
                </a>
            </div><!-- /.col-md-6 -->

            <div class="plan col-md-4 col-md-offset-2">
                <div id="plan" class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="plan-type text-uppercase">
                            <span>Monthly</span>
                        </div><!-- plan-type -->

                        <div class="plan-price">
                            <span class="dollar"></span>
                            <span></span>
                        </div><!-- plan-price -->
                        <small>A monthly plan that can be canceled in ten seconds.</small>
                    </div><!-- panel-body -->
                </div><!-- plan -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.feature-wrapper -->

<footer class="container-fluid footer">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">© 2020 Customerce. all rights reserved.</p>
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</footer>

</body>
</html>
