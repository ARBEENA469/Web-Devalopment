<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">


    <style type="text/css">
	body{
		background-color:#cfb7eb  ;
	}
      button{
        transition: 2.5s;
      }
      button:hover{
        background-color:#000000;
        color: black;
      }
    </style>
</head>
<body>

<!-- Connect to DB -->
<?php
include "config.php";
 $sql = "SELECT * FROM users";
 $result = mysqli_query($conn,$sql);

?>

<?php include "navbar.php" 
?>
<br/> <br/>

<div class="container">
               <h2 class="text-center pt-4" style="color : black;"><center> User Details</center></h2> <br/> 
		<br>
            <div class="row">
                <div class="col">
                  <table class="table table-dark table-hover">
			          <thead style="color : white;">
                            <tr span=2>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                         <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
						<td><a href="selectview.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #62635c;">View</button></a></td> 
                    </tr>
                             <tbody>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
			
			<!--footer-->
<footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>SYEDA ABEENA </b> <br> SPARKS BANK</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> </body>
</html>

           
