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
        
        $accountQuery = mysqli_query($connectionToDB, "SELECT username, password, names, lastNames, telephone, email 
        FROM users WHERE idUser = '".$_SESSION['identificateUser']."'");

        $accountData = mysqli_fetch_row($accountQuery);

        echo '
        <div class="wrapper bg-white mt-sm-0">
            <h4 class="pb-4 border-bottom">Account Information</h4>
            <form>
                <div class="py-2">
                        <div class="row py-2">
                            <div class="col-md-6"> 
                                <label>Username</label> 
                                <input type="text" name="updateUsername" class="bg-light form-control" placeholder="';echo $accountData[0];echo'"> 
                            </div>
                            <div class="col-md-6"> 
                                <label>Password</label> 
                                <input type="password" name="updatePassword" class="bg-light form-control" placeholder="';echo $accountData[1];echo'"> 
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"> 
                                <label>First Name(s)</label> 
                                <input disabled type="text" name="updateFirstName" class="bg-light form-control" placeholder="';echo $accountData[2];echo'"> 
                            </div>
                            <div class="col-md-6"> 
                                <label>Last Name(s)</label> 
                                <input disabled type="text" name="updateLastName" class="bg-light form-control" placeholder="';echo $accountData[3];echo'"> 
                                </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6"> 
                                <label for="phone">Phone Number</label>
                                <input type="text" name="updatePhone" class="bg-light form-control" placeholder="';echo $accountData[4];echo'"> 
                            </div>
                            <div class="col-md-6"> 
                                <label>Email Address</label> 
                                <input disabled type="text" name="updateEmail" class="bg-light form-control" placeholder="';echo $accountData[5];echo'"> 
                            </div>
                        </div>
                        <div class="py-3 pb-4 border-bottom">
                            <button type="submit" formaction="submitUserComponent.php" formmethod="post" class="btn btn-danger mr-3">Update Profile</button>';
                            
                            if(isset($_SESSION['accountDataUpdated'])){
                                $successfulUpdate = $_SESSION['accountDataUpdated'];

                                echo '
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        '.$successfulUpdate.'
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    ';
                                unset($_SESSION['accountDataUpdated']);
                            }

                            echo '<button type="reset" class="btn btn-outline-primary button">Cancel Changes</button> 
                        </div>
                </div>
            </form>
        </div>
        ';
    ?>
</body>
</html>