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
                        <div class="card rounded-3 text-black border border-danger">
                            <div class="row g-0">
                                <div class="col-lg-12">
                                    <div class="card-body p-md-5 mx-md-2">

                                            ';
                                                include 'userComponent.php';
                                            echo '
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