@extends('layout.dashboard')
@section('content')
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li lass="active">
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
			<li c>
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
			<li class="active">
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
			<a href="#" class="nav-link">WiKis Archivée</a>
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
					<h1>My Wikis Archivée</h1>
				</div>
				
			</div>


			<div class="container-xl">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-5">
									<h2>Events <b>Management</b></h2>
								</div>
                <div class="col-sm-7">
									<!-- <a href="" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Categories</span></a> -->
									<a href="" class="btn btn-secondary" data-toggle="modal" data-target="#addeventModal"><i class="material-icons">&#xE147;</i> <span>Add New WiKi</span></a>				
								</div>
							</div>
						</div>

            {{-- add model --}}

            <div class="modal" id="addeventModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title text-primary">Add New Categorie</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal Body -->
                  <div class="modal-body">
                    <!-- Add medicine form -->
                    <form method="POST" action="/event/add" enctype="multipart/form-data">
                      @csrf
                      <!-- Input fields for medicine details -->
                      <div class="form-group">
                        <label for="CategorieName">Image d'Event</label>
                        <input type="file" class="form-control" id="CategorieName" placeholder="Event Image" name="images" required>
                        <label for="CategorieName">Titre</label>
                        <input type="text" class="form-control" id="CategorieName"  name="titre" required>
                        <label for="CategorieName">Organization</label>
                        <input type="text" class="form-control" id="CategorieName"  name="organization" required>
                        <label for="CategorieName">Description</label>
                        <textarea type="text" class="form-control" id="CategorieName"  name="description" required></textarea>
                        <label for="CategorieName">Date</label>
                        <input type="date" class="form-control" id="CategorieName"  name="date" required>
                        <label for="CategorieName">Heure</label>
                        <input type="time" class="form-control" id="CategorieName"  name="heure" required>
                        <label for="CategorieName">Lieu</label>
                        <input type="text" class="form-control" id="CategorieName"  name="lieu" required>
                        <label for="CategorieName">Places</label>
                        <input type="number" class="form-control" id="CategorieName"  name="places" required>
                        <label for="CategorieName">Categorie</label>
                        <select class="form-control" name="categorie_id" id="">
                          @foreach ($categories as $categorie)
                          <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                          @endforeach
                        </select>  
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary">Add Event</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            {{-- add model fin --}}


						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Photo d'Event</th>						
									<th>Titre</th>						
									<th>Organization</th>						
									<th>Description</th>						
									<th>Date</th>						
									<th>Heure</th>
									<th>Lieu</th>
									<th>Places</th>
									<th>Categorie</th>
									<th>Crée Par</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>	
                @foreach($events as $event)
								<tr>
                  <td><img src="{{ isset($event->images) ? asset('img/'.$event->images) : 'placeholder_image_url' }}" width="50px"></td>
									<td>{{$event->titre}}</td>
									<td>{{$event->organization}}</td>
									<td>{{$event->description}}</td>
									<td>{{$event->date}}</td>
									<td>{{$event->heure}}</td>
									<td>{{$event->lieu}}</td>
									<td>{{$event->places}}</td>
									<td>{{$event->nom}}</td>
									<td>{{$event->username}}</td>
									<td>
                    <a href="#" class="settings" title="Settings" data-toggle="modal" data-target="#updateeventModal{{$event->id}}">
                      <i class="material-icons">&#xE8B8;</i>
                    </a>

  									<a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#deleteeventModal{{$event->id}}">
											<i class="material-icons">&#xE5C9;</i>
										</a>

                    <a href="#" class="validation" title="validation" data-toggle="modal" data-target="#validationeventModal{{$event->id}}">
											<i class="material-icons">&#xe877;</i>
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
@foreach($events as $event)
  {{-- edit model --}}
  <div class="modal" id="updateeventModal{{$event->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-primary">Add New Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <!-- Add medicine form -->
          <form method="POST" action="/event/update" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="{{$event->id}}">
            <!-- Input fields for medicine details -->
            <div class="form-group">
              <label for="CategorieName">Image d'event</label>
              <input type="file" class="form-control" id="CategorieName" placeholder="Event Image" name="images" required>
              <label for="CategorieName">Titre</label>
              <input type="text" class="form-control" id="CategorieName"  name="titre" value="{{$event->titre}}" required>
              <label for="CategorieName">Organization</label>
              <input type="text" class="form-control" id="CategorieName"  name="organization" value="{{$event->organization}}" required>
              <label for="CategorieName">Description</label>
              <textarea type="text" class="form-control" id="CategorieName"  name="description" required>{{$event->description}}</textarea>
              <label for="CategorieName">Date</label>
              <input type="date" class="form-control" id="CategorieName"  name="date" value="{{$event->date}}" required>
              <label for="CategorieName">Heure</label>
              <input type="time" class="form-control" id="CategorieName"  name="heure" value="{{$event->heure}}" required>
              <label for="CategorieName">Lieu</label>
              <input type="text" class="form-control" id="CategorieName"  name="lieu" value="{{$event->lieu}}" required>
              <label for="CategorieName">Places</label>
              <input type="number" class="form-control" id="CategorieName"  name="places" value="{{$event->places}}" required>
              <label for="CategorieName">Categorie</label>
              <select class="form-control" name="categorie_id" id="">
                @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                @endforeach
              </select>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="add" class="btn btn-primary">update Event</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End edit model --}}

  {{-- delete model --}}

  <div class="modal" id="deleteeventModal{{$event->id}}">										
    <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Event</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <!-- Delete medicine form -->
              <form method="POST" action="/event/delete">
              @csrf
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="{{$event->id}}">
                <p>Are you sure you want to delete this Event?</p>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete Event</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {{--  end delete model --}}

      {{-- validation model --}}

      <div class="modal" id="validationeventModal{{$event->id}}">										
        <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Type de validation Event</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                  <!-- Delete medicine form -->
                  <form method="POST" action="/event/typeValidation">
                  @csrf
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="{{$event->id}}">

                    <label for="validation">Type de validation</label>
                    <select class="form-control" name="validation" id="">
                      <option value="automatic">Automatic</option>
                      <option value="manual">Manual</option>
                    </select>                      
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">validation Event</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
  @endforeach
  @endsection
