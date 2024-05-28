<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RAIDA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="/formlogin/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/formlogin/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('.jpg');background-size:cover">
			<div class="inner">
				<img src="#" alt="" class="image-1">
				<form autocomplete="off" method="post" action="/login" style="border-radius: 25px">
					@csrf
					<h3><img src="/polisi.png" width="80px"> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <img src="/samapta.png" width="80px"></h3>
					<center><h4 style="color: black; font-size:20px">MONITORING KEGIATAN <br/>PATROLI SAMAPTA POLRES BANJARBARU</h4></center><br/>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" autocomplete="new-password" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password">
					</div>
					<button style="border-radius: 25px; background:red">
						<span>MASUK</span>
					</button>
				</form>
				<img src="#" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="/formlogin/js/jquery-3.3.1.min.js"></script>
		<script src="/formlogin/js/main.js"></script>
		@include('sweetalert::alert')
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

