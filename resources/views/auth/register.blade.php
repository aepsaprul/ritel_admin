@extends('layouts.app')

@section('content')
<div class="mt-32 w-1/4 z-20 bg-white rounded">
  <form action="{{ route('register.store') }}" method="post" class="border rounded shadow-lg">
    @csrf
    <div class="m-4">
      <div class="text-lg font-semibold"><a href="{{ url('/') }}"><i class="fa fa-arrow-left mr-3"></i></a> Register</div>
    </div>
    <div class="m-4">
      <input type="text" name="name" id="name" class="w-full h-10 pl-3 border rounded-sm outline-none @error('name') is-invalid @enderror" placeholder="Nama Lengkap" autofocus required>
      <em class="text-xs text-slate-400 pl-1">min 3, max 30, </em>
      <em class="text-red-400 text-xs">@error('name') {{ $message }} @enderror</em>
    </div>
    <div class="m-4">
      <input type="email" name="email" id="email" class="w-full h-10 pl-3 border rounded-sm outline-0 @error('email') is-invalid @enderror" placeholder="Email" required>
      <em class="text-xs text-slate-400 pl-1">berupa alamat email</em>
      <em class="text-red-400 text-xs">@error('email') {{ $message }} @enderror</em>
    </div>
    <div class="m-4">
      <input type="password" name="password" id="password" class="w-full h-10 pl-3 border rounded-sm outline-0 @error('password') is-invalid @enderror" placeholder="Password" required>
      <em class="text-xs text-slate-400 pl-1">min 8, minimal 1 simbol</em>
      <em class="text-red-400 text-xs">@error('password') {{ $message }} @enderror</em>
    </div>
    <div class="m-4">
      <input type="password" name="password_confirmation" id="password_confirmation" class="w-full h-10 pl-3 border rounded-sm outline-0" placeholder="Konfirmasi Password" placeholder="Konfirmasi Password">
      <em class="text-xs text-slate-400 pl-1">harus sama dengan password</em>
      <em class="text-red-400 text-xs">@error('password') {{ $message }} @enderror</em>
    </div>
    <div class="m-4">
      <button type="submit" class="w-full p-2 rounded-md bg-sky-600 text-white font-bold uppercase">daftar</button>
    </div>
  </form>
</div>   
@endsection