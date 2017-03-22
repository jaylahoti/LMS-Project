<?php session_start(); 

 if(empty($_SESSION['member']))
{//echo "sfasdfs"; 
header("location:home.php");
}
?>
<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - NYC Library</title>
	<link rel="styleshee" type="text/css" href="style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
    <style type="text/css">
<!--
.style1 {font-size: 24px}
-->
    </style>
</head>

<body style="background-color:lightblue">
	<div id="page">
		<div id="header">
			<div id="section">
				<div><a href="index.html"><img src="images/online lib.jpg" alt="Logo" width="426" height="68" /></a></div>
				<p><span style="text-align:right"> jlahoti@nyit.edu</br>+1551-998-7500</span>
			      </p>
			</div>
			<ul>
			 <li><a href="search.php">Search</a></li>
 
  <li><a href="home.php">Quit</a></li>

			</ul>
			<div id="tagline">
				<div>
					<h2 style="text-align:center">Welcome to Library.</h2>
			  </div>
			</div>
		</div>
        <body>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center"><br>

<?php 
$adminid = $_REQUEST['adminid'];
$pass = $_REQUEST['pass'];

if($adminid == 123 && $pass == "lahoti")
{
	echo "Welcome Admin";
	
	$_SESSION['member'] = $adminid;
}
else
{
	header("location:home.php");
}



?>

<b><br /><br />Insert Book</b>
<form name="bookinsert" action="admininsert.php">
<table>
<tr><td>Book title</td><td><input type="text" name="title" /></td></tr>
<tr><td>Publisher Name</td><td><input type="text" name="publisher_name" /></td></tr>
<tr><td>Publisher Date</td><td><input type="date" name="publisher_date" /></td></tr>
<tr><td>Publisher Address</td><td><input type="text" name="publisher_address" /></td></tr>
<tr><td>No Of Copy</td><td><input type="number" name="no_of_copy" /></td></tr>
<tr><td>ISBN</td><td><input type="text" name="isbn" /></td></tr>
<tr><td>Auther Id</td><td><input type="number" name="auther_id" /></td></tr>
<tr><td>branch Id</td><td><input type="number" name="branch_id" /></td></tr>
</table>
<input type="submit"  /> <a href="showall.php"> Book Info </a>
</form>

<br /><br /><br /><b><br /><br />Insert Branch</b>
<form name="branch" action="branchinsert.php">
<table>
<tr><td>branch Id</td><td><input type="number" name="branch_id" /></td></tr>
<tr><td>Location</td><td><input type="text" name="location" /></td></tr>
<tr><td>Name</td><td><input type="text" name="name" /></td></tr>
</table>
<input type="submit"  />    
         <a href="branchinfo.php"> Branch Info </a>
</form>


<br /><br /><br /><b><br /><br />
Add User</b>
<form name="user" action="review.php">
<table>
<tr><td>User Name</td><td><input type="text" name="readername" /></td></tr>
<tr><td>Address</td><td><input type="text" name="address" /></td></tr>
<tr><td>Phone number</td><td><input type="text" name="contactno" /></td></tr>

</table>
<input type="submit"  /> <a href="topborrowers.php"><pre>Top 10 most frequent borrowers</pre></a>
<a href="topborrowedbooks.php"><pre>Top 10 most borrowed books</pre></a> 
</form>

       <div id="footer">
			<div>
				<p>&nbsp;</p>
				<div id="connect"></div>
<div class="section">
  <p>&copy; Copyright Online Library - All Rights Reserved.</p>
			  </div>
		  </div>
	  </div>
	</div>
</body>
</html>