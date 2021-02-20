<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-beige border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"><img src="{{asset('assets/img/telkom.png')}}" class="img-fluid logo"></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="text-dark" href="{{url('/')}}"><button class="btn btn-danger">Home</button></a>
            <a class="text-dark" href="{{url('/news')}}"><button class="btn btn-danger">News</button></a>
            <a class="text-dark" href="{{url('/dashboard')}}"><button class="btn btn-danger">Dashboard</button></a>
        </nav>
        <!-- Another variation with a button -->
        <div class="input-group" style="width: 15%;">
            <input type="text" class="form-control" placeholder="Search news / content">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    @yield('container');


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery-slim.min.js')}}"><\/script>')
    </script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/holder.min.js')}}"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>

</html>