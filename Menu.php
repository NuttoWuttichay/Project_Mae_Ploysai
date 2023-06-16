<?php
    include "Navbar.php"
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mae Ploysai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color:#222831">

    <!-- menu --->
    <div class="container align-item-center">
        <h1 class="text-center text-white"><br>Our Menu<br><br></h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
    $i=0;
    while($i<9){
    ?>

            <div class="col">
                <div class="card h-100">
                    <img src="image/food.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>

            <?php
    
    $i++;
    }
    ?>
            <br><br>
            
            <br><br>
        </div>
    </div>
    <!-- end menu --->
    <br><br>
    <br><br>
    <?php
    include "footer.php"
    ?>

</body>

</html>