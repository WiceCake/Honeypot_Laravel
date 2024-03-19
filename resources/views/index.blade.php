@extends('layouts.app')

@section('title', 'MUTI | Login')

@section('content')
<section class="my-5 py-5">
    <div class="container text-archivo">
        <div class="d-flex justify-content-center">
        <form action="login" method="POST" style="width: 300px;">
        @csrf
            <div class="mb-3">
                <label for="email" class="d-block mb-2">Email</label>
                <input type="email" class="d-block w-100 py-2 px-1" name="email" id="email" placeholder="Email">
                @if ($errors->has('email'))
                    {{$errors->first('email')}}
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="d-block mb-2">Password</label>
                <input type="password" class="d-block w-100 py-2 px-1" name="password" id="password" placeholder="Password">
                @if ($errors->has('password'))
                    {{$errors->first('password')}}
                @endif
            </div>
            <input class="btn btn-main w-100 text-white fw-light rounded-0 fs-6 text-uppercase" type="submit" value="Login">
        </form>
        </div>
    </div>
</section>
@endsection
