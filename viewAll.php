<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>

<body style="background-image: url(img/cust.jpg);">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<style>
    img{
        filter: blur(8px);
        width:900px;
        height:500px;
        margin-left:4%;
    }
    .container1{
        position: relative;
        text-align: center;
    }
    .pos{
         position:absolute; 
        top:2%;
        width:90%;
        transform: translate(3%,-5%);
    }
    .footer{
        text-align: center;
        margin-top:2%;
        margin-left:500px;
    }
    
</style>
<?php
  include 'navbar.php';
?>


<div class="container">
        <h2 class="text-center pt-4" style="color : black;">List Of Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <div class="container2">
                            
                    <img src="img/cust.jpg" >
                    <div class="pos">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border:solid 3px black;">
                   
                    <thead style="color : black;">
                            <tr style="border:solid 3px black;">
                            
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                        
                            </tr>
                            

                        </thead>
                    
                        <tbody></div></div>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black; border:solid 3px black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>

                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         
         <div class="footer">
           <strong> <p>&copy 2021</strong> <b>REESMA ISRATH</b> </p>
                </div>
        </body>
</html>