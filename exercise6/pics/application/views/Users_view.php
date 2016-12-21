<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>View Form</title>
<style>
@charset "utf-8";
/* CSS Document */

*
{
 margin:0;
 padding:0;
}
body
{
 color: black;
 background:#f9f9f9;
 font-family:"Courier New", Courier, monospace;
}
a {
	text-decoration: none;
	color: black;
}
#header
{
 width:100%;
 height:50px;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}

#body
{
 margin-top:50px;
}
table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 margin-bottom:80px;

}
table a
{
 color: black;
 text-decoration:none;

}
table,td,th
{

 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 2px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
 
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:black;
 padding:9px 15px 9px 15px;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
table,th,td { border:3px solid black;}



</style>
<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
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
	   <li><a href="<?php echo base_url();?>index.php/users/about" target="_self"><em>ABOUT</em></li></a>
	   <li> <a href="<?php echo base_url();?>index.php/users/trivia" target="_self"><em>TRIVIA</em></li></a>
	   <li> <a href="<?php echo base_url();?>index.php/users/add_form" target="_self"><em>FORM</em></li></a>
	   </ul>
</head>

<body style="background-image: url(http://127.0.0.1/exercise6/codeigniter/pics/bg.png);">

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
    <th colspan="9" style="background-color:white;"><a href="<?php echo base_url();?>index.php/users/add_form" target="_self"><center>Click to Answer Form</a></th>
    </tr>
			<tr>
				<th>Full Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2"><center>Update/Delete</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellno; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>
<center>
</body>

</html>	