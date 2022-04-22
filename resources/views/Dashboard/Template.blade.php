<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css") }}" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />  
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-2 left-content">
                <div class="row">
                    <div class="col-12 logo">
                        <a href="/home">MY SHOP</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 menu-lists">
                        <ul class="menu-links">
                            <li><i class="fas fa-home mr-2" style="font-size: 20px"></i><a href="/dash">HOME</a></li>
                            <li><i class="fab fa-stack-overflow mr-2" style="font-size: 20px"></i><a href="/products">STOCK</a></li>
                            {{-- <li><i class="fa-solid fa-cart-shopping "></i><a href="/products">ORDER</a></li>
                            <li><i class="fa-solid fa-sack-dollar mr-2" style="font-size: 20px"></i><a href="income.html">INCOME</a></li> --}}
                            <li class="exit" style="background-color: red;"><a href="/home">EXIT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-10 right-content">
                <div class="row">
                    <div class="col-12 top-content">
                        <div class="row justify-content-end">
                            <div class="col-2 profile">
                                <img src="{{ (auth() -> user() -> avatar != 'default.jpg') ? asset('uploads/avatars/'.auth()->user()->avatar) : asset('uploads/avatars/default.jpg') }}" class=" mx-auto d-block" alt="..." width="50px" style="border: 1px solid green; border-radius: 100px">
                                <div class="infor">
                                    <h4 class="mr-5">{{ Auth::user() -> name }}</h4>
                                    <p>{{ Auth::user() -> role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @yield('right-content')
        </div>

    </div>
</body>
</html>