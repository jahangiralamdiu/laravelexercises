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
            
            <div class="row">

                <div class="well col-md-6 col-md-offset-3" >
                    <form> 
                        <input type="text" class="input-lg" id="username" name="username" placeholder="Username">                       
                        <input type="password" class="input-lg" id="password" name="password" placeholder="Password">
                        <br><br>
                        <button class="btn-lg btn-success" type="submit" value="Login">Login</button>
                    </form>
                </div>
                
                </div>

        </div>

        <!-- Javascript Files required for page-->
        <script src="/js/bootstrap.min.js"></script>

    </body>
</html>