@extends('layouts.layouthome')
@section('container')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
     @foreach($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}$</td>
        <td>
            <form action="{{ route('delete', ['id' => $products->id])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
