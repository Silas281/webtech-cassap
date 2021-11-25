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
    <title>CASSAP</title>
    <!--Styles.css-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="sidebar.css?v=<?php echo time(); ?>">
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
        <!--Search Form-->
        <div class="search-c m-5">
            <form action="" method="post">
                <input type="text" placeholder="Search">
                <button type="submit">Search</button>
            </form>
        </div>
        <!--Container div for table-->
        <div class="table-responsive m-5">
            <table class="table table-responsive table-borderless">
                <thead>
                    <tr>
                        <th><i class="bi bi-people"></i>Full Name</th>
                        <th>Year</th>
                        <th><i class="bi bi-book"></i>Course</th>
                        <th><i class="bi bi-telephone"></i>Telephone</th>
                        <th><i class="bi bi-pen"></i>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="bi bi-pencil-square"></i></a> <a href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="bi bi-pencil-square"></i></a> <a href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="bi bi-pencil-square"></i></a> <a href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="bi bi-pencil-square"></i></a> <a href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="bi bi-pencil-square"></i></a> <a href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>
                    <tr>

                        <td>Mark</td>
                        <td>2023</td>
                        <td>CS</td>
                        <td>+2335463636</td>
                        <td><a href="#"><i class="bi bi-pencil-square"></i></a> <a href="#"><i
                                    class="bi bi-trash"></i></a></td>

                    </tr>


                </tbody>
            </table>
        </div>
        <!-- Button trigger modal - add advisor -->
        <div class="add-person">
            <a title="Add a person" href="" id="add-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                    class="bi bi-person-plus-fill"></i></a>
        </div>



        <!-- Modal Form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title px-5" id="exampleModalLabel">Add Person</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form class="row g-3 px-5 px-2">
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-12">
                                <label for="emailInput" class="form-label">Emial</label>
                                <input type="email" class="form-control" id="emailInput" name="email">
                            </div>
                            <div class="col-12">
                                <label for="inputBio" class="form-label">Bio</label>
                                <textarea name="bio" class="form-control" id="inputAddress" rows="3"
                                    placeholder="A third year student intereted in ..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputTel" class="form-label">Telephone Number</label>
                                <input type="text" name="telephone" class="form-control" id="inputTel"
                                    placeholder="+233542893998">
                            </div>
                            <div class="col-md-12">
                                <label for="inputClass" class="form-label">Class</label>
                                <input type="text" name="class" class="form-control" id="inputClass">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Booking Link</label>
                                <input type="url" name="booking-link" class="form-control" id="inputBookLink">
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label">Type</label>
                                <select id="inputType" name="type" class="form-select">
                                    <option selected>Advisor</option>
                                    <option>CPA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Department</label>
                                <select id="inputType" class="form-select" name="dept">
                                    <option selected>CS</option>
                                    <option>MIS</option>
                                    <option>EE</option>
                                    <option>BA</option>
                                    <option>ME</option>
                                    <option>CE</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-custum-color">Add Person</button>
                        </form>
                        <!--/Form-->
                    </div>
                </div>
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