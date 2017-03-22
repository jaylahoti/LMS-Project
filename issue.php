<?php session_start();
//echo $_SESSION['reader_id']; exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Untitled Document</title>
</head>

<body>

</body>
<?php 

$host="localhost";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);
$db=mysql_select_db("elib");

$issue_date = date("Y/m/d");
//echo $issue_date; 

$due_date = $issue_date;
$due_date1 = date('Y-m-d', strtotime($due_date .'+20 day'));
$book_id = 0;
$reader_id = $_SESSION['reader_id'];

$book = array();
$book = $_REQUEST['book'];
foreach($_REQUEST['book'] as $book_id)
{
    if(isset($_REQUEST['book']))
    {
    	$id=$_REQUEST['book']; 
		
		$insert="insert into issue(issue_date, due_date, return_date, book_id, reader_id) values('$issue_date', '$due_date1', 'null', '$book_id', '$reader_id')";
		$query=mysql_query($insert);
		
		$update = "UPDATE book SET no_of_copy=(no_of_copy-1) where book_id='".$book_id."'"; 
		$query=mysql_query($update);
		
		header("location:myaccount.php");
 	}
}

?>
</body>
</html>
