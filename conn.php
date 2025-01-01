<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $purpose = $_POST['purpose'];
    $mob = $_POST['mob'];
    $date = $_POST['date'];
    $intime = $_POST['intime'];
    $outtime = $_POST['outtime'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'studententry');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepared statement
        $db_stmt = $conn->prepare("INSERT INTO studententry(id, name, purpose, mob, date, intime, outtime) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $db_stmt->bind_param("issssss", $id, $name, $purpose, $mob, $date, $intime, $outtime);

        // Execute statement
        $db_stmt->execute();

        // Close statement and connection
        $db_stmt->close();
        $conn->close();

        echo "Entry Successful";
    }
}
?>
