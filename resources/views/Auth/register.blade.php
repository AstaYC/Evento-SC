@extends('layout.signinLayout')
@section('content')

<div class="loginBox"> <img class="user" src="{{asset('img/register-pic.jpg')}}" height="100px" width="100px">
    <h3>Register here</h3>
    <form action="login.php" method="post">
        <div class="inputBox">
             <input id="uname" type="text" name="Username" placeholder="Username">
             <input id="pass" type="password" name="Password" placeholder="Password"> 
             <input id="pass" type="password" name="Password" placeholder="Password"> 
             <input id="pass" type="password" name="Password" placeholder="Password"> 
             <input id="pass" type="password" name="Password" placeholder="Password"> 
        </div> 
        <input type="submit" name="" value="Register">
    </form> 
    <br>
    <a href="/login" style="color: #59238F;">Login</a>
    
</div>
@endsection     