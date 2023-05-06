<body>
<h2> school records form</h2>
<?php error_reporting(0); ?> 
<?php
require_once('db.php');
//receive data from form and assign to variables
$id=$_POST['id'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$age=$_POST['age'];
$school=$_POST['school'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$fee=$_POST['fee'];
$semester=$_POST['semester'];
$product=$_POST['product'];
$qty=$_POST['quantity'];
$price=$_POST['price'];

//calculate total order cost
$totalcost=$qty*$price;

//print  the details
echo "<br>Fname : " .$Fname. "<br>";
echo "Lname : " .$Lname. "<br>";
echo "age : " .$age. "<br>";
echo "school : " .$school. "<br>";
echo "gender : " .$gender. "<br>";
echo "course : " .$course. "<br>";
echo "fee : " .$fee. "<br>";
echo "semester : " .$semester. "<br>";
echo "Product name : ".$product."<br>";
echo "Quantity ordered : ".$qty."<br>";
echo "Unit price : ".$price."<br>";
echo "Total Cost : ".$totalcost."<br>";




//UPDATE data into table
$update="UPDATE records SET Fname='$Fname',Lname='$Lname', age='$age',school='$school',gender='$gender',course='$course',fee='$fee',semester='$semester', product='$product', quantity='$qty', price='$price',total='$totalcost' WHERE id='$id' ";
 

if(!mysqli_query($myconn,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";
?>

</body>



