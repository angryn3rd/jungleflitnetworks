<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="topbar.css"  rel="stylesheet" type="text/css"> <!-- topbar.css has to be included in every frontend page and this gives the navigation bar-->
  </head>

  <body>

    <?php include("jungleflit.php"); ?>

   <!--topbar code-->
      <ul>
          <li style="float:right"><a href="index.php">Home</a></li>
          <li><a href="place.php">Place</a></li>
          <li><a href="transport.php">Transport</a></li>
          <li><a href="operations.php">Operations</a></li>
          <li><a href="stays.php">Stays</a></li>
      </ul>
     
    <!--topbar code ends-->


        <?php
            include("jconnect.php"); //connects to the file that connects to the database
            $query="SELECT * FROM `place`"; //SQL query to select from database
            $result=mysql_query($query,$connect); //stores the query result in the $result variable
            
            //the code below prints the table
            echo "<table border='solid' >
                      <thead>
                      <td>Place</td>
                      <td>Choose</td>
                      </thead>";
            while($row=mysql_fetch_array($result)) //fetches the variable
            {
                $i=$row['place'];
                                
                ?>
                      <tr>
                      <td> <?php echo $i; ?></td>
                      
                      <td><a href="info.php?id=<?php echo $i; ?>">Go</a></td> <!--this line sends the place to the information page-->
                      
                      </tr>
        <?php }?>
        </table>

        <?php include("footer.php"); ?>
 
  </body>
</html>
