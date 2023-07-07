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

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        
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
                                                <a href="Del_Customer.php?Cust_ID=<?php echo $row['Cust_ID']?>" class="btn btn-danger del-btn">
                                                    <i class="bi bi-trash"></i>

                                            </a>
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
<script>
    $('.del-btn').on('click',function(e){
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
            document.location.href = href;
        }
        })
    })
</script>