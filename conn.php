<?php
$host="localhost";
$user="root";
$pwd="";
$db="schooldb";
$table = "users";
$myconn=mysqli_connect($host,$user,$pwd,$db);
if($myconn)
{
echo "Connection to database server established<br>";

}
else
echo "Connection to database  server failed";

// select the table
$table_select = mysqli_query($myconn, "SELECT * FROM $table");
if (!$table_select) {
    die("Table selection failed: " . mysqli_error($myconn)); //used to post the end code of the table
} else {
    echo "Table selected<br>";
}

?>
