<?PHP
$host="localhost";
$user="root";
$pwd="";
$db="schooldb";
$table = "records";


$myconn=mysqli_connect($host,$user,$pwd);
if(!$myconn)
{
echo "Connection to database  server failed";
}
else
echo "Connection to database server established<br>";

//select the database
$schooldb= mysqli_select_db($myconn,$db);
if(!$schooldb)
{
echo "Database not selected";
}
else
echo "Database  selected<br>";

// select the table
$table_select = mysqli_query($myconn, "SELECT * FROM $table");
if (!$table_select) {
    die("Table selection failed: " . mysqli_error($myconn));
} else {
    echo "Table selected<br>";
}


?>