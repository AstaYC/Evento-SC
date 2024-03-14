<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('asset/css/dashboard.css')}}">

	<title>AdminHub</title>
</head>
<body>


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
			<li>
				<a href="/reservation">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservation Validation</span>
				</a>
			</li>
			<li class="active" >
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
			<a href="#" class="nav-link">Dashboard</a>
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
				<img src="assets/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
				</div>
				
			</div>

			<ul class="box-info">

				<li>
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">
						@foreach ($events as $event)?>
					    <h3>{{$event->total}}</h3>
						<p>Total Events</p>
                        @endforeach
					</span>
				</li>

			</ul>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../../public/assets/js/script.js"></script>
</body>
</html>