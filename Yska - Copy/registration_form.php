<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
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
   
  </head>
  <body>
    <div class="container">
      <div class="wrapper bg-light">
        <h2 class="mb-4">Sign up</h2>
        <form action="registration.php" method="POST">
          <div class="d-flex gap-1">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-floating mb-3 w-50 ">
              <input
                type="text"
                class="form-control"
                id="firstName"
                name="first_name"
                placeholder="John"
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
            />
            <label for="phone" class="form-label text-secondary">Phone</label>
          </div>
          <div class="d-flex gap-1">
            <div class="form-floating mb-3 w-50">
              <input
                type="text"
                class="form-control"
                id="username"
                placeholder="password"
                name="username"
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
              <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
            <div class="">
              <h6 class="text-secondary">
                Already have an account?
                <a class="text-decoration-none" href="login_form.php">Log in</a>
              </h6>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>