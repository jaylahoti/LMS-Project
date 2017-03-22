
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
				<div><a href="index.html"><img src="images/online lib.jpg" alt="Logo" width="294" height="63" /></a></div>
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
        <div align="center"><br>
<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");

 $sel="select * from book where no_of_copy >=1 ";
 
 $query=mysql_query($sel);
 ?>
 <form name="issue" action="issue.php">
 <table bgcolor="blue" border="3"> 
		<tr><td>Book title</td><td>Publisher Name</td><td>Publisher date</td><td>Publisher Address</td><td>No Of Copies</td><td>ISBN</td><td>Select to Issue</td></tr>
 <?php
  while($row=mysql_fetch_array($query))	
  { 
  	?>  
    
        <tr><td><?php echo $row['title']; ?></td><td><?php echo $row['publisher_name'];  ?>
        	<td><?php echo $row['publisher_date']; ?></td>
            <td><?php echo $row['publisher_address']; ?></td>
            <td><?php echo $row['no_of_copy']; ?></td>
            <td><?php echo $row['isbn']; ?></td>
        	<td><input type="checkbox" name="book[]" value="<?php echo $row['book_id']; ?>" /></td>
        </tr>
	
	<?php
  }
?>
<tr><td colspan="7" align="center"><input type="submit" value="ISSUE BOOK" /></td></tr>
</table>
</form>

       <div id="footer">
			<div>
				<p>&nbsp;</p>
				<div id="connect"></div>
<div class="section">
  <p></br></br></br></br></br></br></br>&copy; Copyright Online Library -  All Rights Reserved.</p>
			  </div>
		  </div>
	  </div>
	</div>
</body>
</html>