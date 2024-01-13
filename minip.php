<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Management System</title>
    <link rel="stylesheet" href="minip.css">
 

</head>
<body>
   <center>
         <h1>Entry Management System</h1>
   </center>
    
    <form action="conn.php" method="post">

        <div class="id">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter ur ID" required>
        </div>
        
        <div class="name">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter ur name" required>
        </div>
        <div class="purpose">
            <label for="purpose">Purpose:</label>
            <input type="text" id="purpose" name="purpose" placeholder="Purpose" required>
        </div>
        <div class="mob">
            <label for="mob"> Mobile:</label>
            <input type="text" id="mob" name="mob" placeholder="Enter mobile number" required>
        </div>
        <div class="date">
            <label for="date">Date</label>
            <input type="date" id="date" name="date">

        </div>
        <div class="time">
        <label for="intime">In-Time</label>
            <input type="time" id="intime" name="intime">

            <label for="outtime">Out-Time</label>
            <input type="time" id="outtime" name="outtime">

        </div>
        <br>
        <br>
        <button type="submit">Enter</button> &nbsp;
        <button type="reset">Clear entry</button>

        
        
        
    </form>
</body>
</html>
