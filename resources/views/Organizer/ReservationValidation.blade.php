
@extends('layout.dashboard')
@section('content')
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Evento Espace d'Organisateur</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/event">
					<i class='bx bxs-group' ></i>
					<span class="text">Events</span>
				</a>
			</li>
			<li class="active" >
				<a href="/reservation">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservation Validation</span>
				</a>
			</li>
			<li>
				<a href="/statistiqueOrganizer">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">DashBoard</span>
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
			<a href="#" class="nav-link">Tickets VAlidation</a>
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
					<h1>My Tickets Validation</h1>
				</div>
				
			</div>


			<div class="container-xl">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-5">
									<h2>Tickets Validation <b>Management</b></h2>
								</div>
							</div>
						</div>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>ID</th>						
									<th>Client</th>						
									<th>Event</th>						
									<th>Status</th>						
									<th>Action</th>
								</tr>
							</thead>
							<tbody>	
                @foreach($reservations as $reservation)
								<tr>
									<td>{{$reservation->id}}</td>
									<td>{{$reservation->user_name}}</td>
									<td>{{$reservation->titre}}</td>
									<td>{{$reservation->status}}</td>
									<td>
											<a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#validerTicketModal{{$reservation->id}}">
												<i class="material-icons">&#xE5CA;</i>
											</a>
                                            <a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#rejeterTicketModal{{$reservation->id}}">
												<i class="material-icons">&#xE5C9;</i>
											</a>
									</td>
								</tr>

                       <!-- Valider  Modal -->
                                <div class="modal" id="validerTicketModal{{$reservation->id}}">										
                                  <div class="modal-dialog">
											<div class="modal-content">
												<!-- Modal Header -->
												<div class="modal-header">
													<h4 class="modal-title">Validation de Ticket "{{$reservation->titre}}"</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<!-- Modal Body -->
												<div class="modal-body">
                                                    <!-- Delete medicine form -->
													<form method="POST" action="/reservation/validation">
                                                     @csrf
													    <input type="hidden" name="action" value="delete">
														<input type="hidden" name="id" value="{{$reservation->id}}">
                                                        <input type="hidden" name="status" value="accepted">
														<p>Are you sure you want to valider this reservation?</p>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
															<button type="submit" class="btn btn-info">Valider Reservation</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

                                    
                       <!-- rejeter  Modal -->
                                <div class="modal" id="rejeterTicketModal{{$reservation->id}}">										
                                    <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                      <h4 class="modal-title">Rejetation de Ticket "{{$reservation->titre}}"</h4>
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
                                                  <!-- Modal Body -->
                                                  <div class="modal-body">
                                                      <!-- Delete medicine form -->
                                                      <form method="POST" action="/reservation/validation">
                                                       @csrf
                                                          <input type="hidden" name="action" value="delete">
                                                          <input type="hidden" name="id" value="{{$reservation->id}}">
                                                          <input type="hidden" name="status" value="rejected">
                                                          <p>Are you sure you want to rejeter this reservation?</p>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                              <button type="submit" class="btn btn-danger">Rejeter Reservation</button>
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
