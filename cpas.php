<?php 
/*
*********************************************************************************
A Web Site for Ashesi Career Services Department
*********************************DASHBOARD***************************************
Date started: 10th November, 2021
Date completed:  November, 2021
**********************************************************************************
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASSAP|DASHBOARD</title>
    <!--Styles.css-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="sidebar.css">
    <!-- Bootstap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>

<body>



    <!--NAVBAR-->
  


    <!--SIDEBAR-->
    <?php require_once('sidebar.php') ?>

    <div class="main-content">
        <div class="title">
            <h1>CAREER PEER ADVISORS (CPAs)</h1>
        </div>
        <!--CPAs-->
        <div class="row m-5 cpa-card">
            <div class="col-sm ">
                <div class=" profile-top mb-3">
                    <div class=" im-c">

                        <img class="cpa-image" src="assets/images/head1.jpeg" alt="">

                        <h4 class="cpa-name">Silas Sangmin</h4>

                    </div>

                    <div class="">
                        <button class="update-button"><i class="bi bi-pencil-square"></i>Update info</button>
                    </div>
                </div>
                <div class="cpa-info-section">
                    <h3>Bio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                        Praesent libero. Sed cursus ante dapibus diam.
                        Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                </div>
                <div>
                    <h3>Year Group</h3>
                    <small>silas.sangmin@ashesi.edu.gh</small> <br>
                    <small>+233542893998</small>
                </div>
            </div>
        </div>


        <div class="row m-5 cpa-card">
            <div class="col-sm ">
                <div class=" profile-top mb-3">
                    <div class=" im-c">

                        <img class="cpa-image" src="assets/images/head1.jpeg" alt="">

                        <h4 class="cpa-name">Silas Sangmin</h4>

                    </div>

                    <div class="">
                        <button class="update-button"><i class="bi bi-pencil-square"></i>Update info</button>
                    </div>
                </div>
                <div class="cpa-info-section">
                    <h3>Bio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                        Praesent libero. Sed cursus ante dapibus diam.
                        Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                </div>
                <div>
                    <h3>Year Group</h3>
                    <small>silas.sangmin@ashesi.edu.gh</small> <br>
                    <small>+233542893998</small>
                </div>
            </div>
        </div>

        <div class="row m-5 cpa-card">
            <div class="col-sm ">
                <div class=" profile-top mb-3">
                    <div class=" im-c">

                        <img class="cpa-image" src="assets/images/head1.jpeg" alt="">

                        <h4 class="cpa-name">Silas Sangmin</h4>

                    </div>

                    <div class="">
                        <button class="update-button"><i class="bi bi-pencil-square"></i>Update info</button>
                    </div>
                </div>
                <div class="cpa-info-section">
                    <h3>Bio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                        Praesent libero. Sed cursus ante dapibus diam.
                        Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
                </div>
                <div>
                    <h3>Year Group</h3>
                    <small>silas.sangmin@ashesi.edu.gh</small> <br>
                    <small>+233542893998</small>
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>