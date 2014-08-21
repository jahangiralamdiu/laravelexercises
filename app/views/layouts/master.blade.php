<!DOCTYPE html>
<html>

    <head>
        <title></title>

        {{ HTML::style('/css/bootstrap.min.css') }}
        {{ HTML::style('/css/bootstrap-theme.css') }}

    </head>

    <body>

        <div class="container-fluid">

            <div id="nav">
                <div class="navbar navbar-inverse">
                    <a class="navbar-brand">MyMovieDB</a>
                </div> <!-- End "navbar" Div-->
            </div> <!-- End "Nav" Div-->
          
<h2 style="text-align:center">Login</h2>
            <br><br>
            
            <p>Jahangir</p>
            
            @yield('content')

        </div>

        <!-- Javascript Files required for page-->
        <script src="/js/bootstrap.min.js"></script>

    </body>
</html>