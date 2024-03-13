
@extends('layout.dashboard')
@section('content')
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Evento Espace d'Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/categorie">
					<i class='bx bxs-group' ></i>
					<span class="text">Categories</span>
				</a>
			</li>
			<li class="active" >
				<a href="/eventValidation">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Event Validation</span>
				</a>
			</li>
			<li>
				<a href="/role">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Permission</span>
				</a>
			</li>
			<li>
				<a href="/user">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">User</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				
				<a href="/home" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text-info">HOME</span>
				</a>
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
			<a href="#" class="nav-link">Event VAlidation</a>
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
			<div class="head-title">
				<div class="left">
					<h1>My Event Validation</h1>
				</div>
				
			</div>


			<div class="container-xl">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-5">
									<h2>Event Validation <b>Management</b></h2>
								</div>
							</div>
						</div>
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
											<a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#recupereWikiModal{{$event->id}}">
												<i class="material-icons">&#xE5CA;</i>
											</a>
									</td>
								</tr>

                       <!-- Delete Medicine Modal -->
                                <div class="modal" id="recupereWikiModal{{$event->id}}">										
                                  <div class="modal-dialog">
											<div class="modal-content">
												<!-- Modal Header -->
												<div class="modal-header">
													<h4 class="modal-title">Validation de WiKi</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<!-- Modal Body -->
												<div class="modal-body">
                                                    <!-- Delete medicine form -->
													<form method="POST" action="/eventValidation/valider">
                                                     @csrf
													    <input type="hidden" name="action" value="delete">
														<input type="hidden" name="id" value="{{$event->id}}">
														<p>Are you sure you want to valider this Event?</p>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
															<button type="submit" class="btn btn-info">Valider event</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
                @endforeach
                         </tbody>
						</table>
					</div>
				</div>
			</div>  
		</main>
	</section>
    @endsection
