@extends('layouts.register')
@section('regis')
<form action="/register" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account at Shoppil.</p>
      <hr>

    <div class='form-floating'>
    <input type="text" placeholder="Enter Name" name="name" required value="{{ old('name') }}" class="form-control rounded-top @error ('name') is invalid @enderror" id="name" required>
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class='form-floating'>
        <input type="text" placeholder="Enter Name" name="username"  required value="{{ old('username') }}" class="form-control rounded-top @error ('username') is invalid @enderror" id="username" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
    </div>

    <div class='form-floating'>
        <input type="email" placeholder="email" name="email" required value="{{ old('email') }}" class="form-control rounded-top @error ('email') is invalid @enderror" id="email" required>
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
    </div>

    <div class='form-floating'>
        <input type="password" placeholder="password" name="password" class="form-control rounded-top @error ('password') is invalid @enderror" id="password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
    </div>

      <p>By creating an account you agree to our <a href="/register">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="/Login">Sign in</a>.</p>
        <p><a href="/">Cancel</a>.</p>
    </div>
</form>
@endsection
