@extends('layouts.app')

@section('title', 'MUTI | Login')

@section('content')
<section id="login">
    <form action="dashboard">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password">
        </div>
        <input class="btn btn-form" type="submit" value="Login">
    </form>
</section>

@endsection
