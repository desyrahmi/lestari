@extends('base.base')

@section('title', 'Lestari')

@section('navbar')
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Logo -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">Lestari.in</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data->
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="navbar-right nav-button">
                    <li><a class="btn btn-default" href="register.html">Register</a></li>
                    <li><a class="btn btn-primary" href="login.html">Log-in</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" target="_blank">Artikel</a></li>
                    <li><a href="#" target="_blank">Event</a></li>
                    <li><a href="#" target="_blank">Donasi</a></li>
                    <li><a href="#" target="_blank">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Login</h3>
                </div>
                <div class="panel-body">
                    <form role="form">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-sm" placeholder="Password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                <a href="#" class="pull-right">Forgot Password?</a>
                            </label>
                        </div>

                        <input type="submit" value="Login" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
            <div class="text-center">
                <a href="register.html" >Don't have an account? Register</a>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
@endsection