<?php error_reporting(0); ?> 
<?php
require_once("db.php");

$id=$_REQUEST['id'];

if($id!=null)
{
$del=mysqli_query($myconn,"DELETE FROM records WHERE id='$id'");
if($del)
{
echo"Record Successfully Deleted!!";
}
else
{
echo"Record Not Deleted!!";
}
}
echo "<a href='display.php'> Go back to records list</a>";
?>


