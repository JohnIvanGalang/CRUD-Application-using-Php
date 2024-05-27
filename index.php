<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Library Management System </title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- style -->
    <style>
        #container {
            border: solid black 2px;
            background-image: url('./includes/bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        #box {
            background: #ffffff93;
            -webkit-backdrop-filter: blur(11px);
            backdrop-filter: blur(11px);
            border: 1px solid #ffffff2d;
        }
    </style>
</head>

<body>
    <div class="vh-100 d-flex align-items-center" id="container">
        <div class="container w-50 mx-5 p-4 rounded-4" id="box">
            <h1> Read n' Learn </h1>
            <p class="fw-semibold">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ex, modi quis soluta unde debitis beatae necessitatibus eaque ab veniam, atque consectetur suscipit amet eveniet sapiente omnis ut odit! Ex!
            </p>
            <a href="./includes/main.php">
                <button class="btn btn-info text-dark fw-semibold">Visit site <i class="bi bi-box-arrow-up-right"></i></button>
            </a>
        </div>
    </div>
</body>

</html>