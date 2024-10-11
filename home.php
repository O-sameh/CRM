<?php
include "includes/connections.php";


session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}



$employees = $connection -> query("SELECT * FROM employees");




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
        <a class="navbar-brand" href="home.php">Empolyees Data</a>
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
      <h1 class="text-center mt-5">Empolyees Data</h1>

      <table class="table text-center">
        <thead class="table-dark">
          <th>id</th>
          <th>photo</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>Department</th>
          <th>salary</th>
          <th>join Data</th>
          <th>gender</th>
          <th>status</th>
          <th>Position</th>
          <th>address</th>
          <th>dateOfBirth</th>
          <th>date</th>
          <th>actions</th>
        </thead>
          <?php foreach($employees as $employee){?>
            <tr>
              <td><?=$employee['id']?></td>
              <td><img width = '100 px' src="<?=$employee['image']?>"></td>
              <td><?=$employee['name']?></td>
              <td><?=$employee['email_address']?></td>
              <td><?=$employee['phone']?></td>
              <td><?=$employee['departments']?></td>
              <td><?=$employee['salary']?></td>
              <td><?=$employee['join_date']?></td>
              <td><?=$employee['gender']?>r</td>
              <td><?=$employee['status']?></td>
              <td><?=$employee['position']?></td>
              <td><?=$employee['address']?></td>
              <td><?=$employee['date_of_birth']?></td>
              <td><?=$employee['date']?></td>
              <td>
                <form action="editemployee.php" method="post">
                  <input type="text" hidden name="employee_id" value="<?=$employee['id']?>">
                  <button type="submit" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                  </button>
                </form>
                <form action="deleteemployee.php" method="post">
                  <input type="text" hidden name="employee_id" value="<?=$employee['id']?>">
                  <button onclick="return confirm('are you sure that u want to delete <?=$employee['name']?>')" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="js/bootstrap.js"></script>
  </body>
</html>
