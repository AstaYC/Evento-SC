
@extends('layout.dashboard')
@section('content')
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="/user">
                <i class='bx bxs-group' ></i>
                <span class="text">USers</span>
            </a>
        </li>
        <li  >
            <a href="/wiki">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">WiKis</span>
            </a>
        </li>
        <li class="active">
            <a href="/categorie">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Categories</span>
            </a>
        </li>
        <li >
            <a href="/tag">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Tags</span>
            </a>
        </li>
        <li>
            <a href="/wikiArchive">
                <i class='bx bxs-archive' ></i>
                <span class="text">Les Wikis Archivee</span>
            </a>
        </li>
        <li>
            <a href="/dachboard">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dachboard</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="/logout" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        @if($errors->any())
        <ul>
          <li>
           {{$errors}}
          </li>
        </ul>
     @endif
     @if(session('status'))
       <div class="alert alert-success">
         {{session('status')}}
       </div>
     @endif

        <div class="head-title">
            <div class="left">
                <h1>My User</h1>
            </div>
            
        </div>


        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>User <b>Management</b></h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover" id="myTable">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nom de User</th>											
                            <th>Email de User</th>											
                            <th>Password User</th>											
                            <th>Role d'User</th>											
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>	
                          @foreach($users as $user)
                          <tr>
                            <td>{{$user->user_id}}</td>
                            <td>{{$user->user_nom}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->role_nom}}</td>
                            <td>
                                <a href="#" class="settings" title="Settings" data-toggle="modal" data-target="#updateCategoryModal{{$user->user_id}}">
                                  <i class="material-icons">&#xE8B8;</i>
                                </a>
                                <a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#deleteCategoryModal{{$user->user_id}}">
                                  <i class="material-icons">&#xE5C9;</i>
                                </a>
                              </td>
                          </tr>  
                        @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </main>
</section>
@foreach($users as $user)

       <!-- modal de update -->
       <div class="modal" id="updateCategoryModal{{$user->id}}">
          <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update Categorie</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Update medicine form -->
                        <form method="POST" action="/user/update">
                            @csrf
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="form-group">
                              <label for="CategorieName">User Name:</label>
                              <input type="text" class="form-control" id="CategorieName" placeholder="UserName" value="{{$user->user_nom}}" name="nom" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="CategorieName">User Email:</label>
                              <input type="text" class="form-control" id="CategorieName" placeholder="UserEmail" value="{{$user->email}}" name="email" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="CategorieName">Add Password:</label>
                              <input type="text" class="form-control" id="CategorieName" placeholder="UserPassword" value="{{$user->password}}" name="password" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="CategorieName">User Role:</label>
                              <select type="text" class="form-control" id="CategorieName" placeholder="UserRole" value="{{$user->role_id}}" name="role_id" required>
                                 @foreach($roles as $role)
                                  <option value="{{$role->id}}">{{$role->nom}}</option>
                                 @endforeach
                              </select>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">update User</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
  <!-- Delete Medicine Modal -->
<div class="modal" id="deleteCategoryModal{{$user->id}}">										
<div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delete Categorie</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Delete medicine form -->
                    <form method="POST" action="/user/delete">
                    @csrf
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <p>Are you sure you want to delete that User?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
