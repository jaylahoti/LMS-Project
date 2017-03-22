<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:lightblue">
<h1 style="text-align:center"> Your book has been returned </h1>
<a href="home.php" style="text-align:center">Logout<a> </br> <a href="search.php">Search Another Book</a></br></br></br></br></br></br></br>
</body>
</html>
<?php 

$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");

$book_id = 0;

$return_date = date("Y/m/d");


/*$issue_date = $_REQUEST['issue_date'];
$due_date = $_REQUEST['due_date'];

if($return_date - $due_date > 10)
{
	$fine = ($return_date - $due_date)*5;
	echo $fine;
}*/
$return = array();
$return = $_REQUEST['return'];
foreach($_REQUEST['return'] as $book_id)
{
    if(isset($_REQUEST['return']))
    {
    	$id=$_REQUEST['return']; 
		
		$update1 = "update issue set return_date='".$return_date."' where book_id='".$book_id."'";
		$query=mysql_query($update1);
		
		$update = "UPDATE book SET no_of_copy=(no_of_copy+1) where book_id='".$book_id."'"; 
		$query=mysql_query($update);
 	}
}

header("location:myaccount.php");

?>

