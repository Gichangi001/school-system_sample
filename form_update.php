<?php error_reporting(0); ?> 
<?php
require_once('db.php');

$id=$_REQUEST['id'];
$result=mysqli_query($myconn,"SELECT * FROM records where id='$id'"); // select records from DB table records
$row = mysqli_fetch_array($result);
if($row)
{

$Fname=$row['Fname'];
$Lname=$row['Lname'];
$age=$row['age'];
$school=$row['school'];
$gender=$row['gender'];
$course=$row['course'];
$fee=$row['fee'];
$semester=$row['semester'];
$customer=$row['customer'];
$product=$row['product'];
$qty=$row['quantity'];
$price=$row['price'];

}
?>
<body>
<h2> School records update form</h2>
<form name='updateform' action='system_update.php' method='post'>
<input type="hidden" name='id' value="<?php echo $id ?>"><br>
Fname <input type='text' name='Fname' value="<?php echo $Fname?>"><br>
Lname <input type='text' name='Lname' value="<?php echo $Lname?>" ><br>
age <input type="number"name='age' value="<?php echo $age?>" </br>
school <input type="text"name='school' value="<?php echo $school?>"</br>

<div>
<label>
    <input type="radio" name="gender" value="male">Male
  </label>
  <label>
    <input type="radio" name="gender" value="female">Female
  </label>
</div>
course <select name="course">
                <option selected="selected"><?php echo $course?></option>
                <option> BIT</option>
                <option> BBIT</option>
                <option> BCOM</option>
                <option>LAW</option>
                </select><br>

fee <input type='number' name='fee' value="<?php echo $fee?>" </br>
semester <select name="semester">
                <option selected="selected"><?php echo $semester?></option>
                <option> 1</option>
                <option> 2</option>
                <option> 3</option>
                <option>4</option>
                </select><br>

Product ordered <select name='product'>
	<option selected="selected"><?php echo $product?></option>
		<option> Computer</option>
		<option> TV</option>
		<option> Mobile phone</option>
		</select><br>
Quantity ordered<input type='text' name='quantity' value="<?php echo $qty ?>"><br>
Unit Price <input type='text' name='price' value="<?php echo $price ?>"><br>
<input type='submit' value='update order details'>
<input type='reset' value='reset form'>
</form>
</body>




