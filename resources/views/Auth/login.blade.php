@extends('layout.signinLayout')
@section('content')

<div class="loginBox">
    <img class="user" src="{{asset('img/login-pic.jpeg')}}" height="100px" width="100px">
    <h3>Log in here</h3>
    <form action="/login" method="POST">
        <div class="inputBox">
             @csrf
             <input id="uname" type="text" name="email" placeholder="Username">
             <input id="pass" type="password" name="password" placeholder="Password"> 
        </div> 
        <input type="submit" name="" value="Login">
    </form> 
    <a href="/forgotPassword">Forget Password <br> </a>
    <br>
    <a href="/register" style="color: #59238F;">Register</a>
    
</div>
@endsection     