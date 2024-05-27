<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add </title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* div {
            border: solid green 1px;
        } */
    </style>
</head>

<body>
    <div class="vh-100 bg-body-secondary">
        <div class="border border-dark rounded mx-2">    <!--test padding2 -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">  <!-- removed padding -->
                <div class="container-fluid">
                    <a class="navbar-brand fw-bolder" href="main.html"> Readn'Learn <i class="bi bi-journal-code"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <!-- menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">   <!-- nav book -->
                                <a class="nav-link fw-bold" aria-current="page" href="main.php"> Books </a>
                            </li>
                            <li class="nav-item">   <!-- nav add book -->
                                <a class="nav-link fw-bold" href="add.php"> Add Books </a>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
        </div>

        <!-- form input -->
        <form class="p-3 text-center" action="../view/create.php" method="post">
            <h1 class="mb-5"> Add Book </h1>
            <input class="form-control mt-4 p-3" type="text" name="BOOKID" placeholder="Book ID">
            <input class="form-control mt-4 p-3" type="text" name="BOOKNAME" placeholder="Book Name">

            <!-- submit button -->
            <button class="btn btn-primary mt-4 w-100 p-3" type="submit" name="submit"> Add Book <i class="bi bi-box-arrow-in-right"></i></button>
        </form>
    </div>
</body>

</html>