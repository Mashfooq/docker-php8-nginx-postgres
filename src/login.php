<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-3 align-center">
        <div>
            <h1 class="text-center">
                LOGIN
            </h1>
        </div>
        <form action="server/userControl.php" method="post">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="userEmail" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="userPass" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <a href="register.php" class="col-sm-6 col-form-label">Sign up?</a>
                <div class="col-sm-6">
                    <button class="btn btn-success" name="btnlog">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>