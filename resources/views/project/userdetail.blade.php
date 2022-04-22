@extends("project.Template")
@section("content")
    <div class="container-field">
        <div class="row">
            <div class="col-3 ml-5">
                <div class="card">
                    <div class="card-body d-fex justify-content-center" style="overflow: hidden; text-align: center">
                        <img src="{{ (auth() -> user() -> avatar != 'default.jpg') ? asset('uploads/avatars/'.auth()->user()->avatar) : asset('uploads/avatars/default.jpg') }}" class=" mx-auto d-block" alt="..." width="200px" style="border: 5px solid red; border-radius: 100px">
                        
                        <h2 style="font-family: 'Dosis', sans-serif; font-size: 30px; font-weight: bolder;">{{ Auth::user() -> name }}</h2>
                        <h2 style="font-family: 'Dosis', sans-serif; font-size: 25px;">{{ Auth::user() -> email }}</h2>
                        <form action="{{ route('pf.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <label >Update Profile Image</label>
                          <input type="file" name="image" id="inputImage"class="form-control @error('image') is-invalid @enderror">
                          @error('image')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                          <input type="submit" class="btn btn-sm btn-primary">
                        </form>
                    </div>
                
                    <div class="row mb-2">
                        <div class="col-8 ml-3">
                            {{-- <a href="/Sub"><button type="submit" class="btn btn-primary">Subscription</button></a> --}}
                        </div>
                        <div class="col-3">
                            <a href="/dash"><button type="submit" class="btn btn-warning">Dashbord</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" style="font-family: 'Dosis', sans-serif; font-weight: bolder; font-size: 20px" class="form-control" id="inputEmail4" value="{{ Auth::user() -> name }}" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" style="font-family: 'Dosis', sans-serif; font-weight: bolder; font-size: 20px" class="form-control" id="inputPassword4" placeholder="Password" value="{{ Auth::user() -> email }}" readonly>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                           
                          </form>
                          <button type="submit" class="btn btn-secondary">Edit</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="/opt"><button type="submit" class="btn btn-warning">More option</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection