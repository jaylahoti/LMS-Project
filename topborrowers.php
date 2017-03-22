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

 $sel="select * from issue where reader_id >=40 ";
 
 $query=mysql_query($sel);
 ?>
 <form name="banchinfo" action="adminlogin.php">
 <table bgcolor="blue" border="3"> 
		<tr><td>Issue ID</td><td>Issue Date</td><td>Due Date</td><td>No of books</td><td>Book Id</td><td>Reader Id</td></tr>
 <?php
  while($row=mysql_fetch_array($query))	
  { 
  	?>  
    
        <tr><td><?php echo $row['issue_id']; ?></td><td><?php echo $row['issue_date'];  ?>
        	<td><?php echo $row['due_date']; ?></td>
            <td><?php echo $row['No_of books']; ?></td>
            <td><?php echo $row['book_id']; ?></td>
            <td><?php echo $row['reader_id']; ?></td></tr>
            	<?php
  }
?>
</table>
  </br>
  <input type="submit" value="Go Back">
  
  </form>
  
 

</body>
</html>