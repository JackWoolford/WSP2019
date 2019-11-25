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
         <h3>Reviews</h3>
         <p>
         Lewis <br>
         CS Tools provide amazing deals and 10/10 customer service!
         </p>
         <p>
         Duncan <br>
         I bought a GPU from CS Tools and I'm impressed somehow they delivered it in a day.
         </p>
         <p>
         Tom <br>
         CS Tools customer service has been great, they helped me work out what I needed and arraned a deal on the parts.
         </p>
         
         <h3>Post a review</h3>
         <table class="formtab">
            <tr>
               <td>
                  <form method="post" action="thanks.php">
                     <p>Name: <input type="text" name="name"></p>
                     <p>Review:</p>
                     <textarea maxlength=100 rows=5 cols=40 name="review"></textarea>
                     <br>
                     <br>
                     <input type="submit" value = "Submit" name="submit">
                  </form>
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
