<?php

session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}

include"includes/connections.php";

$employee_id=$_POST['employee_id'];


$selectquery = "SELECT * FROM `employees` WHERE id = $employee_id";

$result = $connection->query($selectquery);

$employee = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empolyees</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Empolyees Data</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.php">Add Emplyees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="text-center mt-5">Edit Empolyee Data</h1>

      <form
        class="w-75 mx-auto"
        action="updateemployee.php"
        method="post"
        enctype="multipart/form-data"
      >
        <input type="text" hidden name="id" value="<?=$employee['id']?>">
        <div class="row">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label">name</label>
              <input
                value="<?=$employee['name']?>"
                type="text"
                name="username"
                class="form-control"
                id="exampleInputname"
              />
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                value="<?=$employee['email_address']?>"
                name="email"
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <label for="phone" class="form-label">phone</label>
              <input type="text" name="phone" class="form-control" id="phone" value="<?=$employee['phone']?>" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="address" class="form-label">address</label>
              <input
                value="<?=$employee['address']?>"
                type="text"
                name="address"
                class="form-control"
                id="address"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Position" class="form-label">Position</label>
              <input
                value="<?=$employee['position']?>"
                type="text"
                name="position"
                class="form-control"
                id="Position"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="salary" class="form-label">salary</label>
              <input
                value="<?=$employee['salary']?>"
                type="number"
                name="salary"
                class="form-control"
                id="salary"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="join date" class="form-label">join date</label>
              <input
                value="<?=$employee['join_date']?>"
                type="date"
                name="joindate"
                class="form-control"
                id="join date"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="dateofbirth" class="form-label">date Of Birth</label>
              <input
                value="<?=$employee['date_of_birth']?>"
                type="date"
                name="dateofbirth"
                class="form-control"
                id="dateofbirth"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="gender" class="form-label">gender</label>
              <br />
              <input  type="radio" name="gender" value="male" <?php if ($employee['gender'] =='male') echo'checked' ?>/> Male
              <input  type="radio" name="gender" value="female" <?php if ($employee['gender'] =='female') echo'checked' ?> /> Female
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label">Status</label>
              <select class="form-control" name="status" value="<?=$employee['status']?>">
                <option <?php if ($employee['status'] =='single') echo'selected' ?>>single</option>
                <option <?php if ($employee['status'] =='married') echo'selected' ?>>married</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label"
                >departments</label
              >
              <select class="form-control" name="dep" >
                <option <?php if ($employee['departments'] =='HR') echo'selected' ?>>HR</option>
                <option <?php if ($employee['departments'] =='Development') echo'selected' ?>>Development</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleCheck1" class="form-label"
                >Choose Profile image</label
              >
              <input
                type="file"
                name="profileimg"
                class="form-control"
                id="exampleCheck1"
              />
              <img width="100px" src="<?=$employee['image']?>" alt="employee image">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-4 w-100">Submit</button>
      </form>
    </div>

    <script src="js/bootstrap.js"></script>
  </body>
</html>