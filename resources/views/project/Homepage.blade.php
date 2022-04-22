@extends('project.Template')
@section('content')
    <!-- advertistment -->
    <div class="container">
        <div class="row">
            <div class="col-6 img" style="overflow: hidden;">
                <img src="{{ asset("/post/image/Big Poster.jpg") }}" alt="">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="content" style="width: 600px;">
                    <span style="font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold;">Avilable Now</span><br>
                    <a href="#" class="starback">50% OFF <br> For this Khmer New Year </a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga cumque ut libero aspernatur quasi voluptatum, repellendus at numquam facilis doloremque ex id obcaecati, perspiciatis vitae corporis, a itaque exercitationem placeat? </p>
                    <a href="/Sale"><button class="btn btn-danger" style="width: 200px; height: 50px; font-size: 15px;">Shop Now</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion -->
    <div class="container-field">
        <div class="container d-flex justify-content-center mt-5">
            <h2 style="font-family: 'Dosis', sans-serif; font-size: 50px; font-weight: bold;">Promotion</h2>
        </div>
        <div class="row" style="overflow: hidden">
            <div class="col-3">
                <a href="/Sale"><img src="{{ asset("/post/image/Bright Yellow Printed Postar Sale Summer.jpg") }}" alt="" width="300px" class="ml-5 mt-5" style="cursor: pointer;" ></a>
                <br><span class="ml-5"><a href="#"  style="color: black; font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold;">From ADIDAS</a></span>
            </div>
            <div class="col-3">
                <a href="/Sale"><img src="{{ asset("/post/image/new collection (Poster).jpg") }}" alt="" width="300px" class="ml-5 mt-5" style="cursor: pointer;"></a>
                <br><span class="ml-5"><a href="#"  style="color: black; font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold;">From Gucci</a></span>
            </div>
            <div class="col-3">
                <a href="/Sale"><img src="{{ asset("/post/image/new collection (Poster) (1).jpg") }}" alt="" width="300px" class="ml-5 mt-5" style="cursor: pointer;" ></a>
                <br><span class="ml-5"><a href="#"  style="color: black; font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold;">From Skecher</a></span>
            </div>
            <div class="col-3">
                <a href="/Sale"><img src="{{ asset("/post/image/new collection (Poster) (2).jpg") }}" alt="" width="300px" class="ml-5 mt-5" style="cursor: pointer;" onclick="reallygreat()"></a>
                <br><span class="ml-5"><a href="#"  style="color: black; font-family: 'Alegreya Sans SC', sans-serif; font-weight: bold;">From ReallyGreat</a></span>
            </div>
            
        </div>
        
        
    </div>    
@endsection