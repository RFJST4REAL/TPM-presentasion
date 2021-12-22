@extends('layouts.layouthome')
@section('container')
    <form action="{{ url('/addproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Product Name</label>
            <input name="title" required value="{{ old('title') }}" type="text" class="form-control rounded-top @error ('name') is invalid @enderror" id="formGroupExampleInput" placeholder="Input Title">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand product</label>
            <input name="brand" required value="{{ old('brand') }}" type="text" class="form-control rounded-top @error ('brand') is invalid @enderror" id="formGroupExampleInput" placeholder="Input Brand">
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form  method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-6">
                    <input type="file" name="image" required value="{{ old('image') }}" class="form-control rounded-top @error ('image') is invalid @enderror">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" required value="{{ old('price') }}" type="numeric"  class="form-control rounded-top @error ('price') is invalid @enderror" id="formGroupExampleInput" placeholder="Input Price $">
        </div>
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
    
@endsection
