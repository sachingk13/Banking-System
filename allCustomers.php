<?php include "./php/init.php" ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sachin G K">
    <meta name="copy rights" content="shashikumar@20">
    <title>All Customers | Sachin G K</title>

    <!-- styles -->
    <link rel="stylesheet" href="./assets/css/main.min.css">

</head>
<body>

<?php include "./templets/header.html" ?>

    
    <main>
        
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Balance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 

                        $query ="SELECT * FROM customers";
                        $res = mysqli_query($con, $query);

                        while($row = mysqli_fetch_assoc($res)){
                    ?>

                    <tr>
                        <td><?php echo $row["account_number"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["cur_balance"] ?></td>
                        <td><a href="./viewCustomer.php?number=<?php echo $row["account_number"] ?>" class="plain-btn">View Profile</a></td>
                    </tr>
                            <?php
                            }
                            ?>
                </tbody>
            </table>
        </div>

    </main>

</body>
</html>