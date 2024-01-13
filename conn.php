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
    $database = $conn->prepare("insert into studententry(id , name , purpose , mob , date , intime , outtime)
    values(?, ?, ?, ?, ? ,? ,?)");
    $database->bind_param("issssss", $id , $name , $purpose , $mob , $date , $intime , $outtime);

// i - integer
// s - string

// Execute the prepared databse statement
$database->execute();

// Close the prepared database statement
$database->close();

//close the connection
$conn->close();

echo "Entry Successful";

}
?>
      