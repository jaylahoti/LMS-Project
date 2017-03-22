
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
				<div><a href="index.html"><img src="images/online lib.jpg" alt="Logo" width="315" height="56" /></a></div>
				<p><span style="text-align:right">jlahoti@nyit.edu</br>+1551-998-7500</span>
	        </p>
			</div>
			<ul>
			 <li><a href="search.php">Search</a></li>
  
  <li><a href="home.php">Quit</a></li>

			</ul>
			<div id="tagline">
				<div>
					<h4>Welcome to Library.</h4>
			  </div>
			</div>
		</div>
        <body>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center"><br>
      <?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");


$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$publisher = $_REQUEST['publisher'];

if($id)
{
   $sel="select * from book where book_id=".$id;
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
  { 
  	?>  
    <table bgcolor="green" border="3"> 
		<tr><td>Book title</td><td><?php echo $row['title'];  ?></td></tr>
        <tr><td>Publisher Name</td><td><?php echo $row['publisher_name'];  ?></td></tr>
        <tr><td>Publisher date</td><td><?php echo $row['publisher_date']; ?></td></tr>
        <tr><td>Publisher Address</td><td><?php echo $row['publisher_address']; ?></td></tr>
        <tr><td>No Of Copies</td><td><?php echo $row['no_of_copy']; ?></td></tr>
        <tr><td>ISBN</td><td><?php echo $row['isbn']; ?></td></tr>
	</table>
    <?php echo $row['title']; ?>
	<?php
  }
}
else if($title)
{
	//echo $title;
   $sel="select * from book where title='".$title."'";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
   { 
  	?>  
    <table bgcolor="orange" border="3"> 
		<tr><td>Book title</td><td><?php echo $row['title'];  ?></td></tr>
        <tr><td>Publisher Name</td><td><?php echo $row['publisher_name'];  ?></td></tr>
        <tr><td>Publisher date</td><td><?php echo $row['publisher_date']; ?></td></tr>
        <tr><td>Publisher Address</td><td><?php echo $row['publisher_address']; ?></td></tr>
        <tr><td>No Of Copies</td><td><?php echo $row['no_of_copy']; ?></td></tr>
        <tr><td>ISBN</td><td><?php echo $row['isbn']; ?></td></tr>
	</table>
    <?php echo $row['title']; ?>
	<?php
  }
}

else if($publisher)
{
   $sel="select * from book where publisher_name='".$publisher."'";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
   { 
  	?>  
    <table bgcolor="lightgreen" border="3"> 
		<tr><td>Book title</td><td><?php echo $row['title'];  ?></td></tr>
        <tr><td>Publisher Name</td><td><?php echo $row['publisher_name'];  ?></td></tr>
        <tr><td>Publisher date</td><td><?php echo $row['publisher_date']; ?></td></tr>
        <tr><td>Publisher Address</td><td><?php echo $row['publisher_address']; ?></td></tr>
        <tr><td>No Of Copies</td><td><?php echo $row['no_of_copy']; ?></td></tr>
        <tr><td>ISBN</td><td><?php echo $row['isbn']; ?></td></tr>
	</table>
    <?php echo $row['title']; ?>
	<?php
  }
}
else
{
echo "Please enter valid input";
}
?>

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