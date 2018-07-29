<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Places Completed</title>
    <link href="topbar.css"  rel="stylesheet" type="text/css"> <!-- topbar.css has to be included in every frontend page and this gives the navigation bar-->
  </head>
  <body>

    <?php include("jungleflit.php"); ?>

    <!--topbar code-->
      <ul>
          <li><a href="index.php">Home</a></li>
          <li style="float:right"><a href="place.php">Place</a></li>
          <li><a href="transport.php">Transport</a></li>
          <li><a href="operations.php">Operations</a></li>
          <li><a href="stays.php">Stays</a></li>
      </ul>
     
    <!--topbar code ends-->




  	<form name="place" action="place.php" method="post">
        	<table>
				<tr>
					<br><input type="text" name="name" placeholder="Enter the name of the place that is covered" size="47px"/>
				</tr>
				
				<td>
				<input type="submit" name="save" value="Save" style=" background-color: #4CAF50;
							    color: white;
							    padding: 15px 32px;
							    text-align: center;
							  	font-size: 12px;
							    display: inline-block;											    
							    margin: 4px 2px;
							    cursor: pointer;" >
				
		    	</td>
				
	    	</table>
        </form>
		<?php include("footer.php"); ?> 
  </body>
</html>
 
<?php
include("jconnect.php"); //this code connects the database to this file
if(isset($_POST["save"])) //name of the submit button is save
       {
        $a=$_POST["name"];  //the following code stores the inputs that are passed in some variables
        	
	//query to insert the values into the mariadb database
	$query="INSERT INTO `place`(`place`) VALUES ('$a')";
        $result=mysql_query($query,$connect);
        if($result)
        {
            echo"Your data is inserted";
        }
        else{
            echo"there was an error"; 
        }
       } 
?> 