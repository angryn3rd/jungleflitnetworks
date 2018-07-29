<!DOCTYPE html>
<html>
 <head>
 	<title>Information Page</title>
 	<meta charset="utf-8">
 </head>
 <body>
 	<div>
 		 <?php
            include("jconnect.php"); //connects to the file that connects to the database
            $id=$_GET['id'];
            //echo $id;
            $query="SELECT `name`, `contact`, `description` FROM `operations` WHERE `place`='$id'"; //SQL query to select from database
            $result=mysql_query($query,$connect); //stores the query result in the $result variable
            
            //the code below prints the table
            ?>
            <h1>Operators Details</h1>
            <table border="solid">
                      <thead>
                      <td>Name</td>
                      <td>Contact</td>
                      <td>Description</td>
                      </thead>
            <?php while($row=mysql_fetch_array($result)) //fetches the variable
            {
                $a=$row['name'];
                $b=$row['contact'];
                $c=$row['description'];
                
                ?>
                      <tr>
                      <td> <?php echo $a; ?></td>
                      <td> <?php echo $b; ?></td>
                      <td> <?php echo $c; ?></td>
                      </tr>
        <?php }?>
        </table><br><br>
       </div>
       
       <div>
 		 <?php
            include("jconnect.php"); //connects to the file that connects to the database
            $query="SELECT `name`, `contact`, `route` FROM `transport` WHERE `place`='$id'"; //SQL query to select from database
            $result=mysql_query($query,$connect); //stores the query result in the $result variable
            
            //the code below prints the table
            ?>
            <h1>Transportation Details</h1>
            <table border="solid">
                      <thead>
                      <td>Name</td>
                      <td>Contact</td>
                      <td>Route</td>
                      </thead>
            <?php while($row=mysql_fetch_array($result)) //fetches the variable
            {
                $a=$row['name'];
                $b=$row['contact'];
                $c=$row['route'];
                
                ?>
                      <tr>
                      <td> <?php echo $a; ?></td>
                      <td> <?php echo $b; ?></td>
                      <td> <?php echo $c; ?></td>
                      </tr>
        <?php }?>
        </table><br><br>
       </div>

       <div>
 		 <?php
            include("jconnect.php"); //connects to the file that connects to the database
            $query="SELECT `name`, `contact`, `address` FROM `stays` WHERE `place`='$id'"; //SQL query to select from database
            $result=mysql_query($query,$connect); //stores the query result in the $result variable
            
            //the code below prints the table
            ?>
            <h1>Stays Details</h1>
            <table border="solid">
                      <thead>
                      <td>Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      </thead>
            <?php while($row=mysql_fetch_array($result)) //fetches the variable
            {
                $a=$row['name'];
                $b=$row['contact'];
                $c=$row['address'];
                
                ?>
                      <tr>
                      <td> <?php echo $a; ?></td>
                      <td> <?php echo $b; ?></td>
                      <td> <?php echo $c; ?></td>
                      </tr>
        <?php }?>
        </table>
       </div>


       <td style="padding:20px"><a href="index.php">
              <input  style=" background-color: #4CAF50;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    font-size: 12px;
                    display: inline-block;                          
                    margin: 4px 2px;
                    cursor: pointer;" type="submit" name="press" value="Back to Home"></a></td>

       <?php include("footer.php"); ?>
 </body>