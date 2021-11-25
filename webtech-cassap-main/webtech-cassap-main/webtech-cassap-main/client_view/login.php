<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./style.css" />
		<title>Login</title>
	</head>

	<body>
		<div class="login-main">
			<div class="column login-wrapper">
			</div>

			<div class="column col">
				<form action="../views/dashboard.php" method="POST">
					<h3 class="mb-5">Great to see you again</h3>
					<div class="mb-3">
						<label for="name" class="form-label">Username</label>
						<input
							type="text"
							class="form-control"
							id="name"
							name="username"
							required
						/>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" required/>
					</div>
					<div class="login mb-3">
						<button type="submit" class="btn btn-primary" name="login">Login</button>
					</div>
					<div class="form-text">
						If you have forgotten your password, contact the administrator
					</div>
				</form>
			</div>
		</div>
		
	</body>
	<footer class="footer-main p-2 d-flex justify-content-center ">
		Career Services department @2007
	</footer>
</html>