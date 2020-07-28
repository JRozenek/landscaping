<!DOCTYPE html>

<html>
	<head>
		<meta name = 'viewport' content = 'width=device-width, initial-scale = 1' /> 
		<link href = 'main.css' rel = 'stylesheet' type = 'text/css'>	
		<title>J&M Landscaping LTD</title>
	</head>

	<body>
		<header>
			<div class = 'Navbar'>
				<h1 class = 'logo'></h1>

				<nav>
					<li><a href = '#Home'>Home</a></li>
					<li><a href = '#Projects'>Projects</a></li>
					<li><a href = '#Contact'>Contact</a></li>
				</nav>
			</div>
		</header>

		<div class = 'Main'>
			<div id = 'Home'>
				<img src = 'Home.jpg' style = 'width: 1903px; height: 950px;'>
			</div>

			<div id = 'Projects'>
			</div>

			<div id = 'Contact'>
				<p>SEND EMAIL</p>
				<form class = 'contact-form' action = 'contactForm.php' method = 'post'>
					<input type = 'text', name = 'name', placeholder = 'Full Name'>
					<input type = 'text', name = 'mail', placeholder = 'Your Email'>
					<textarea name = 'query' placeholder = 'Query'></textarea>
					<button type = 'submit' name = 'submit'>Send Mail</button>
			</div>
		</div>
	</body>
</html>
