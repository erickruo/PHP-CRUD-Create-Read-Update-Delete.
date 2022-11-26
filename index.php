
                            <?php
                            require 'dbcon.php';

                            ?>

                            <!doctype html>
                            <html lang="en">

                            <head>
                            <title>index-page</title>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                            <!-- Bootstrap CSS v5.2.1 -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
                            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

                            </head>

                            <body>
                            <div class="container">
                            <div class="row">
                            <div class="colmd-12">
                            <div class="card">
                            <div class="card-header">
                            <h4>
                            Student details
                            <a href="student_create.php" class="btn btn-primary float-end">
                            Add students
                            </a>


                            </h4>
                            </div>
                            <div class="card-body">
                            <table class="table  table-bordered  table-striped">
                            <thead> 
                            <tr>

                            <th>Id</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone Number</th>
                            <th> Course</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $query= "SELECT * FROM students";

                            $query_run = mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run)>0){

                            foreach($query_run as $student){

                            ?>
                            <tr>

                            <td> <?= $student['id'];?> </td>
                            <td> <?= $student['name'];?> </td> 
                            <td><?= $student['email'];?> </td>  
                            <td><?= $student['phone'];?> </td> 
                            <td> <?= $student['course'];?> </td>
                            <td>


                            <a href="" class="btn btn-info btn-sm">View</a>

                            <a href="student-edit.php?id<?=$student['id'];?>" class="btn btn-success btn-sm">Edit</a>

                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>

                            </tr>   
                            <?php
                            }
                            }
                            else{
                            echo " <h5> No record found </h5>";
                            }
                            ?>

                            </tbody>
                            </table>
                            </div>


                            </div>
                            </div>
                            </div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
                            </script>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
                            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
                            </script>
                            </body>

                            </html>

                            //install emme......