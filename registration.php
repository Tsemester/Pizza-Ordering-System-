
<head>
	<meta charset="utf-8">
	<title>Pizzeria</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/sign-style.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images/menu-pizza.jpg" alt="menu">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
				</div>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="first_name" id="first_name" class="input-text" required >
								<span class="label">First Name </span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="last_name" id="last_name" class="input-text" required  >
								<span class="label">Last Name </span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email" id="email" class="input-text" required >
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="confirm_password" id="confirm_password" class="input-text" required>
								<span class="label">Confirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
						
						   
							<button type="submit" name="submit" class="register" onclick="register_now()" >Register</button>
						</div>
					</div>
					
				
					<?php
					echo  "none"; 
					?>
					
				
				</form>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-in">
							<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Sign In">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>

