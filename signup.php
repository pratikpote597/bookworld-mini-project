<?php
include("dbconfig.php");




?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>Sign Up</title>
</head>

<body class="bg-signup">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid contain">
            <a class="navbar-brand" href="#"><b class="logo-txt">BooksWorld!</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.html">Log in</a></li>
                            <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid signupForm mt-4">
        <h5 style="text-align: center;font-family: 'Source Code Pro', monospace;">Sign up for BooksWorld!</h5>
        <form class="row g-4  mt-2" method="post" action="">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName"  class="form-control" id="firstName">
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName"  class="form-control" id="lastName">
            </div>
            <div class="col-md-6">
                <label for="signupEmail" class="form-label">Email</label>
                <input type="email" name="email"  class="form-control" id="signupEmail">
            </div>
            <div class="col-md-6">
                <label for="signupPass" class="form-label">Password</label>
                <input type="password" name="pass"  class="form-control" id="signupPass">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <textarea class="form-control" name="address" placeholder="Street address" id="address"
                    style="height: 75px; resize: none;"></textarea>
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip">
            </div>
            <div class="col-md-5">
                <label for="contactNo" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="contactNo">
            </div>
            <button type="submit" class="btn btn-primary btn-center">Sign up</button>
            <div class="col-12 btn-center">
                
            </div>
        </form>
    </div>
    <br><br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>