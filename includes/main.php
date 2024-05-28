<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Books </title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Edu TAS Beginner", cursive;
            font-optical-sizing: auto;
        }
    </style>
</head>

<body>
    <div class="vh-100 bg-body-secondary">
        <div class="border border-dark rounded mx-2">    <!--test padding 2 -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">  <!-- removed padding -->
                <div class="container-fluid">
                    <a class="navbar-brand fw-bolder" href="../includes/main.php"> Readn'Learn <i class="bi bi-journal-code"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-dark" aria-current="page" href="main.php"> Books<i class="bi bi-bookmark"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-dark" href="add.php"> Add Books<i class="bi bi-box-arrow-in-up"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
        </div>

        <!-- grid form books -->
        <div class="row row-cols-1 row-cols-lg-6 row-cols-md-4 row-cols-sm-3 g-4 mx-auto mt-2">
                <?php 
                    include '../view/read.php'; 
                ?>

        </div>
    </div>
</body>

</html>