@extends('admindashboard.Template')
@section('right-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>STOCK</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-2" style="float: right" href="{{ route('products.create') }}"> Add New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered mb-5">
        <tr>
            <th>Date_time</th>
            <th>ID</th>
            <th>Product Name</th>
            <th>Genre</th>
            <th>Detial</th>
            <th width="280px">Price</th>
            <th>Image</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product -> showDate() }}</td>
            <td>{{ ++$i }}</td>
            <td>{{ $product ->name }}</td>
            <td>{{ $product ->genre -> name }}</td>
            <td>{{ $product ->detail }}</td>
            <td>{{ $product ->price }}</td>
            <td><img src="/uploads/products/{{ $product ->image }}" alt="" width="100px"></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $products->links() !!} --}}
      
@endsection