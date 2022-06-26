<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="navbarAdmin.css" />
    <title>DIT ADMINISTRATION</title>
    <style>
        .lStyle {
            text-decoration: none;
            color: antiquewhite;
            padding: 10px;
            text-decoration: none;
            color: antiquewhite;
            padding: 10px;
            text-decoration: none;
            color: antiquewhite;
            border-radius: 10px;
        }
        
        .aStyle {
            text-decoration: none;
            padding: 10px;
        }
        
        .lStyle:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    require('auth.php');
    ?>
    <div class="container my-3">
        <div class="navbar">
            <li class="lStyle"><a class="aStyle" href="addResult.php" style="color: #cccccc;">Add result</a></li>
            <li class="lStyle"><a class="aStyle" href="checkResult.php" style="color: #cccccc;">Check Result</a></li>
            <li class="lStyle"><a class="aStyle" href="logout.php" style="color: #cccccc;">Log Out</a></li>
            <li>
                <form action="search.php" method="post">

                    <div class="input-group searchbar">
                        <input type="search" name="search" id="search" class="form-control rounded" placeholder="Students's first name" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                </form>
            </li>
        </div>

        <img src="DIT.png" class="center">
    </div>

</body>

</html>