<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:lightblue">
<?php $rname = $_REQUEST['readername'] ?>
<?php $address = $_REQUEST['address'] ?>
<?php $contactno=$_REQUEST['contactno'] ?>

<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");
$rname;
$cardno;


// Create connection
$insert="insert into reader(reader_name , reader_address, contact_no) values('$rname', '$address', '$contactno')";
//echo $insert;exit;

$query=mysql_query($insert);
//header("location:category.php"); exit;



  $sel="select * from reader";
  $query=mysql_query($sel);
  while($row=mysql_fetch_array($query))	
  { 
  		$rname = $row['reader_name']; 
		$cardno = $row['reader_id'];
  }
  echo $rname; 
?>
&nbsp;&nbsp;&nbsp;your card Number is <font color="#FF0000"><?php echo $cardno?></font>
<br/><br/><a href="home.php"><input type="button" value="Back TO Home"/></a>
</body>
</html>
