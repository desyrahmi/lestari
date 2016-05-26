@extends('base.base')

@section('title', 'Lestari')

@section('content')
        <!-- Navbar start Here -->
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
<!-- End of Navbar -->

<!-- Jumbotron -->
<div class="jumbotron banner">
    <div class="container banner-deskripsi">
        <div class="lestari-banner">
            <p>Lestari.in</p>
        </div>
        <p>Memudahkan anda untuk memberikan aksi dalam melestarikan lingkungan</p>
    </div>
</div>
<!-- End of jumbotron -->

<div class="container home-artikel">
    <div class="col-md-8 bag-artikel">
        <div class="artikel">
            <h3>Artikel 1</h3>
            <img src="">
            <p>tanggal</p>
            <p>-- deskripsi -- Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            <a href="artikel.html" class="btn btn-success">Read More</a>
        </div>
        <hr>
        <div class="artikel">
            <h3>Artikel 1</h3>
            <img src="">
            <p>tangal</p>
            <p>-- deskripsi -- Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            <a href="artikel.html" class="btn btn-success">Read More</a>
        </div>
    </div>
    <div class="col-md-4 list-group">
        <a href="event.html" class="list-group-item">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">Judul Event 1</h4>
                </div>
                <div class="panel-body">
                    <div class="container">Panel content</div>
                </div>
            </div>
        </a>
        <a href="event.html" class="list-group-item">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">Judul Event 1</h4>
                </div>
                <div class="panel-body">
                    <div class="container">Panel content</div>
                </div>
            </div>
        </a>
        <a href="event.html" class="list-group-item">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">Judul Event 1</h4>
                </div>
                <div class="panel-body">
                    <div class="container">Panel content</div>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- End Artikel -->

<div class="jumbotron donasi">
    <div align="center" class="donasi-head">
    <h3>Mari beraksi melestarikan lingkungan</h3>
    <p>Kami mempermudah anda untuk melakukan perubahan</p>
</div>
<div class="container col-md-12">
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">Bagaimana cara kami berkerja</h4>
            </div>
            <div class="panel-body">
                <div class="container">Panel content</div>
                <p>Kami berkera dengans enang hati balblallblasldj6awgd aksjhdgyagw haga hjahfgay</p>
                <a class="btn btn-success">donasi</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">Bagaimana cara kami berkerja</h4>
            </div>
            <div class="panel-body">
                <div class="container">Panel content</div>
                <p>Kami berkera dengans enang hati balblallblasldj6awgd aksjhdgyagw haga hjahfgay</p>
                <a class="btn btn-success">donasi</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">Bagaimana cara kami berkerja</h4>
            </div>
            <div class="panel-body">
                <div class="container">Panel content</div>
                <p>Kami berkera dengans enang hati balblallblasldj6awgd aksjhdgyagw haga hjahfgay</p>
                <a class="btn btn-success">donasi</a>
            </div>
        </div>
    </div>
</div>
</div>

<!--Section Footer-->
<footer class="footer">
    <div class="container">
        <div class="col-md-4 lestari">
            Lestari.in
        </div>
        <div class="col-md-2 col-sm-4 col-xs-12">
            <p class="judul">Tentang Kami</p>
            <ul class="nav">
                <li><a href="http://wecare.id/about">Lestari.in</a></li>
                <li><a href="http://wecare.id/faq">FAQ</a></li>
                <li><a href="http://charitylights.org/blog">Article</a></li>
                <li><a href="http://charitylights.org/blog">Events</a></li>
                <li><a href="http://charitylights.org/blog">Donasi</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-12">
            <p class="judul">Hubungi Kami</p>
            <ul class="nav">
                <li><a href="http://twitter.com/IDWeCare">Twitter</a></li>
                <li><a href="https://www.facebook.com/idwecare">Facebook</a></li>
                <li><a href="http://wecare.id/contact">Kontak</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-12">
            <p class="judul">Credits</p>
            <ul class="nav">
                <li><a href="http://getbootsstrap.com">Bootstrap</a></li>
                <li><a href="https://laravel.com">Laravel</a></li>
                <li><a href="http://subtlepatterns.com/">Subtle Patterns</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--Copyright        -->
<div class="copyright">
    <div class="container text-center"><span>Copyrights © SoupAStar | Desy Nurbaiti R, Nafiar Rahmansyah, Rafiar Rahmansyah</span></div>
</div>
<!--/Section Copyright-->

<!-- Jquery dipanggil disini -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Javascript dipanggil disini -->
<script src="js/bootstrap.min.js"></script>
@endsection