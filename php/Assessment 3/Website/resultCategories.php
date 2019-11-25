<!DOCTYPE html>
<html>
   <head>
      <link href="styles.css"rel="stylesheet" type="text/css">
      <title> Example Only</title>
   </head>
   <body>
      <div class="container">
         <div class="header">
         <!--you can add your banner in place of mine below-->
         <img src= "banner.jpg"width="900"/>
         </div>
         <!-- note navbar is same width as banner -->
         <div class="navbar">
            <ul class="nav">
               <li><a href="index.php">Index</a></li>
               <li><a href="search.php">Search</a></li>
               <li><a href="results.php">Results</a></li>
               <li><a href="resultCategories.php">Result Categories</a></li>
               <li><a href="reviews.php">Reviews</a></li>
               <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
         </div>
      <div class="content">
      <div class="innerContent">
         <h3>Select Category </h3>
         <?php

            error_reporting(E_ALL);
            ini_set('display_errors',1);

            // Connect to Database and alert if error
            $DBConnect=mysqli_connect("localhost","admin","Password1","CS_Tools");
            if (mysqli_connect_errno())
            {
               echo "Failed to connect to Database: " . mysqli_connect_error();
            }

            $SQLQuery =  "SELECT * FROM Parts";
            $result = mysqli_query($DBConnect, $SQLQuery);
            while ($row = mysqli_fetch_array($result))
               {
                  $Category = $row['Category'];
               }
         ?>
         <form action="resultCategories.php" method="post" id="categoryForm">
            <select name="categoryOptions">
               <?php        
                  // SEARCH FOR CATEGORIES
                  $categories = mysqli_query($DBConnect, "SELECT DISTINCT Category FROM Parts");
                        
                  while ($row = mysqli_fetch_array($categories))
                  {
                     echo "<option ";
                     if ($row['Category'] == $Category)
                     {
                        echo 'selected';
                     }
                     echo ">" . $row['Category'] . "</option> ";
                  }
               ?>
            </select>
            <input type="submit" name="submit" value="Select"/>
         </form>
         <?php
            
            
            if(isset($_POST['submit'])) {
               $select_val = $_POST['categoryOptions'];
            } else {
               $select_val = NULL;
            }
            
            
            $con = mysqli_connect("localhost","admin","Password1", "CS_Tools");
            // Check connection
            if (mysqli_connect_errno()) {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $categoryResults = mysqli_query($con, "SELECT * FROM Parts WHERE Category = '" . $select_val . "'");

            echo "<table border='1'>";
            echo "<thead>";
            echo "<tr>";

            $partsTitles = mysqli_query($con, "SHOW COLUMNS FROM Parts");

            while ($row = mysqli_fetch_assoc($partsTitles)) {
               echo "<th>" . $row['Field'] . "</th>";
            }

            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            while($row = mysqli_fetch_array($categoryResults)) {
               echo "<tr>";
               echo "<td>" . $row['PartNum'] . "</td>";
               echo "<td>" . $row['PartName'] . "</td>";
               echo "<td>" . $row['Description'] . "</td>";
               echo "<td>" . $row['Specs'] . "</td>";
               echo "<td>" . $row['OnHand'] . "</td>";
               echo "<td>" . $row['Category'] . "</td>";
               echo "<td>" . $row['Warehouse'] . "</td>";
               echo "<td>" . $row['Price'] . "</td>";
               echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
         ?>
      </div>
      </div>
      <div class="footer">
            <p id = "copyright">Copyright statement.</p>
            <a id = "login" href = "adminLogin.php">Login</a>
      </div>
      </div>
   </body>
</html>
