<html>
    <body>
        <form action ="insert.php" method="post">
            Firstname: <input type="text" name="firstname">
            Lastname: <input type="text" name="lastname">
            Age: <input type="text" name="age">
            <input type="submit">
        </form>

        <?php
        $con=mysqli_connect("localhost","admin","Password1");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // Create database
        $sql = "CREATE DATABASE my_db";

        if (mysqli_query($con, $sql)) {
            echo "Database my_db created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($con);
        }

        $con=mysqli_connect("localhost","admin","Password1", "my_db");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // Create table
        $sql1 = 
        "CREATE TABLE Persons (
        PID INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(PID),
        FirstName CHAR(30),
        LastName CHAR(30),
        Age INT
        )";

        // Execute query
        if (mysqli_query($con, $sql1)) {
            echo "Table persons created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($con);
        }

        mysqli_close($con);
        ?>
    </body>
</html>
