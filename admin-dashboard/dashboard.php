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
    <link rel="stylesheet" href="sidebar.css?v=<?php echo time();?>">
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
        <div class="container">

        
        <div class="row dash-row mt-5">
            <div class="col-sm">
                <div class="dash-items">
                    <span><i class="bi bi-people"></i></span>
                    <span class="num-count">45</span>
                    <span>Career Advisors</span>
                </div>
            </div>
            <div class="col-sm">
                <div class="dash-items">
                    <span><i class="bi bi-mortarboard"></i></span>
                    <span class="num-count">45</span>
                    <span>Career Peer Advisors</span>
                </div>
            </div>
            <div class="col-sm">
                <div class="dash-items">
                    <span><i class="bi bi-calendar4-event"></i></i></span>
                    <span class="num-count">45</span>
                    <span>Events</span>
                </div>
            </div>
            <div class="col-sm">
                <div class="dash-items">
                    <span><i class="bi bi-"></i></span>
                    <span class="num-count">45</span>
                    <span>Career Peer Advisors</span>
                </div>
            </div>
        </div>
        </div>
       
    </div>
   

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>