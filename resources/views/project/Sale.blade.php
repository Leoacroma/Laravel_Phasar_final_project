@extends("Project.Template")
@section("content")
     <div class="container d-flex justify-content-center">
        <img src="{{ asset("/post/image/50% OFF.jpg") }}" alt="" width="900px">
    </div>
    <div class="container-field mt-3">
       <div class="row">
           <div class="col-3 ml-">
            <div class="card">
                <div class="card-body">
                    <div class="collection">
                        <div class="header">
                            Sort By
                        </div>
                        <div class="collect-list">
                            <form method="GET">
                                <ul>
                                    <li><input type="submit" value="All" name="sort" style="border: none"></li>
                                    <li><input type="submit" value="Price: Low to High" name="sort" style="border: none"></li>
                                    <li><input type="submit" value="Price: High to Low" name="sort" style="border: none"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="collection">
                        <div class="header">
                            Category
                        </div>
                        <div class="collect-list">
                            <form method="GET">
                                <ul>
                                    <li><input type="submit" value="Clothes" name="genre" style="border: none"></li>
                                    <li><input type="submit" value="Toys" name="genre" style="border: none"></li>
                                    <li><input type="submit" value="School Equipments" name="genre" style="border: none"></li>
                                    <li><input type="submit" value="Electronic" name="genre" style="border: none"></li>
                                    <li><input type="submit" value="Equipments" name="genre" style="border: none"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
           </div>
           <div class="col-9" style="overflow: hidden">
                <h2 style="font-family: 'Dosis', sans-serif; font-size: 50px; font-weight: bold;">Procduct</h2>
                <div class="row">

                    @foreach ($products as $product)
                        @csrf
                        <div class="col-2 mr-1 mt-2" style="border: 1px solid black; padding: 10px; display: flex; flex-direction: column; justify-content: center">
                            <img src="/uploads/products/{{ $product ->image }}" alt="" width="200px" class="mt-5" style="border-radius: 10px;" >
                            <span style="font-size: 30px; font-family: 'Ubuntu Mono', monospace;">{{ $product->name }}</span><br>
                            <span class="badge badge-primary" style="width: 90px">{{ $product ->genre -> name }}</span>
                           <small> <span style="font-size: 15px;">Detail {{ $product->detail }}</span></small><br>
                            <span style="font-size: 15px; color: red;">${{ $product->price }}</span><br>
                            <button class="btn btn-warning"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to chart</a></button>
                        </div>
                    @endforeach
                </div>
           </div>
       </div>
    </div>
@endsection