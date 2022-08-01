<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFE8FF;">
        <div class="container">
            <a class="navbar-brand me-2" href="user.php">
                <img
                    src="resources/user.png"
                    height="30"
                    loading="lazy"
                    style="margin-top: -1px;"
                />
                <?php
                    include 'dbConnection.php';
                    
                    $userQuery = mysqli_query($connectionToDB, "SELECT names FROM users WHERE idUser = '".$_SESSION['identificateUser']."'");
                    $namePersonalized = mysqli_fetch_row($userQuery);

                    echo 'Hi! '.$namePersonalized[0];
                ?>
            </a>
            <ul>
            </ul>
            <a class="navbar-brand me-2" href="main.php">
                <img
                    src="resources/logo.png"
                    height="30"
                    loading="lazy"
                    style="margin-top: -1px;"
                />
                Home
            </a>

            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex align-items-center">
                    <a class="navbar-brand me-2" href="basket.php">
                        <img
                            src="resources/basket.png"
                            height="30"
                            loading="lazy"
                            style="margin-top: -1px;"
                        />
                    </a>
                    <ul>
                    </ul>
                    <a class="navbar-brand me-2" href="sessionDestroy.php">
                        <img
                            src="resources/logout.png"
                            height="30"
                            loading="lazy"
                            style="margin-top: -1px;"
                        />
                    </a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>