<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result Pannel</title>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            background: #a1c4fd;
        }

        .bg-indigo {
            background-color: #4835d4;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>
</head>

<body>
    <form action="submitMarks.php" method="post">
        <section class="h-100 h-custom gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="firstname">First name</label>
                                                        <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" />
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="lastname">Last name</label>
                                                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" />
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="Branch">Branch</label>
                                                    <input type="text" name="Branch" id="Branch" class="form-control form-control-lg" />
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="sap">SAP ID</label>
                                                    <input type="number" name="sap" id="sap" class="form-control form-control-lg" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="rollno">Roll no.</label>
                                                        <input type="number" name="rollno" id="rollno" class="form-control form-control-lg" />
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 bg-indigo text-white">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Marks Obtained</h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" for="pos">Probability and Statistics</label>
                                                    <input type="number" name="pos" id="pos" placeholder="Out Of 100" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="java">Advanced JAVA</label>
                                                        <input type="number" name="java" placeholder="Out Of 100" id="java" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7 mb-4 pb-2">
                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="javaprac">JAVA Practical</label>
                                                        <input type="number" name="javaprac" placeholder="Out Of 100" id="javaprac" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-5 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="dbms">DBMS</label>
                                                        <input type="number" name="dbms" placeholder="Out Of 100" id="dbms" class="form-control form-control-lg" />
                                                    </div>

                                                </div>
                                                <div class="col-md-7 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <label class="form-label" for="dbmsprac">DBMS Practical</label>
                                                        <input type="number" name="dbmsprac" placeholder="Out Of 100" id="dbmsprac" class="form-control form-control-lg" />
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" for="values">Human Values</label>
                                                    <input type="number" name="values" placeholder="Out Of 100" id="values" class="form-control form-control-lg" />
                                                </div>
                                            </div>


                                            <div class="mb-4">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" for="evs">EVS</label>
                                                    <input type="number" name="evs" placeholder="Out Of 100" id="evs" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Submit</button>
                                                <a type="button" href="adminDashboard.php" class="btn btn-light btn-lg mx-3" data-mdb-ripple-color="dark">Back</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>