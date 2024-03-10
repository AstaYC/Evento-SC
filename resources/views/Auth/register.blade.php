@extends('layout.signinLayout')
@section('content')
<ul>

    @foreach ($errors->all() as $errors)
        <li class="alert alert-danger"> {{$errors}}</li>
    @endforeach
  </ul>

<div class="loginBox"> <img class="user" src="{{asset('img/register-pic.jpg')}}" height="100px" width="100px">
    <h3>Register here</h3>
    <form action="/register" method="POST">
        @csrf
        <div class="inputBox">
             <input id="uname" type="text" name="nom" placeholder="Votre Nom">
             <input id="pass" type="text" name="email" placeholder="Votre Email">
             <input id="pass" type="password" name="password" placeholder="Password">
             <input id="pass" type="password" name="password_confirmation" placeholder="Confirme the Password">
        </div> 
        <input type="submit" name="" value="Register">
    </form> 
    <br>
    <a href="/login" style="color: #59238F;">Login</a>
    
</div>
@endsection