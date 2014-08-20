@extends('master')
@section('content')
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
@stop