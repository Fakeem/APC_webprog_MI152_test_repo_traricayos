<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $cellno = $_POST['cellno'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(complete_name,nickname,email,address,gender,cellno,comment) 
		VALUES('$complete_name','$nickname','$email','$address','$gender','$cellno','$comment')";
 mysqli_query($link, $sql_query);
        
        // sql query for inserting data into database
 
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<style>
       table, th, td {
       border: 1px solid black;
       border-collapse: collapse;

}
       th, td {
       padding: 25px;
       text-align: left;
}
	  li a{font-size:30px;padding:5px;text-decoration:none;float:left;color:black;}
	  ul {border:2px solid black;list-style-type:none;overflow:hidden;background-color:white;color:black;}
	  li a:hover {background-color:black;color:white;}

	  .border {border:2px solid black;}
     </style>  
    
	    <body style="background-image: url(bg.png);">
	   <ul>
	   <li><a href="mypage.html" target="_self"><em>ABOUT</em></li></a>
	   <li> <a href="mypage2.html" target="_self"><em>TRIVIA</em></li></a>
	   <li> <a href="mypage.php" target="_self"><em>FORM</em></li></a>
	   </ul>

<center>
<div id="header">
<div id="content">
    <label class="l"><strong>FORM</strong></label>
</div>
</div>

<div id="body">
<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center" style="color:black;"> <a href="index.php "><center>View Info</a></td>
    </tr> 
    <tr>
    <td><input type="text" name="complete_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
	
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cellno" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="8" cols="140"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save" style="color:white;"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>