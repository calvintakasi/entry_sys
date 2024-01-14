<?php
$id=$_POST['id'];
$name=$_POST['name'];
$purpose=$_POST['purpose'];
$mob=$_POST['mob'];
$date=$_POST['date'];
$intime=$_POST['intime'];
$outtime=$_POST['outtime'];

//for database connection

$conn = new mysqli('localhost' , 'root' , '' , 'studententry');
if($conn->connect_error){
    die('Connection Failed: ' .$conn->connect_error);
}
else{
    $db_stmt = $conn->prepare("insert into studententry(id , name , purpose , mob , date , intime , outtime)
    values(?, ?, ?, ?, ? ,? ,?)");
    $db_stmt->bind_param("issssss", $id , $name , $purpose , $mob , $date , $intime , $outtime);

// i - integer
// s - string

// Execute the prepared databse statement
$db_stmt->execute();

// Close the prepared database statement
$db_stmt->close();

//close the connection
$conn->close();

echo "Entry Successful";

}
?>
      