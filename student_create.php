<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


<div class="container  mt-5">

<?php
  include('message.php');
?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Student Add
                    <a href="index.php" class=" btn btn-danger float-end ">Back</a>
                </h4>
            </div>

            <div class="card-body">
                <form action="code.php" method="POST">


                  <div class="mb-3">
                  <label > Student Name</label>
                  <input type="text"  name="name" class="form-control" >
                  </div>

                  <div class="mb-3">
                  <label > Student Email  </label>
                  <input type="email"  name="email" class="form-control"  >
                  </div>

                  <div class="mb-3">
                  <label > Student Phone</label>
                  <input type="text"  name="phone" class="form-control" >
                  </div>

                  <div class="mb-3">
                  <label > Student Course</label>
                  <input type="text"  name="course" class="form-control" >
                  </div>

                  <div class="mb-3">

                  <button type="submit" name=" save_student" class="btn btn-primary">
                    Save student 
                  </button>
                  </div>
                </form>
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