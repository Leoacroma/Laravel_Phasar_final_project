<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
    <script src="{{ asset("/css/jquery-3.6.0.min.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css") }}" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />  
    <link rel="stylesheet" href="{{ asset("/css/cart.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/hompagestyle.css") }}">
    <title>Document</title>
</head>

<body>
    <!-- navigation -->
    <div class="container mt-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home" style="font-size: 40px;">MOLAR </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" style="font-size: 18px;" href="/home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="font-size: 18px;" href="/Sale">PRODUCT <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="font-size: 18px;" href="/aboutus">ABOUT US<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                    @auth
                        <a href="/profile" style="color: green"><i class="fas fa-user m-lg-3" style="font-size: 25px; cursor: pointer;"></i></a>
                        <a href="/profile" class="authname" style="color: black">
                            <small class="mr-2" style="font-size: 20px; font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold">{{ Auth::user() -> name }}</small>
                        </a>
                        
                    @endauth

                    @guest
                        <a href="/login" style="color: rgb(209, 202, 202)"><i class="fas fa-user m-lg-3" style="font-size: 25px; cursor: pointer;"></i></a>
                    @endguest
                        <a href="/cart" class="alert alert-danger"   style="color: red; width: 85px; height: 50px; font-size: 20px;" ><i class="fas fa-cart-plus " style=" cursor: pointer;" ></i> {{ count((array) session('cart')) }}</a>
                </form>

                @auth
                    <div class="logout ml-3" >
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger ">Logout</button>
                        </form>
                    </div>    
                @endauth

                @guest
                    <div class="login ml-3" >
                        <a href="/login"><button type="submit" class="btn btn-success ">login</button></a>
                    </div>   
                @endguest
            </div>
        </nav>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
    <!-- footer -->
    <footer class="mt-5">
        <div class="container-field" style="background-color: brown; height: 120px; padding: 10px;">
            <div class="container" style="color: white;">
                <a class="navbar-brand" href="#" style="font-size: 40px; color: white; float: left;">MOLARS</a>
                <p style=" color: white;">@2022 <a href="/home" style="font-family: 'Lobster', cursive; color: white; text-decoration: underline;">MOLARS</a>  All right reserved</p>
                <a href="#" style="color: white; font-size: 20px; text-decoration: underline;">Term of Us</a>
                <a href="#" style="color: white; font-size: 20px; text-decoration: underline;" class="ml-2">Privacy and Cookie Statement</a>
                <a href="#" style="color: white; font-size: 20px; text-decoration: underline;" class="ml-2">Cookie consent</a>
                <a href="#" style="color: white; font-size: 20px; text-decoration: underline;" class="ml-2">Site Map</a>
                <a href="#" style="color: white; font-size: 20px; text-decoration: underline;" class="ml-2">How the site works</a>
                <p style="font-size: 13px;">This is the version of our website addressed to speakers of English in the United States. If you are a resident of another country or region, please select the appropriate version of Tripadvisor for your country or region in the drop-down
                    menu. more</p>

            </div>
        </div>
    </footer>
</body>
@yield('scripts')
</html>