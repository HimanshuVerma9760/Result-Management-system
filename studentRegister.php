<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="admin.css" />
  <title>DIT Student Registration</title>
</head>

<body>
  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="student.png" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100vh; width:100hw" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Student registration form</h3>
                  <form action="addStudent.php" method="post">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="firstname" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">First name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="lastname" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n">Last name</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="mothername" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m1">Mother's name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="fathername" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n1">Father's name</label>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">Pincode</label>
                <input type="text" name="pincode" class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example99">Branch</label>
                <input type="text" name="branch" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example99">Sap Id</label>
                <input type="number" name="sap" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example97">Email ID</label>
                <input type="email" required name="email" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example97">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" />
              </div>

              <div class="d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                <a type="button" href="studentLogin.html" class="btn btn-light btn-lg">Back</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
</body>

</html>