<?php session_start();
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
<?php 


$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");


$reader_id = $_REQUEST['reader_id'];
$_SESSION['reader_id'] = $reader_id;
//echo $_SESSION['reader_id'];
$cardno;
//echo $reader_id;

$sel="select * from reader";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
  {  
		$cardno = $row['reader_id'];
  }
  if($reader_id != $cardno)
  {
  		header("location:wroungcard.php"); exit;
  }
?>

<body style="background-color:lightblue">
	<div id="page">
		<div id="header">
			<div id="section">
				<div><a href="index.html"><img src="images/online lib.jpg" alt="Logo" width="379" height="58" /></a></div>
				<p><span style="text-align:right">jlahoti@nyit.edu</br>+1551-998-7500</span>
			      </p></div>
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
 <br>

       <div id="footer">
			<div>
				<p>&nbsp;</p>
				<div id="connect"></div>
<div class="section">
  <p></br></br></br></br></br></br>&copy; Copyright Online Library - All Rights Reserved.</p>
			  </div>
		  </div>
	  </div>
	</div>
</body>
</html>