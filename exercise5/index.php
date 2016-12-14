<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
div.container {
    width: 99%;
    height: 100%;
    border: 10px solid black;
}
header, footer {
    padding: 1em;
    color: black;
    background-color: black;
    clear: left;
    text-align: center;

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: auto;
	}

</style>

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
    
	   
	   <ul>
	   <li><a href="mypage.html" target="_self"><em>ABOUT</em></li></a>
	   <li> <a href="mypage2.html" target="_self"><em>TRIVIA</em></li></a>
	   <li> <a href="mypage.php" target="_self"><em>FORM</em></li></a>
	   </ul>
	   
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body style="background-image: url(bg.png);width:100%">

<center>

<div id="header">
<div id="content">
    <label class="l"><strong>ANSWERED FORM</strong></label>
</div>
</div>

<br>
<br>
<br>
<div id="body">
<div id="content">
    <table align="center" style="width:80%;">
    <tr>
    <th colspan="9" style="background-color:white;"><a href="mypage.php" target="_self"><center>Click to Answer Form</a></th>
    </tr>

    <th class="a">Full Name</th>
    <th class="a">Nickname</th>
    <th class="a">Email Address</th>
	<th class="a">Address</th>
	<th class="a">Gender</th>
	<th class="a">Cellphone Number</th>
	<th class="a">Comment</th>
    <th colspan="2" class="a">Update/Delete</th>
    </tr>
	
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>