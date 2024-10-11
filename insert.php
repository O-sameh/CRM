<?php

session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
} 
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
      <h1 class="text-center mt-5">Add New Empolyees</h1>

      <form
        class="w-75 mx-auto"
        action="addemployee.php"
        method="post"
        enctype="multipart/form-data"
      >
        <div class="row">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label">name</label>
              <input
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
              <input type="text" name="phone" class="form-control" id="phone" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="address" class="form-label">address</label>
              <input
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
              <input type="radio" name="gender" value="male" /> Male
              <input type="radio" name="gender" value="female" /> Female
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label">Status</label>
              <select class="form-control" name="status" id="">
                <option>single</option>
                <option>married</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="exampleInputname" class="form-label"
                >departments</label
              >
              <select class="form-control" name="dep" id="">
                <option value="id">HR</option>
                <option>Development</option>
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
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-4 w-100">Submit</button>
      </form>
    </div>

    <script src="js/bootstrap.js"></script>
  </body>
</html>
