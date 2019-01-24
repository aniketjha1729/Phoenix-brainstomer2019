<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/main1.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Catamaran|Play|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Catamaran|Courgette|Play|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Barlow|Catamaran|Courgette|Open+Sans+Condensed:300|Play|Staatliches"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css">
    <title>brainstorm</title>
    <style>
        .mywrapper {
            margin-top: 2%;
        }
        .myrow {
            margin-top: 0%;
        }
        .error{
            color:red;
        }
        
    </style>
</head>

<body>
    <div class="outerDiv">
        <header>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Home</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
                <a href="#register">Register</a>
                <a href="#about">About</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <div class="leftDiv" id="home">
            <img class="second-logo" src="assets/images/second-logo.png" height="300" width="700">
            <h2 class="sub-title">Get Your Master Brain Trigerred.</h2>
            <a href="" title="Button border orange" class="button btnFloat btnOrange">Register</a>
        </div>
        <div class="rightDiv">
            <img class="brain" src="assets/images/brain1.png" height="600" width="550">
        </div>
        <div "style: clear:both;"></div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="phoenix">
            <span>
                <div class="phoenix-logo">
                    <img src="assets/images/phoenix-logo.jpg" height="327" width="310">
                </div>

                <div class="phoenix-about">
                    <center>
                        <h1 class="bg-hd">About phoenix</h1>
                        <div class="line"></div>
                        <p class="main-ct">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente molestiae, error corporis ut quod
                            similique labore quibusdam incidunt cum quaerat at est, natus ipsa. Suscipit voluptatem reprehenderit
                            dicta est Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid fugit ratione itaque
                            blanditiis, sed corporis error, natus quam iure omnis eveniet incidunt? Architecto provident
                            dolore quisquam illo aspernatur unde sunt.
                        </p>
                    </center>
                </div>
            </span>
        </div>
        <div class="brainstorm">
            <div class="brainstorm-about">
                <center>
                    <h1 class="bg-hd">About Brainstomer</h1>
                    <div class="line"></div>
                    <p class="main-ct">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, ut quis, minima laudantium nihil sequi
                        quia at ad aliquam vero rem repellendus ducimus Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Numquam, optio. Asperiores perspiciatis quia ducimus itaque ut, accusamus impedit enim aliquam
                        culpa libero laborum sit fuga consequuntur molestias consectetur, tempore dignissimos. alias blanditiis
                        soluta tempore quod impedit dolor.
                    </p>
                </center>
            </div>
            <div class="brainstorm-logo">
                <img src="assets/images/brainstomer-logo.png" height="312" width="300">
            </div>

        </div>
    </div>



    <!-- Gallery -->
    <div class="gallery" id="gallery">
        <center>
            <h1>Gallery</h1>
            <p>The most beutiful things are not associated with money ; they are memories and moments.</p>
        </center>
        <div class="row">
            <div class="column">
                <img src="assets/images/g1.jpg" style="width:100%">
                <img src="assets/images/g12.jpg" style="width:100%">
                <img src="assets/images/g10.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="assets/images/g17.jpg" style="width:100%">
                <img src="assets/images/g8.jpg" style="width:100%">
                <img src="assets/images/g6.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="assets/images/g18.jpg" style="width:100%">
                <img src="assets/images/g15.jpg" style="width:100%">
                <img src="assets/images/g13.jpg" style="width:100%">

            </div>
            <div class="column">
                <img src="assets/images/g14.jpg" style="width:100%">
                <img src="assets/images/g7.jpg" style="width:100%">
                <img src="assets/images/g9.jpg" style="width:100%">
            </div>
        </div>
    </div>
    <div class="registration">
        <h1 class="register-hd">Get Yourself Registered.</h1>
     <!-- <==============================================================================================================>    -->
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
    				$query1="SELECT * FROM reg WHERE email='$email' OR teamname='$teamname' OR phone='$phone'";
    				$sql1=mysqli_query($conn,$query1);
    				if($sql1){
    					$num=mysqli_num_rows($sql1);
    					if($num==0){
    						$query="INSERT INTO reg(teamname,mem1,mem2,email,phone,institute) VALUES 
    							('$teamname','$firstname','$secondname','$email','$phone','$iname')";
    						$sql=mysqli_query($conn,$query);
    						if($sql){	
                                ?>
                                <script> alert("Sucessful");</script>
                                <?php
    						}else{
    							echo "sql error";
    						}
    					}else{
                            ?>
                            <script> alert("Team Already Registered");</script>
                            <?php
    					}
    				}
    			}else{
                    ?>
                    <script> alert("Something Went Wrong");</script>
                    <?php
    			}
    		}else{
                ?>
                <script> alert("Something Went Wrong");</script>
                <?
    		}	
    	}
    
    	function test_input($data) {
    		$data = trim($data);
    		$data = stripslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
    ?>
    <!-- <==============================================================================================================>    -->
        <!-- From -->
        <form method="post" class="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <div class="container mywrapper" id="register">
                <div class="row myrow">
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="first-name">
                            <b>Tell Us Your Team Name *</b>
                        </label>
                        <div class="wrap-input100  validate-input" data-validate="Type first name">
                            <input id="first-name" class="input100" type="text" name="team-name" placeholder="First name">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $teamnameErr;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="Member One">
                            <b>Member Name 1 *</b>
                        </label>
                        <div class="wrap-input100  validate-input" data-validate="Type first name">
                            <input id="memone" class="input100" type="text" name="first-name" placeholder="First name">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $firstnameErr;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="Member One">
                            <b>Member Name 2 *</b>
                        </label>
                        <div class="wrap-input100  validate-input" data-validate="Type first name">
                            <input id="memtwo" class="input100" type="text" name="second-name" placeholder="First name">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $secondnameErr;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="email">
                            <b>Tell Us Your Email *</b>
                        </label>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $emailErr;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="phone">
                            <b>Tell Us Your Phone Number *</b>
                        </label>
                        <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 1234567890">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $phoneErr;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 column">
                        <label class="label-input100" for="phone">
                            <b>Tell Us Your Institue Name *</b>
                        </label>
                        <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="iname" placeholder="">
                            <span class="focus-input100"></span>
                            <div class="error">
                                <?php echo $inameErr;?>
                            </div>
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
    <!-- ================================================================================================== -->
    <!-- Footer -->
   
        <div class="myfooter" id="contact">
            <div class="container">
                <div class="row row-footer">
                    <div class="col-lg-4 col-sm-6 col-footer">
                        <img src="assets/images/phoenix-logo.jpg" class="myimg">
                    </div>
                    <div class="col-lg-4 col-sm-6 col-footer">
                        <b><h4>Contact</h4></b><br>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Technocity,Garia,Kolkata-700152</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+91000000000</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Email:xyz@gmail.com</p>
                        <p><i class="fa fa-university" aria-hidden="true"></i></p>

                    </div>
                    <div class="col-lg-4 col-sm-6 col-footer">
                        
                    </div>
                </div>
            </div>
                <div class="bottom-footer">
                    <div class="row row-footer-bottom">
                        <div class="col-lg-6 col-sm-6"><h2><b>Phoenix</b></h2></div>
                        <div class="col-lg-6 col-sm-6">
                            <i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;&nbsp; 2019 Phoenix. All Rights Reserved | Designed BY:
                            <span class="tool">
                                <span class="tootext"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;</span>
                            </span>
                            <span class="tool">
                                <span class="tootext"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;</span>
                            </span>
                            <span class="tool">
                                <span class="tootext"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;</span>
                            </span>

                        </div>
                        
                    </div>
                </div>
            
        </div>
    </footer>


</body>
</html>