@extends('project.Template')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h2>ABOUT COMPANY PAGE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-6">
                <img src="{{ asset('/post/image/company.jpg') }}" alt="" width="500px">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <img src="{{ asset('/post/image/our value.png') }}" alt="" width="500px">
            </div>
            <div class="col-6">
              
                <h2>OUR VALUES</h2>
                <b>MISSION: Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row " >
            <div class="col-12 d-flex justify-content-center">
                <h2>MEET OUR CREATOR</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('/post/image/vuth.png') }}" alt="" width="200px" style="border-radius: 100px">
            </div>
            <div class="col-9 mt-2">
                <h2>Mr. Seang Sovanpunhavuth</h2>
                <h5>Role: Developer</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vero doloribus ex maxime nesciunt harum adipisci ad atque molestias, repellat officia provident animi, libero aliquid praesentium accusamus minus nam soluta?</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('/post/image/sak.jpg') }}" alt="" width="200px" style="border-radius: 100px">
            </div>
            <div class="col-9 mt-2">
                <h2>Mr. Am RathySak</h2>
                <h5>Role: UX/UI</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vero doloribus ex maxime nesciunt harum adipisci ad atque molestias, repellat officia provident animi, libero aliquid praesentium accusamus minus nam soluta?</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('/post/image/mengleap.jpg') }}" alt="" width="200px" height="160px" style="border-radius: 100px">
            </div>
            <div class="col-9 mt-2">
                <h2>Mr. Phally Mengleap</h2>
                <h5>Role: Ideator</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vero doloribus ex maxime nesciunt harum adipisci ad atque molestias, repellat officia provident animi, libero aliquid praesentium accusamus minus nam soluta?</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('/post/image/neng.jpg') }}" alt="" width="200px" style="border-radius: 100px">
            </div>
            <div class="col-9 mt-2">
                <h2>Ms. Rith Sreyneng</h2>
                <h5>Role: Designer</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vero doloribus ex maxime nesciunt harum adipisci ad atque molestias, repellat officia provident animi, libero aliquid praesentium accusamus minus nam soluta?</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <img src="{{ asset('/post/image/pich.jpg') }}" alt="" width="200px" style="border-radius: 100px">
            </div>
            <div class="col-9 mt-2">
                <h2>Mr. Seang Sovanpunhavuth</h2>
                <h5>Role: Web-Tester</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vero doloribus ex maxime nesciunt harum adipisci ad atque molestias, repellat officia provident animi, libero aliquid praesentium accusamus minus nam soluta?</p>
            </div>
        </div>
        
    </div>

@endsection