
<body>
<h2>school registration</h2>
<?php error_reporting(0); ?> 
<?php
require_once('db.php');// include connection code

//recieve data from form and assign variables
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

//print the details
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



//insert the details into the database
$insert="INSERT INTO records (Fname,Lname,age,school,gender,course,fee,semester,product,quantity,price,total) 
  values('$Fname','$Lname','$age','$school','$gender','$course','$fee','$semester','$product','$qty','$price','$totalcost')";
  
if(mysqli_query($myconn,$insert))
{
echo "Record added sucessfully<br>";
} else {
    echo "Failed.Try again<br>";
}

?>

</body>