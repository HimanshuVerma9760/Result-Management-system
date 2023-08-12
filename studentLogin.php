<?php
include "./navbar.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DIT Student Sign In</title>
</head>
<style>
  body {
    background-color: #f0f1f2;
  }
</style>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
            alt="Sample image" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="stuLogin.php" method="post">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"></div>

            <div class="my-5">
              <div class="text-center">
                <h2>Student Login</h2>
                <hr>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label"><strong> Student's SAP ID </strong></label>
                <input required type="number" name="sap" class="form-control form-control-lg"
                  placeholder="Enter a valid SAP ID" />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label"><strong> Password </strong></label>
                <input required type="password" name="pass" class="form-control form-control-lg"
                  placeholder="Enter password" />
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-sm"
                  style="padding-left: 2.5rem; padding-right: 2.5rem">
                  Login
                </button>
                <a href="index.php" class="btn btn-primary btn-sm mx-2"
                  style="padding-left: 2.5rem; padding-right: 2.5rem">Home</a>
                <p class="small fw-bold mt-2 pt-1 mb-0">
                  Not a student ?
                  <a href="studentRegister.php" class="link-light">Register Now</a>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>