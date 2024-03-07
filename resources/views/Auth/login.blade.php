@extends('layout.signinLayout')
@section('content')

<div class="loginBox">
    <img class="user" src="{{asset('img/login-pic.jpeg')}}" height="100px" width="100px">
    <h3>Log in here</h3>
    <form action="login.php" method="post">
        <div class="inputBox">
             <input id="uname" type="text" name="Username" placeholder="Username">
             <input id="pass" type="password" name="Password" placeholder="Password"> 
        </div> 
        <input type="submit" name="" value="Login">
    </form> 
    <a href="#">Forget Password <br> </a>
    <br>
    <a href="/register" style="color: #59238F;">Register</a>
    
</div>
@endsection     