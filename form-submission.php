<!DOCTYPE html>
<html>
<head>
	<title>Form-Submission</title>
</head>
<body>

<h1>Form-Submission</h1>
<Form>
<table>
	<fieldset>
<legend>Basic Information:</legend>
<br>
<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname">

		<br><br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname">

		<br><br>
		<label for="fname">Gender:</label>
		<br>

		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br><br>

		<label for="DoB">DoB:</label>
		<input type="date" id="date" name="date">
		
		<br><br>
		<label for="Religion">Religion:</label>
		<select id="Religion">
			<option value="Hindu">Hindu</option>
			<option value="Muslim">Muslim</option>
			<option value="Buddha">Buddha</option>
			<option value="Christian">Christian</option>

		<br><br>
      </fieldset>
        </table>



		
        <table>
         <fieldset>
         	<legend>Contact Information:</legend>
         <br>
         <label for="Present Address  ">Present Address </label>
	     <textarea id="Present Address" name="Present Address" rows="1" cols="18"></textarea>

		<br><br>
		<label for="Permanent Address  ">Permanent  Address </label>
		 <textarea id="Permanent Address " name="Permanent Address " rows="1" cols="18"></textarea>
		<br><br>
		<label for="Phone  ">Phone </label>
		<input type="tel" id="Phone" name="Phone ">
    
        <br><br>
		<label for="Email  ">Email </label>
		<input type="Email" id="email" name="email ">
		<br><br>
		<a href="https://github.com/AktaruzzamanEmon1">Personal Website Link </a>
        
        <br><br>
        </fieldset>
        </table>


       
        <table>
       <fieldset>
       <legend>Acount Information:</legend>
         <label for="Username">Username:</label>
		<input type="text" id="Username" name="Usernamee">
          <br><br>
		 <label for="Password">Password:</label>
		<input type="Password" id="Password" name="Password">

        </table>
          <br><br>
		<input type="submit" value="Submit">

        

</form>		

	
		
</body>
</html>