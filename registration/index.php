<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<style>
	.error{
		color:red;
	}
	.mywrapper{
		background:url("images/zenbg-6.png");
	}
	b{
		color:white;
	}
	</style>
</head>
<body>
<?php
	$teamname=$firstname=$secondname=$email=$phone=$iname="";
	$teamnameErr=$firstnameErr=$secondnameErr=$emailErr=$phoneErr=$inameErr="";
	$errorfree=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["team-name"])) {
			$teamnameErr = "TeamName is required";
			$errorfree=1;
		} else {
			$teamname = test_input($_POST["team-name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$teamname)) {
				$teamnameErr = "Only letters and white space allowed";
				$errorfree=1; 
			}
		}
		if (empty($_POST["first-name"])) {
			$firstnameErr = "Member1 name  is required";
			$errorfree=1;
		} else {
			$firstname = test_input($_POST["first-name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
				$firstnameErr = "Only letters and white space allowed";
				$errorfree=1; 
			}
		}
		if (empty($_POST["second-name"])) {
			$secondnameErr = "Member2 name  is required";
			$errorfree=1;
		} else {
			$secondname = test_input($_POST["second-name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$secondname)) {
				$secondnameErr = "Only letters and white space allowed";
				$errorfree=1; 
			}
		}
		if (empty($_POST["iname"])) {
			$inameErr = "Institute name  is required";
			$errorfree=1;
		} else {
			$iname = test_input($_POST["iname"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$iname)) {
				$inameErr = "Only letters and white space allowed";
				$errorfree=1; 
			}
		}
		if (empty($_POST["phone"])) {
			$phoneErr = "PhoneNumber name  is required";
			$errorfree=1;
		} else {
			$phone = test_input($_POST["phone"]);
			// check if name only contains letters and whitespace
			if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
				$phoneErr = "Please Enter a Valid Number";
				$errorfree=1; 
			}
		}
		

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$errorfree=1;
		} else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$errorfree=1; 
			}
		}
		if($errorfree==0){
			// echo "All fields are Correct";
			$dbservername='localhost';$dbname='try';$dbpass='';$username='root';
			$conn=mysqli_connect($dbservername,$username,$dbpass,$dbname);
			if($conn){
				// echo " Conection Established";
				$query1="SELECT * FROM reg WHERE email='$email' OR teamname='$teamname'";
				$sql1=mysqli_query($conn,$query1);
				if($sql1){
					$num=mysqli_num_rows($sql1);
					if($num==0){
						$query="INSERT INTO reg(teamname,mem1,mem2,email,phone,institute) VALUES 
							('$teamname','$firstname','$secondname','$email','$phone','$iname')";
						$sql=mysqli_query($conn,$query);
						if($sql){	
							?> <script> alert("Sucessful");</script><?php
						}else{
							echo "sql error";
						}
					}else{
						?> <script> alert("Team Already Registered");</script><?php
					}
				}
			}else{
				?> <script> alert("Something Went Wrong");</script><?php
			}
		}else{
			echo "Here is the Problem";	
		}	
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>	
	<form method="post" class="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="container mywrapper">
			<div class="row myrow">
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="first-name"><b>Tell Us  Your Team Name *</b></label>
					<div class="wrap-input100  validate-input" data-validate="Type first name">
						<input id="first-name" class="input100" type="text" name="team-name" placeholder="First name">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $teamnameErr;?></div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="Member One"><b>Member Name 1 *</b></label>
					<div class="wrap-input100  validate-input" data-validate="Type first name">
						<input id="memone" class="input100" type="text" name="first-name" placeholder="First name">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $firstnameErr;?></div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="Member One"><b>Member Name 2 *</b></label>
					<div class="wrap-input100  validate-input" data-validate="Type first name">
						<input id="memtwo" class="input100" type="text" name="second-name" placeholder="First name">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $secondnameErr;?></div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="email"><b>Tell Us Your Email *</b></label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $emailErr;?></div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="phone"><b>Tell Us Your Phone Number *</b></label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 1234567890">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $phoneErr;?></div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 column">
					<label class="label-input100" for="phone"><b>Tell Us Your Institue Name *</b></label>
					<div class="wrap-input100">
						<input id="phone" class="input100" type="text" name="iname" placeholder="">
						<span class="focus-input100"></span>
						<div class="error"><?php echo $inameErr;?></div>
					</div>
				</div>
					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="sub">
							Submit
						</button>
				</div>
			</div>
		</div>	
	</form>
</body>
</html>
