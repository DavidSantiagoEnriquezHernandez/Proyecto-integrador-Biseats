<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
</head>
<body style="background-image: url(resources/fer.jpg); background-size: cover;">
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-left align-items-center h-100">
                <div class="col-xl-4">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="resources/logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">BisEats</h4>
                                    </div>
                                    <form action="dbLogin.php" method="post">
                                        <div class="form-outline mb-5">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="txtFldUsername" class="form-control " placeholder="Username"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="txtFldPassword" class="form-control" placeholder="**********"/>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input type="submit" class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3" value="Log in">
                                            <?php
                                                session_start();
                                                if(isset($_SESSION['loginError'])){
                                                    $loginError = $_SESSION['loginError'];

                                                    echo '
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        '.$loginError.'
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    ';
                                                    unset($_SESSION['loginError']);
                                                }
                                            ?>    
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="resources/escuela.jpg" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="resources/utch.jpg" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="resources/ee.png" class="d-block w-100">
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>