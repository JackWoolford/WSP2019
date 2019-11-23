<?php
$con = mysqli_connect("localhost","admin","Password1", "db_accounts");
    // Check connection
    if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $partsResults = mysqli_query($con, "SELECT * FROM Parts");


?>

<!DOCTYPE html>
<html>
   <head>
   <title> Example Only</title>
   <!--You can use an external CSS file that controls all pages, I have kept all the code in one file for demonstration purposes.
   Just cut out the code between the style tags and paste it into a styles.css file. 
   Then you need to write a link to that file in the head of this document.
   The code for the link is:
   <link href="styles.css"rel="stylesheet" type="text/css">
   -->
   <style>
   body{
   font-family:verdana,arial,sans-serif;
   background:url("stack.png");
   }
   h3{
      font-family:verdana,arial,sans-serif;
      color:#069;
      }
   .container{
      margin:auto;
      width:900px;
      background-color:#fff;
      
      }
   .content{
      width:900px;
      float:left;
      background:#CCC;
   }
   .innerContent{
   width:800;
   padding:20px;
   margin:20px;
   }
   .navbar{
   width:900px;
   background-color:#069;
   }
   .footer{
   width:860px;
   background-color:#069;
   color:#fff;
   padding:20px;
   }

   ul{
      list-style:none;
      margin:0;
      padding:0;
   }
   ul.nav li{
      display:inline;
      float:left;
   }

   ul.nav a{
      display:block;
      padding:5px;
      background-color:#006699;
      width:140px;
      color:#fff;
      font-weight:bold;
      text-decoration:none;
   }
   ul.nav a:hover{
      color:#ff0;
   }
   .tab{
      margin:auto;
      padding:5px;
      }
   .tab th{
      color:#fff;
      background-color:#069;
      }
      .formtab{
      margin:auto;
      }
   </style>
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
            <li><a href="#"> Link 1</a></li>
            <li><a href="#"> Link 2</a></li>
            <li><a href="#"> Link 3</a></li>
            <li><a href="#">Link 4</a></li>
            <li><a href="#">Link 5</a></li>
            <li><a href="#">Link 6</a></li>
         </ul>
      </div>
      <div class="content">
      <div class="innerContent">
      This is content. This should be displayed under the list.
      Note this element is nested within the content div to allow the padding to work more effectively.<p/>
      <!--included html table Your own tables are likely to be wider, this one is centred in the CSS at the top of the page.-->
      <h3>Sample Table </h3>

      <?php
         
      ?>
      <table class="tab" border=1>
         <tr>
            <th>Item 1</th>
            <th>Item 2</th>
            <th>Item 3</th>
            <th>Item 4</th>
         </tr>
         <tr>
            <td>data</td>
            <td>data</td>
            <td>data</td>
            <td>data</td>
         <tr>
      </table>
      <!--included html form in a table-->
      <h3> Sample Form </h3>
      <table class="formtab">
         <tr>
            <td>

               <form>
               Name:<input type = "text" name="name"> <p/>
               Email:<input type = "text" name= "email"> <p/>
               <input type="submit" value = "submit" name="submit">

               <form>
      <p/>
            </td>
         </tr>
      </table>
      Login to Admin??

      </div></div>
      <div class="footer">
      Login to Admin.
      Copyright statement.
      </div>
      </div>
   </body>
</html>
