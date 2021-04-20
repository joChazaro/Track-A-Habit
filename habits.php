<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Track-A-Habit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/list.css" rel="stylesheet">

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
                    <a class="nav-link" href="about.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="streaks.php">Streaks</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
            </ul>

        </div>
    </nav>
</header>

    <!-- Begin page content -->
    <main role="main" class="container">

    <h1 class="mt-5">Habits due today:</h1>

        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">
                    <div class="card-body">
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list" id="myUL">
                                <li>
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Maintain my morning routine<i class="input-helper"></i></label> </div>
                                <li class="completed">
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked=""> Walk for 30mins<i class="input-helper"></i></label> </div>
                                </li>
                                <li>
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Read for 30mins<i class="input-helper"></i></label> </div>
                                </li>
                                <li>
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Update daily block-schedule <i class="input-helper"></i></label> </div>
                                </li>
                                <li class="completed">
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked=""> Daily prayer.<i class="input-helper"></i></label> </div>
                                </li>
                                <li>
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Drink 64oz of water<i class="input-helper"></i></label> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <h1 class="mt-5">Habits due this week:</h1>

        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Workout 3 days a week <i class="input-helper"></i></label> </div>
                            <li class="completed">
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked=""> Finish Coursera Assignments <i class="input-helper"></i></label> </div>
                            </li>
                            <li>
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> Publish weekly blog <i class="input-helper"></i></label> </div>
                            </li>
                            <li class="completed">
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked="">Update weekly To Do list on Trello<i class="input-helper"></i></label> </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="mt-5">Habits due this month:</h1>

        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">

                <div class="card-body">
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Finish 1 book <i class="input-helper"></i>
                                    </label>
                                </div>
                            <li class="completed">
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked="true"> Update vision board <i class="input-helper"></i></label> </div>
                            </li>
                            <li class="completed">
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked=""> Finalize this month's finance & budget sheet <i class="input-helper"></i></label> </div>
                            </li>
                            <li class="completed">
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked="true">Pay Rent 1 week in advance <i class="input-helper"></i></label> </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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