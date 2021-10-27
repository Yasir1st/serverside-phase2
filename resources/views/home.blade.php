<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/homestyle.css')}}">
</head>
<body>

	<div class="container">
		<div class="header">
			<h2>VACCINATION</h2>
			<a href="/api/v1/auth/login"><p>Login</p></a>
		</div>
		<nav class="nav">
			<ul>
				<li><a href="">Consultation</a></li>
				<li><a href="">Register Vaccination</a></li>
				<li><a href="">Choice Location</a></li>
			</ul>
		</nav>
		<div class="home">
			<h3>Consultation</h3>
			<div class="table">

				<table class="t2" cellspacing="10">
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>:</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Age</td>
						<td>:</td>
						<td><input type="text" name=""></td>
					</tr>
				</table>
				<table class="t1">
					<tr>
						<td><textarea type="input" placeholder="Your Consultation..."></textarea></td>
					</tr>
					<tr>
						<td><button type="submit">Send</button></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="register">
			<h3>Register Vaccination</h3>
			<div class="wrap">
				<div class="jenis">
					<h4>Type of Vaccine</h4>
					<div class="vaksin">
						<table>
							<tr>
								<td><p>Sinovac</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
							<tr>
								<td><p>Astra Seneca</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
							<tr>
								<td><p>Pfizer</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
							<tr>
								<td><p>Moderna</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="session">
					<h4>Session Vaccination</h4>
					<div>
						<table>
							<tr>
								<td><p>Session 1</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
							<tr>
								<td><p>Session 2</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
							<tr>
								<td><p>Session 3</p></td>
								<td><input type="checkbox" name=""></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="location">
			<h3>Vaccination Location</h3>
			<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041267.840004286!2d118.16921081977942!3d-2.20979460277519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d92da2454bb4409%3A0xea5cbf202f3370f2!2sSulawesi%20Barat!5e0!3m2!1sid!2sid!4v1635317227931!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div class="footer">
			<p>Copyright 2021-2022</p>
		</div>
	</div>

</body>
</html>