<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Laboratorist Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Laboratorist Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="L_ID" value="<?php if(isset($_GET['L_ID'])){echo $_GET['L_ID'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "hospital");

                                if (isset($_GET['L_ID'])) {
                                    $L_ID = $_GET['L_ID'];

                                    $query = "SELECT * FROM laboratorist WHERE L_ID='$L_ID' ";
                                    $QUERY_RUN = mysqli_query($con, $query);

                                    if(mysqli_num_rows($QUERY_RUN)>0)
                                    {

                                        foreach($QUERY_RUN as $row){
                                
                                           ?>
                                                <div class="form-group mb-3">
                                                    <label for="">First Name</label>
                                                    <input type="text" value="<?= $row['FIRST_NAME']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Last Name</label>
                                                    <input type="text" value="<?= $row['LAST_NAME']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Salary</label>
                                                    <input type="text" value="<?= $row['SALARY']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone number</label>
                                                    <input type="text" value="<?= $row['PHONE_NUMBER']; ?>" class="form-control">
                                                </div>
                                            
                                           <?php
                                        }

                                    }else
                                    {
                                        echo "NO RECORD FOUND";
                                    }
                                }
                                ?>
                                                

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>