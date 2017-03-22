<?php session_start(); 
if(empty($_SESSION['member']))
{//echo "sfasdfs"; 
header("location:home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php $branch_id =$_REQUEST['branch_id'] ?>
<?php $location =$_REQUEST['location'] ?>
<?php $name =$_REQUEST['name'] ?>

<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");



// Create connection
$insert="insert into branch(branch_id,location,name) values('$branch_id','$location','$name')";
//echo $insert;exit;

$query=mysql_query($insert);
header("location:adminlogin.php"); exit;
?>
</body>
</html>
