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
         <p>
         This is content. This should be displayed under the list.
         Note this element is nested within the content div to allow the padding to work more effectively.
         </p>
         <h3>Sample Table </h3>

         <?php
         $con = mysqli_connect("localhost","admin","Password1", "CS_Tools");
         // Check connection
         if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

         $partsResults = mysqli_query($con, "SELECT * FROM Parts");

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

         while($row = mysqli_fetch_array($partsResults)) {
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

         <h3> Sample Form </h3>
         <table class="formtab">
            <tr>
               <td>
                  <form>
                     <p>Name:<input type = "text" name="name"> </p>
                     <p>Email:<input type = "text" name= "email"> </p>
                     <input type="submit" value = "submit" name="submit">
                  <form>
               </td>
            </tr>
         </table>
         </div></div>
         <div class="footer">
            <p id = "copyright">Copyright statement.</p>
            <a id = "login" href = "adminLogin.php">Login</a>
         </div>
      </div>
   </body>
</html>
