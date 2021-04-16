<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Track-A-Habit Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
    <link href="./css/createAccount.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">>
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="homepage.php">Track-A-Habit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    
                </ul>

            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <h1 class="mt-5">Welcome to Track-A-Habit!</h1>

        <body class="text-center">
            <div class="text-center" style="padding:50px 0">
                <h1 class="h3 mb-3 font-weight-normal">Please register for access</h1>
                <!-- Main Form -->
                <div class="login-form-1">
                    <form class="form-signin">
                        <div class="login-form-main-message"></div>
                        <div class="main-login-form">
                            <div class="login-group">
                                <div class="form-group">
                                    <label for="reg_email" class="sr-only">Email address</label>
                                    <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email address">
                                </div>
                                <div class="form-group">
                                    <label for="reg_password" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                    <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                                </div>

                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                        </div>
                        <div class="etc-login-form">
                            <p>Have an existing account? <a href="signin.php">login here</a></p>
                        </div>
                    </form>
                </div>
                <!-- end:Main Form -->
            </div>
        </body>
    </main>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


</body>

</html>