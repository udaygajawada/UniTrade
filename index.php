<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

		body {
			min-width: 630px;
		}

		
		
		#container .column {
			position: relative;
			float: left;
		}
		
		#center {
			padding: 10px 20px;
			width: 100%;
		}
		
		
		
		#footer {
			clear: both;
		}
		
		* html #left {
			left: 150px;
		}


		#container {
			overflow: hidden;
		}

		#container .column {
			padding-bottom: 1001em;
			margin-bottom: -1000em;
		}

|
		* html body {
			overflow: hidden;
		}
		
		* html #footer-wrapper {
			float: left;
			position: relative;
			width: 100%;
			padding-bottom: 10010px;
			margin-bottom: -10000px;
			background: #fff;
		}

		body {
			margin: 0;
			padding: 0;
			font-family:Sans-serif;
			line-height: 1.5em;
		}
		
		p {
			color: #555;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: darkgreen;
			text-decoration: none;
		}

		#header, #footer {
			font-size: large;
			padding: 0.3em;
			background: #BCCE98;
		}
		#header{
			height:10%;
		}
		#footer{
			height:5%
		}
		

		#center {
			background: #fff;
			height:78%;
		}

		#container .column {
			padding-top: 1em;
		}
		
	</style>
	
	<script type="text/javascript">
		function validateForm(action){

		   var re=/^[0-9]*/;
		   var firstname = document.forms["regform"]["fname"].value;
		   if(firstname == ""){
			alert("First name cannot be empty");
			return false;
			}
			
			var re=/^[0-9]*/;
		   var lastname = document.forms["regform"]["lname"].value;
		   if(lastname == ""){
			alert("Last name cannot be empty");
			return false;
			}
		   
		   var re = /^[a-z 0-9]{4,9}(@kent.edu)/;
		   var email = document.forms["regform"]["emailid"].value;
		   if(!re.test(email)){
			alert("Please Enter Valid Kent Email Id");
			return false;
		   }
		  
		   var bannerregex=/^[0-9]{9}/;
		   var banner = document.forms["regform"]["bannerid"].value;
		   if(!bannerregex.test(banner) || banner.length != 9){
			alert("Please enter a valid Banner id");
			return false;
			}
			
			var password = document.forms["regform"]["pswd"].value;
			var conpassword = document.forms["regform"]["rpswd"].value;
			if(password == ""){
			alert("Password cannot be empty");
			return false;
			}
			if(password != conpassword){
			alert("Password do not match.please Enter again");
			return false;
			}
			
			alert("Confirmation pin was sent to your email id, Please type the pin in the space provided. ");
			
			
			document.forms["regform"].action=action;
			document.forms["regform"].submit();
		}

		function validateForm1(action){
			var re2 = /^[a-z 0-9]{4,9}(@kent.edu)/;
		   var email2 = document.forms["pwdform"]["lstpwdemail"].value;
		   if(!re2.test(email2)){
			alert("Please Enter Valid Kent Email Id");
			return false;
		   }
		   
			alert("Confirmation pin was sent to your email id, Please enter the pin to reset your password.");
			
			document.forms["pwdform"].action=action;
			document.forms["pwdform"].submit();
		}
		</script>
</head>

<body>

	<header id="header"><p>Header...</p></header>

	<div id="container">

		<main id="center" class="column">
			<form action="loginpage.php" method="post">
				<h2 style="text-align:center">User Login</h2>

				  <div class="container">
					<label><b>Email ID</b></label>
					<input type="text" placeholder="Enter Email ID" name="username" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
						
					<button class = "submit" type="submit">Login</button>
				   
				  </div>

				  <div class="container" style="background-color:#f1f1f1">
					<a class = "form" id="usrreg" href="#">New User Registration</a>
					<a class = "form" id="lstpwd" href="#" style="float:right">Forgot password?</a>
				  </div>
			</form>								
		</main>
		<!-- User registration Modal-->
		<div id="modalusrreg" class="modal">
		  <!-- User Registration Modal content -->
		  <div class="modal-content">
			<span id = "close" class="closeusrreg">&times;</span>
			<div class="usrregdiv">
				<form class="usrregform" name="regform" action="" method="post">
					<h2>Sign Up Form</h2>
					<label><b>Firstname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" placeholder="First Name" name="fname" style="width:50%" required></br> 
					<label><b>Lastname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" placeholder="Last Name" name="lname" style="width:50%" required></br> 
					<label><b>Kent E-mail ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" placeholder="Enter E-mail ID" name="emailid" style="width:50%" required></br>
					<label><b>Banner ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" placeholder="Enter Banner ID" name="bannerid" style="width:50%" required></br>
					<label><b>Enter Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="password" placeholder="Enter password" name="pswd" style="width:50%" required></br>
					<label><b>Confirm Password: &nbsp;</b></label>
					<input type="password" placeholder="Re-Enter password" name="rpswd" style="width:50%" required></br>
					<button class="submit" id="sendpin" type="button" onclick="return validateForm('useregpinconfirmation.php')"  style="margin-left:40%" >Send PIN</button>
				</form>
				
			</div>
		  </div>
		</div>

		<!-- Lost Password Modal-->
		<div id="modallstpwd" class="modal">
		  <!-- Lost Password Modal content -->
		  <div class="modal-content">
			<span id ="close" class="closelstpwd">&times;</span>
			<div class="lstpwddiv">
				<form class="lstpwdform" name="pwdform" action="" method="post">
					<h2>Forgot Password</h1>
					<p>Please enter your E-mail ID to reset your password</p>
					<label><b>E-mail ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</b></label>
					<input type="text" placeholder="Enter E-mail ID" name="lstpwdemail"  style="width:50%"required></br>
					<button class="submit" id="resetpin" type="button" onclick="return validateForm1('lstpwdpinconfirmation.php')" style="margin-left:40%" >Send PIN</button>
				</form>
			</div>
		  </div>
		</div>

		

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><p>Footer...</p></footer>
	</div>
	<script>
		// Get the modal
		var regmodal = document.getElementById('modalusrreg');
		var lstpwdmodal = document.getElementById('modallstpwd');

		// Get the link that opens the modal
		var linkusrreg = document.getElementById("usrreg");
		var linklstpwd = document.getElementById("lstpwd");

		// Get the <span> element that closes the modal
		var spanusrreg = document.getElementsByClassName("closeusrreg")[0];
		var spanlstpwd = document.getElementsByClassName("closelstpwd")[0];

		// When the user clicks the link, open the modal 
		linkusrreg.onclick = function() {
			regmodal.style.display = "block";
		}
		linklstpwd.onclick = function() {
			lstpwdmodal.style.display = "block";
		}


		// When the user clicks on (x), close the modal
		spanusrreg.onclick = function() {
			regmodal.style.display = "none";   
		}
		spanlstpwd.onclick = function() {
			lstpwdmodal.style.display = "none";   
		}


		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == regmodal) {
				regmodal.style.display = "none";
			}
			if (event.target == lstpwdmodal) {
				lstpwdmodal.style.display = "none";
			}
		}
	</script>

</body>
