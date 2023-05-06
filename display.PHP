<?php
require_once('db.php'); // call connect code

//Retreiving records from the database and display in results web page
$result=mysqli_query($myconn,"SELECT * FROM records");

//Create table headers
echo "<table border=1>";
echo "<tr>";
echo "<td> id</td>";
echo "<td>Fname </td>";
echo "<td>Lname </td>";
echo "<td>age </td>";
echo "<td>school </td>";
echo "<td>gender </td>";
echo "<td>course </td>";
echo "<td>semester </td>";
echo "<td>fee</td>";
echo "<td>Product</td>";
echo "<td>qauntity</td>";
echo "<td>price</td>";
echo "<td>total</td>";
echo "<td> Delete</td>";
echo "<td>Update</td>";
echo "</tr>";

// fetch and loop the records
while($row = mysqli_fetch_array($result)) // fetch the row values
{
$id=$row['id'];
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['Fname']."</td>";
echo "<td>".$row['Lname']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['school']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['course']."</td>";
echo "<td>".$row['semester']."</td>";
echo "<td>".$row['fee']."</td>";
echo "<td>".$row['product']."</td>";
echo "<td>".$row['quantity']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['total']."</td>";
echo"<td><a href='delete.php?id=$id'>Delete record</a></td>";// create link to delete.php  file
echo"<td><a href='form_update.php?id=$id'>update record</a></td>";
}
echo "</table>";
?> 




