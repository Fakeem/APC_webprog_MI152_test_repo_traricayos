<!DOCTYPE HTML>  
<html>
<head>
<title> PHP </title>
<style>
.error {color: #FF0000;}
	  li a{font-size:30px;list-style-type:none;padding:5px;text-decoration:none;float:left;color:black;}
         li a{font-size:30px;padding:5px;text-decoration:none;float:left;color:black;}
	  ul {border:2px solid black;list-style-type:none;overflow:hidden;background-color:white;color:black;}
	  li a:hover {background-color:black;color:white;}
	  .panes {margin-left:30px;}
	  .border {border:2px solid black;}
</style>
</head>
       <body  style="background-color:slategray;">  
	   <ul>
	   <li><a href="mypage.html"><em>ABOUT</em></li></a>
	   <li> <a href="mypage2.html"><em>TRIVIA</em></li></a>
	   <li> <a href="mypage3.php"><em>FORM</em></li></a>
	   </ul>
	   
	  <center>
      <h1><em>Please Fill Out the Form</em></h1> 
      <img src = "PICS/c.png" alt = "CLG" width = "100"> 
      </center>

	  <center>
<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$cpnumErr = "";
		$name = $nickname = $email = $hadd = $gender = $cpnum = $comment = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name is required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
		    if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			if(empty($_POST["hadd"])){
			  	$hadd = "";
			}else{
			  	$hadd = test_input($_POST["hadd"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number is required";
		  	} else {
				$cpnum = test_input($_POST["cpnum"]);
				if(!preg_match("/^[0-9]*$/",$cpnum)){
					$cpnumErr = "Only numbers are allowed";
					$cpnum = "";
				}
		  	}
			
			if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}	
		}

		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
			}
			?>
	
	    <p><span class="error">* Required Field.</span></p>
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		    <p align="middle"><font size ="6"><em>
			Name:<input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>  
			Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span>
			 <br><br>
			E-mail Address: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Home Address: <textarea name="hadd" rows ="2" cols="30"><?php echo $hadd;?></textarea>
			<br><br>
			Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			Cellphone Number: <input type="text" name="cpnum" value="<?php echo $cpnum;?>">
			<span class="error">* <?php echo $cpnumErr;?></span>
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			<br><br>
			<input type="submit" name="submit" value="Submit">
			</em></font></p>
</form>

	<?php
	
	    echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $nickname;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $hadd;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $cpnum;
		echo "<br>";
		echo $comment;
		echo "<br>";
?>

</center>	
</body>
</html>