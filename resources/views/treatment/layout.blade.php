<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>


        .carousel-inner_card{
            display: flex;
            padding: 1em;

        }

        .carousel-item_card{
            display: block;
            margin-right: 0;
            flex: 0 0 calc(100%/3);
        }

        .card{
            margin: 0 .5em;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.3);
        }

        .card .btn{
            border-radius: 50px;
            background-color: #E681FF;
            color: black;
        }

        .card img { border-radius: 20px 20px 0 0; }

        .navbar-brand{
            color: white;
        }

        .bi-search{
            color: white;
        }

        .bi-house-door{
            color: white;
        }

    </style>
</head>
<body>

    <!-- NAVBAR -->
     <nav class="navbar p-4" style="background-color: #DF6F9E";>
            <div class="container-fluid">

                <div class="col-md-7">
                <h1 class="navbar-brand">MONAAS TREATMENT</h1>
                </div>

                <div class="col-md-4">
                <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" aria-label="Recipient's username">
                <button class="btn bi bi-search" type="submit" style="background-color: black";></button>
                </div>
                </div>

                <div class="col-md-1">
                    <a href="#"> <i class="bi bi-house-door fa-lg"></i></a>
                </div>


                <!-- <form class="d-flex" role="search"> 
         
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary bg-dark" type="submit"><i class="bi bi-search"></i></button>
                <i class="bi bi-house-door"></i>

                 </form> -->
            </div>
        </nav> 

        <br>


        <div class="container mt-5">
        @yield('content')
    </div>


</body>
</html>