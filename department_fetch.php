<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Department Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Department Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="DEPT_NAME" value="<?php if(isset($_GET['DEPT_NAME'])){echo $_GET['DEPT_NAME'];} ?>" class="form-control">
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

                                if (isset($_GET['DEPT_NAME'])) {
                                    $DEPT_NAME = $_GET['DEPT_NAME'];

                                    $query = "SELECT * FROM department WHERE DEPT_NAME='$DEPT_NAME' ";
                                    $QUERY_RUN = mysqli_query($con, $query);

                                    if(mysqli_num_rows($QUERY_RUN)>0)
                                    {

                                        foreach($QUERY_RUN as $row){
                                
                                           ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Number of Patient</label>
                                                    <input type="text" value="<?= $row['Num_of_patient']; ?>" class="form-control">
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