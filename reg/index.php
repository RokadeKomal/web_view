<?php 
	include'registration.php';
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

		
	</head>
	<body>
		<form method="post" action="registration.php">
		<h2><b>Registration Form</b></h2>


			<div class="input">
				<label><p class="fa fa-user-o"><b>Username</b></p></label>
				<input type="text" name="uname" placeholder="Enter Your Name" required/>
			</div>
			<div class="input">
				<label><p class="fa fa-envelope-open-o"><b>Email_Address</b></p></label>
				<input type="email" name="email" placeholder="Enter your Email Address" required/>
			</div>
			<div class="input">
				<label><p class="fa fa-key"><b>Password</b></p></label>
				<input type="password" name="pwd" placeholder="Enter Your Password" required/>
			</div>
			<div class="input">
				<label><p class="fa fa-key"><b>Confirm_Password</b></p></label>
				<input type="password" name="c_pwd" placeholder="Confirm Your Password" required/>
			</div>
			<h2><b>Personal Details</b></h2>
			<div class="input">
				<label><b>First_Name</b></label>
				<input type="text" name="fname"  placeholder="Enter your first name" required/>			
			</div>
			<div class="input">
				<label><b>Last_Name</b></label>
				<input type="text" name="lname"  placeholder="Enter your last name" required/>			
			</div>
			<div class="input">
				<label><b>DOB</b></label>
				<input type="date" name="dob" required/>			
			</div>
			<div class="input">
				<label><b>Phone_Number</b></label>
				<input type="Number" name="ph_Number" required/>
			</div>
			<div class="input">
				<label><b>Gender</b></label>
				Male<input type="radio" name="gender" value="Male"/>
				Female<input type="radio" name="gender" value="Female"/>
				Other<input type="radio" name="gender" value="Other"/>

			</div>
			<div class="input">
				<label><b>Marital_Status</b></label>
				Married<input type="radio" name="status" value="Married"/>
				Unmarried<input type="radio" name="status" value="Unmarried"/>
				Divorce<input type="radio" name="status" value="Divorce\"/>
			</div><div class="input">
				<label><b>Country</b></label>
					<select name="country" required/>

						<option value="" selected="selected" disabled="disabled">Select your country</option>

						<option value="India">India</option>

						<option value="2">Pakistan</option>

						<option value="Pakistan">France</option>

						<option value="U.S.">U.S.</option>

						<option value="China">China</option>

						<option value="Spain">Spain</option>

						<option value="Italy">Italy</option>

						<option value="Turkey">Turkey</option>

						<option value="U.K.">U.K.</option>

						<option value="Russia">Russia</option>
				
					</select>			
			</div>
			<div class="input">
				<label><b>Address</b></label>
				<textarea rows="8" cols="20" placeholder="Enter your full Address" name="add"></textarea>			
			</div>
			<div class="input">
				<label><b>Discribe_you</b></label>
				<input type="text" placeholder="Single word which discribe you" name="describe">
			</div>
			<div class="input">
				<label><b>Yourself</b></label>
				<textarea rows="8" cols="20" placeholder="Talk about yourself" name="yourself"></textarea>			
			</div>
			<div class="input">
				<label><b>Hobbies</b></label>
				<input type="text" placeholder="Enter your Hobbies" name="hobbies">
			</div>
			<div class="input">
				<label><b>About_Programming</b></label>
				<textarea rows="8" cols="20" placeholder="what you think you can do as a programmer" name="about"></textarea>			
			</div>
			

			<div class="input">
				<label><b>Skills</b></label>
					HTML<input type="checkbox" name="skill[]" value="html"/>
					JAVA<input type="checkbox" name="skill[]" value="java"/>
					PHP<input type="checkbox" name="skill[]" value="php"/>
					JQUERY<input type="checkbox" name="skill[]" value="jquery"/>
					PYTHON<input type="checkbox" name="skill[]" value="python"/>
			</div>
			

			<div class="input">
				<label><b>Terms</b></label>
					<input type="checkbox" name="terms" value="a"/>   want to receive News and Special offers.
					<input type="checkbox" name="terms" value="b"/>   Iagree with the terms and conditions.
			</div>

			<div class="input">
				<input type="submit" name="save" class="button" value="save">
			</div>
		</form>
	</body>
</html>