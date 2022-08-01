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
        if(isset($_GET['id']) && $_GET['id'] != ""){
            $basketQuery = mysqli_query($connectionToDB," SELECT name, price FROM items WHERE idItem ='".$_GET['id']."' ");
            $itemData = mysqli_fetch_row($basketQuery);
        }
        
        //$itemData = mysqli_fetch_row($basketQuery);
        if(isset($_SESSION["itemData"]) && isset($itemData)){
        $_SESSION["itemData"] = array_merge($_SESSION['itemData'] ,$itemData);        
        }
        else {
            if(isset($_SESSION["itemData"])==false){
                if(isset($_GET['id'])){
                $_SESSION["itemData"] = $itemData;
                }
            } 
        }     
    ?>
    <div class="container">
    <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="20%">Price</th>
                </tr>
                <?php
                $datos="";
                $col=[];
                $j=0;
                if(isset($_SESSION["itemData"])){
                        foreach ($_SESSION['itemData'] as $item):
                            
                            for ($i=0; $i < strlen($item); $i++) 
                            { 
                                $datos = $datos. $item[$i]; 
                            }
                            $col[$j] = $datos;
                            $j++;
                            $datos="";
                        endforeach; 
                    }
                ?> 
                
                <?php for ($i=0; $i < count($col) ; $i=$i+2) {?>
                    <tr>
                        <th width="40%"><?php echo $col[$i]; ?>
                        </th> 
                        <th width="20%"><?php echo $col[$i+1]; ?> 
                        </th>
                    </tr>
                <?php  
                } ?>
            </table>
        </div>
        <a class="btn btn-primary" href="cleanBasket.php" role="button">Clear Basket</a>
        <?php
        if(!isset($_SESSION['itemData']) || (isset($_SESION['itemData']) && $_SESSION['itemData'] == '')){
            echo '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                '."Basked cleared succesfully".'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
        ?>
    </div>
</body>
</html>