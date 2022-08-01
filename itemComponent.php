<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        include 'dbConnection.php';
        
        $itemsQuery = mysqli_query($connectionToDB, " SELECT MAX(idItem) AS lastIDItem FROM items");

        $lastItemID = mysqli_fetch_row($itemsQuery);

        
        for ($i = 1; $i <= $lastItemID[0]; $i++){

            echo '
                <div class="col mb-5">
                    <div class="card h-100" style="border:groove";>
                        <!-- Product image-->
                        <img class="card-img-top" 
                             src=
                             "
            ';

                                echo "resources/items/".$i.".png";

            echo '
                             
                             "
                        />

                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <form action="itemsConnection.php">

                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <label>
            ';
                                
                                            $itemNameQuery = mysqli_query($connectionToDB, " SELECT name FROM items WHERE idItem = '".$i."' ");

                                            $itemName = mysqli_fetch_row($itemNameQuery);

                                            echo $itemName[0];
                                    
            echo '
                                        </label>
                                    </h5>

                                    <!-- Product price-->
                                    <label>$
            ';
                                    
                                        $itemPriceQuery = mysqli_query($connectionToDB, " SELECT price FROM items WHERE idItem = '".$i."' ");

                                        $itemPrice = mysqli_fetch_row($itemPriceQuery);

                                        echo $itemPrice[0];
            
            echo '
                                    </label>

                                </form>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <form method="post" action="basket.php?id=';echo $i; echo '">
                        `    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <input type="submit" name="add-to-cart" class="btn btn-outline-danger mt-auto"  value="Add to cart"/>
                                </div>
                            </div>`
                        </form>
                    </div>
                </div>
            ';
        }
    ?>
</body>
</html>