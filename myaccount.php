<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:lightblue">

<?php 
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");
$fine=0;

 $sel="select issue.*,book.* from issue,book where issue.book_id = book.book_id";
 
 $query=mysql_query($sel);
 ?>
 <form name="return" action="return.php">
 <table bgcolor="yellow" border="3"> 
		<tr><td>Book title</td><td>Publisher Name</td><td>Issue_date</td><td>Due_Date</td><td>No_of books</td><td>fined</td><td>Select to return</td></tr>
 <?php
  while($row=mysql_fetch_array($query))	
  {
    if($row['No_of books'])
	{?>
		<tr><td><?php echo $row['title']; ?></td>
        	<td><?php echo $row['publisher_name']; ?></td>
            <td><?php echo $row['issue_date']; ?></td>
            <td><?php echo $row['due_date']; ?></td>
             <td><?php echo $row['No_of books']; ?></td>
             <td><?php echo $row['fined']; ?></td>
             <td><input type="checkbox" name="book[]" value="<?php echo $row['book_id']; ?>" /></td>
             
            <td><?php  
					
				$datetime1 = new DateTime($row['due_date']);
				$datetime2 = new DateTime($row['return_date']);
				$difference = $datetime1->diff($datetime2);
				echo $difference->days *30; 
?>
			</td>
        	
        </tr>	
        <?php
	} 
	else
	{
  	?>  
  
        <tr><td><?php echo $row['title']; ?></td>
        	<td><?php echo $row['publisher_name']; ?></td>
            <td><?php echo $row['issue_date']; ?></td>
            <td><?php echo $row['due_date']; ?></td>
        </tr>
      
	<?php
	}
  }
?>
<tr><td colspan="7" align="center"><input type="submit" value="Return Book" /></td></tr>
</table>
</form>
</body>
</html>
