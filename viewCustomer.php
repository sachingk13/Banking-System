<?php  
    include "./php/init.php";
    if(isset($_GET["number"])){
        $accno = intval($_GET["number"]);
        $res = mysqli_query($con, "SELECT * FROM customers WHERE account_number = $accno");
        if(mysqli_num_rows($res) != 1){
            echo "<script> alert('error finding your account') ; window.location = './allCustomers.php' </script>";
        }else{
        
        $rows = mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Shashi Kumar D M">
    <meta name="copy rights" content="shashikumar@20">
    <title>Customer Info | Sachin G K</title>

    <!-- styles -->
    <link rel="stylesheet" href="./assets/css/main.min.css">

</head>
<body>

<?php include "./templets/header.html" ?>

    
    <main>
       <div class="personal-info">
           <div class="row">
               <h5>Account Number :</h5>
               <h5><?php echo $rows["account_number"] ?></h5>
           </div>
           <div class="row">
               <h5>Account Type :</h5>
               <h5><?php echo $rows["name"] ?></h5>
           </div>
           <div class="row">
               <h5>Phone Numebr :</h5>
               <h5><?php echo $rows["phno"] ?></h5>
           </div>
           <div class="row">
               <h5>Email :</h5>
               <h5><?php echo $rows["email"] ?></h5>
           </div>
           <div class="row">
               <h5>Address :</h5>
               <h5><?php echo $rows["address"] ?></h5>
           </div>
           <div class="row">
               <h5>Balance :</h5>
               <h5><?php echo $rows["cur_balance"] ?></h5>
           </div>
           <div class="row">
               <a href="./transfer.php?number=<?php echo $rows['account_number'] ?>" class="transfet-page-btn">Transfer Amount</a>
               <a href="./allCustomers.php" class="transfet-page-btn">Go Back</a>
           </div>
       </div>
    </main>

</body>
</html>

<?php
        }
    }

?>