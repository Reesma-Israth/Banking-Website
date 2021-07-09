<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <style>
    body{
      background-image: url('img/12.png');
      height:auto;
      width: auto;
      text-align: center;
    }
    form{
      height: 50%;
      width:25%
      
    }
    .field{
      margin-left: 50px;
    }
    .content{
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 370px;
  height: 410px;
  transform: translate(-50%,-50%);
  background:  #b3b3ff;
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
  
}
.content header{
  color: black;
  font-size: 30px;
  margin-top: 10px;
} 
.btn{
  width: 200px;
  color: white;
  border:solid 3px black; background-color : #527a7a; 
}
.btn:hover{
  background-color:  #b3b3ff;
}
h3{
  margin-top: 0px;
}
footer{
  margin-top:39% ;
}
  </style>
      <div class="content">
      
        <h3><b>Welcome to<br>ASIAN BANK</b></h3><br>
        <form>
          <div class="field">
            <b><a class="btn" href="viewAll.php" >View All Customers</a>
            <br><br>
            <a class="btn" href="transfermoney.php">Make a Transaction</a>
            <br><br>
            <a class="btn" href="transactionhistory.php">Transaction History</a>
            </b> <br>
          </div>
</form>
      </div>
  </div>
     <footer>
       <strong><p>&copy;2021 REESMA ISRATH</p></strong>
     </footer>
</body>
</html>