<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="background-color:lightblue">
<p>&nbsp;</p>
        <p>&nbsp;</p>
        <div align="center"><br>
<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");

 $sel="select * from branch where branch_id >=1 ";
 
 $query=mysql_query($sel);
 ?>
 <form name="banchinfo" action="adminlogin.php">
 <table bgcolor="blue" border="3"> 
		<tr><td>Branch_ID</td><td>Location</td><td>Name</td></tr>
 <?php
  while($row=mysql_fetch_array($query))	
  { 
  	?>  
    
        <tr><td><?php echo $row['branch_id']; ?></td><td><?php echo $row['location'];  ?>
        	<td><?php echo $row['name']; ?></td></tr>
            	<?php
  }
?>
</table>
  </br>
  <input type="submit" value="Go Back">
  
  </form>
  
 

</body>
</html>