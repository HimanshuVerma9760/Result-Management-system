<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            background-color: #cccccc;
            background-size: cover;
            background-position: center;
            height: 500px;
            background-image: radial-gradient(rgb(247, 51, 51), rgb(81, 119, 247));
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
            margin-top: 5%;
        }
    </style>
</head>

<body>
    <img src="DIT.png" class="center">
    <form action="studentResult.php" method="post">
        <div class="container my-5 input-group">
            <input type="search" name="studentsap" required class="form-control rounded" placeholder="Enter Student's SAP ID" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-success mx-1">See Result</button>
            <div>
                <a href="logout.php" class="btn btn-danger">
                    logout
                </a>
            </div>
        </div>
    </form>
</body>

</html>