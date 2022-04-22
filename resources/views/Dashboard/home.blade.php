@extends('Dashboard.template')
@section('right-content') 
            {{-- <div class="col-10 right-content">
                <div class="row">
                    <div class="col-12 top-content">
                        <div class="row justify-content-end">
                            <div class="col-2 profile">
                                <img src="{{ (auth() -> user() -> avatar != 'default.jpg') ? asset('uploads/avatars/'.auth()->user()->avatar) : asset('uploads/avatars/default.jpg') }}" class=" mx-auto d-block" alt="..." width="50px" style="border: 1px solid green; border-radius: 100px">
                                <div class="infor">
                                    <h4 class="mr-5">{{ Auth::user() -> name }}</h4>
                                    <p>SELLER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-12 buttom-content">

                        <div class="row" >
                            <div class="col-12 order">
                                <h5>ORDER : 1 <small style="float: right; margin-right: 5px">recipt</small></h5>

                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px; ">
                            <div class="col-12 stock">
                                <?php $products =DB::table("products")->count();?>
                                <h5>Product : <?php print_r($products); ?> <small style="float: right; margin-right: 5px">type</small></h5>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-12 income">
                                <h5>INCOME : 100.00$ <small style="float: right; margin-right: 5px">Dollar</small></h5>
                            </div>  
                        </div>
                        
                        
                    </div>
                </div>
            </div>
@endsection