<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currenttime and the world clock</title>
    <meta name="description" content="CurrentTime is a website to tell the users Current time of world clock. it is very easy to use.">
    @yield('canonical')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="{{route('home')}}">CurrentTime</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('world.clock')}}">WorldClock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.us')}}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
<div class="alert alert-success">CurrentTime domain is for Sale. if you need this please contact us.</div>

@yield('content')


<div class="jumbotron text-center" style="margin-bottom:0">
    <p><h3>Hi, CurrentTime  domain and idea is for sale.. please contact us if you need this.</h3></p>
</div>

</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140284113-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140284113-1');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->
</html>
