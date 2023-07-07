<?php
    include 'Ad_Connect.php';
    $sql="SELECT * FROM Customer";
    $result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Ad_Style.css">

    <!-- CSS Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Ad_image/favicon.ico">
</head>
<body>
<div class=" vh-100">
        <div class="row row-cols-2 g-0 w-100 h-100">
            <div class="col-2 bg-dark h-100">
            <?php
                include "Ad_Navbar.php"
            ?>
            </div>
            <div class=" col-10 bg-danger h-100">
                <div class="Page-Content m-3">
                    <h1 class="text-light">Customer</h1>
                    <?php
                    $counter=1;
                    while($row=mysqli_fetch_array($result)){
                    ?>
                        <div class="row my-3 mx-1">
                            <div class="card" style="width: 100%; height: 120px">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <img src="Ad_image/fortest.jpg" width="150" class="rounded float-start" alt="...">
                                        </div>
                                        <div class="col">
                                            <p><?php echo $row['Cust_Firstname'] ?>&nbsp;&nbsp;<?php echo $row['Cust_Lastname'] ?></p>
                                        </div>
                                        <div class="col">
                                            <?php echo $row['Cust_Email'] ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $row['Cust_Tel'] ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $row['Cust_Address'] ?>
                                        </div>
                                        <div class="col">
                                            
                                        </div>
                                        <div class="col-2">
                                            <div class="row m-1">
                                                <a href="#" class="btn btn-warning "><i class="bi bi-wrench"></i></a>
                                            </div>
                                            <div class="row m-1">
                                                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>