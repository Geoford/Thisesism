<?php
 include ("connection.php");
  if(count($_POST) > 0) {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $phone = $_POST['phone'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      // $result = mysqli_query($conn, "SELECT * FROM user_table WHERE id='" . $_POST['id'] . "'");
      // $row = $result->fetch_assoc();
      // $hashed_password = $row['password'];

      // $password = !empty($_POST['password']) ? $_POST['password'] : $hashed_password;

      mysqli_query($conn, "UPDATE user_table SET
          first_name='$first_name',
          last_name='$last_name',
          phone='$phone',
          username='$username',
          email='$email',
          password='$password' WHERE id='" . $_POST['id'] . "'");
    echo "<script>
    alert('Record Successfully modified');
    window.location='user_table.php';
    </script>";
  }

  $result = mysqli_query($conn, "SELECT * FROM user_table WHERE id='" . $_GET['id'] . "'");
  $row = mysqli_fetch_array($result);
 ?>
 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="style\style.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper bg-light">
        <h2 class="mb-4">Update</h2>
        <form method="post">
          <div class="d-flex gap-1"> 
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-floating mb-3 w-50 ">
              <input
                type="text"
                class="form-control"
                id="firstName"
                name="first_name"
                placeholder="John"
                value="<?php echo $row['first_name'];?>"
              />
              <label for="firstName" class="form-label text-secondary"
                >First name</label
              >
            </div>
            <div class="form-floating mb-3 w-50">
              <input
                type="text"
                class="form-control"
                id="lastname"
                name="last_name"
                placeholder="Doe"
                value="<?php echo $row['last_name'];?>"
              />
              <label for="lastName" class="form-label text-secondary"
                >Last name</label
              >
            </div>
          </div>
          <div class="form-floating mb-3 w-100">
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="name@example.com"
              value="<?php echo $row['email'];?>"
            />
            <label for="email" class="form-label text-secondary">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="phone"
              name="phone"
              placeholder="63+"
              value="<?php echo $row['phone'];?>"
            />
            <label for="phone" class="form-label text-secondary">Phone</label>
          </div>
          <div class="d-flex gap-1">
            <div class="form-floating mb-3 w-50">
              <input
                type="text"
                class="form-control"
                id="username"
                placeholder="username"
                name="username"
                value="<?php echo $row['username'];?>"
              />
              <label for="username" class="form-label text-secondary"
                >Username</label
              >
            </div>
            <div class="form-floating mb-3 w-50">
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="password"
                name="password"
                value="<?php echo $row['password'];?>"
              />
              <label for="password" class="form-label text-secondary"
                >Password</label
              >
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center"
          >
            <div class="">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </body>
</html>