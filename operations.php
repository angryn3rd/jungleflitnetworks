<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operations Network Input</title>
    <link href="topbar.css"  rel="stylesheet" type="text/css"> <!-- topbar.css has to be included in every frontend page and this gives the navigation bar-->
  </head>
  <body>


  	<?php include("jungleflit.php"); ?>


  	<!--topbar code-->
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="place.php">Place</a></li>
          <li><a href="transport.php">Transport</a></li>
          <li style="float:right"><a href="operations.php">Operations</a></li>
          <li><a href="stays.php">Stays</a></li>
      </ul>
     
    <!--topbar code ends-->

  	<form name="operations" action="operations.php" method="post">
        	<table>
				<tr>
					Name<br><input type="text" name="name" placeholder="Enter the name of the connection" size="47px"/>
				</tr>
				<tr><br>
					Contact <br>+91<input type="text" name="contact" placeholder="Phone No."/>
				</tr>
				<tr><br>
					Description<br><textarea name="description" rows="5" cols="55" placeholder="Provide a brief description like his task or his designation or his role"></textarea>
				</tr>
				<tr><br>
					Place<br><input type="text" name="place" placeholder="Enter the name of the place" size="47px"/>
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
        $b=$_POST["contact"];
        $c=$_POST["description"];
        $d=$_POST["place"];
        	
	//query to insert the values into the mariadb database
	$query="INSERT INTO `operations`(`name`, `contact`, `description`, `place`) VALUES ('$a','$b','$c','$d')";
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