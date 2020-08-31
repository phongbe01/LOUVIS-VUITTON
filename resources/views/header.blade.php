<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}" type="text/css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/542d0c4866.js" crossorigin="anonymous"></script>

    <title>LOUVIS VUITTON</title>
</head>
<body>
    <div class="header">
        <nav class="lv-header-tools">
            <ul class="lv-header-tools_services">
                <li class="lv-header-tools_services-item"><a href=""s>Ship to: VietNam</a></li>
                <li class="lv-header-tools_services-item far fa-question-circle"><a href="">Can we help you?</a></li>
                <li class="lv-header-tools_services-item fas fa-mobile-alt"><a href="">+08454.Phong</a></li>
            </ul>
            <nav class="lv-header-main-nav navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" style="font-size: 1.25em;">
                        <a href="" class="fas fa-map-marked-alt"></a>
                    </li>
                    <li class="nav-item" style="font-size: 1.25em;">
                        <a href="{{route('login.facebook')}}" class=" fab fa-facebook"></a>
                    </li>
                    <li class="nav-item" style="font-size: 1.25em;">
                        <a href="" class="fab fa-google"></a>
                    </li>
                </ul>
            </nav>
        </nav>
        <div class="lv-header-navigation">
            <div class="lv-logo">
                <div class="lv-logo-wrap">

                </div>
            </div>
            <nav class="lv-header-main-nav navbar navbar-expand-lg navbar-light lv-header-tools_tools ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="" class="nav-link">NEW</a>
                    </li>
                    <li class="nav-item active">
                        <a href="" class="nav-link">WOMAN</a>
                    </li>
                    <li class="nav-item active">
                        <a href="" class="nav-link">MAN</a>
                    </li>
                    <li class="nav-item active ">
                        <a href="" class="nav-link">MAGAZINE</a>
                    </li>
                </ul>
            </nav>
            <form action="" method="get" class="lv-search-form">
                @csrf
                <div class="lv-search-input">
                    <div class="lv-search-placeholder">
                        <span class="fas fa-search lv-search-icon " aria-hidden="true"></span>
                        <input type="search" placeholder="Search.." class="lv-search-input-input" name="key">
                    </div>
                </div>
            </form>
            <nav class="lv-header-main-nav navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav mr-auto">
                    @guest
                        <li class="nav-item ">
                            <a href="{{route('login')}}" class=" far fa-user" style="font-size: 1.25em;"></a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="font-size: 1em;" class=" dropdown-toggle far fa-user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="">
                                    {{ Auth::user()->roleID }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item active ">
                        <a href="" class=" fas fa-shopping-cart" style="font-size: 1em;"><span class="badge badge-light">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
