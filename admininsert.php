<?php session_start(); 
if(empty($_SESSION['member']))
{//echo "sfasdfs"; 
header("location:home.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php $title = $_REQUEST['title'] ?>
<?php $publisher_name = $_REQUEST['publisher_name'] ?>
<?php $publisher_date =$_REQUEST['publisher_date'] ?>
<?php $publisher_address =$_REQUEST['publisher_address'] ?>
<?php $copy =$_REQUEST['no_of_copy'] ?>
<?php $isbn =$_REQUEST['isbn'] ?>
<?php $auther_id =$_REQUEST['auther_id'] ?>
<?php $branch_id =$_REQUEST['branch_id'] ?>

<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");



// Create connection
$insert="insert into book(title,publisher_name,publisher_date,publisher_address,no_of_copy,isbn,auth0r_id,branch_id) values('$title', '$publisher_name', '$publisher_date','$publisher_address','$copy','$isbn','$auther_id','$branch_id')";
//echo $insert;exit;

$query=mysql_query($insert);
//header("location:category.php"); exit;

?>
</body>
</html>
