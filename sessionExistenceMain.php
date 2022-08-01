<?php
    session_start();

    if(!isset($_SESSION['identificateUser']) || $_SESSION['identificateUser'] == '') {
        echo '
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Hey!</h4>
            <p>You are NOT suppose to be here!!!.</p>
            <hr>
            <p class="mb-0">Please log in properly.</p>
        </div>
        ';
    }
    else{
        include 'navBarComponent.php';
        
        echo' 
        <section>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-left align-items-center h-100">
                    <div class="col-xl-12">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-12">
                                    <div class="card-body p-md-5 mx-md-8" style="background-color:#FFE8FF">
                                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                                            ';
                                            include 'itemComponent.php';
                                            echo '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ';
    }
?>