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

    <div class="flex-md-row align-items-center p-3 px-md-12 mb-3 bg-beige border-bottom box-shadow">
        <nav class="my-2 my-md-0 ml-md-5">
            <a class="text-dark" href="{{url('/')}}"><button class="btn btn-danger float-left ml-2">Home</button></a>
            <a class="text-dark" href="{{url('/news')}}"><button class="btn btn-danger float-left ml-2">News</button></a>
            <button class="btn btn-danger float-left ml-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dashboard
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('/dashboard')}}">semua</a>
                <div class="dropdown-divider"></div>
                @foreach($key as $dt)
                <a class="dropdown-item" href="{{url('/dashkat/'.$dt->category_id)}}">{{$dt->name}}</a>
                @endforeach
            </div>
        </nav>
        <!-- Another variation with a button -->
        <div class="input-group float-left pl-2" style="width: 20%;">
            <form action="{{url('/search')}}" method="POST" class="form-inline">
                @csrf
                <input type="text" name="search" class="form-control" style="width: 80%;"
                    placeholder="Search news / content">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <img src="{{asset('assets/img/telkom.png')}}" class="img-fluid float-right mr-5" width="100px">
        <div style="clear: Both;"></div>
    </div>

    @yield('container');


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="{{asset('
            assets / js / vendor / jquery - slim.min.js ')}}"><\/script>')

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
