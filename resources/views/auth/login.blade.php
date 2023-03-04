@extends('layouts.app')

@section('content')
<div class="mt-32 w-1/4">
  <form action="{{ route('login.authenticate') }}" method="post" class="border rounded shadow-lg">
    @csrf
    <div class="m-4">
      <div class="text-lg font-semibold"><a href="{{ url('/') }}"><i class="fa fa-arrow-left mr-3"></i></a> Login</div>
    </div>
    <div class="m-4">
      <input type="email" name="email" id="email" class="w-full h-10 pl-3 border rounded-sm outline-0 @error('email') is-invalid @enderror" placeholder="Email">
      @error('email') {{ $message }} @enderror
    </div>
    <div class="m-4">
      <input type="password" name="password" id="password" class="w-full h-10 pl-3 border rounded-sm outline-0" placeholder="Password">
    </div>
    <div class="mx-4 my-5">
      <label for="remember" class="flex items-center">
        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 mr-2 outline-0"> <span>Ingat Saya</span>
      </label>
    </div>
    <div class="m-4">
      <button type="submit" class="w-full p-2 rounded-md bg-sky-600 text-white font-bold uppercase">masuk</button>
    </div>
  </form> 
</div>   
@endsection