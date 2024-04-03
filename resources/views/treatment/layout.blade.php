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
    
    <link rel="stylesheet" href="css/treatment.css">
   
</head>
<body>

    <!-- NAVBAR -->
     <nav class="navbar p-3" style="background-color: #DF6F9E";>
            <div class="container-fluid">

                <div class="col-md-7">
                <h1 class="navbar-brand">MONAAS TREATMENT</h1>
                </div>

                <div class="col-md-4">
                <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                <button class="btn bi bi-search" type="submit"></button>
                </div>
                </div>

                <div class="col-md-1">
                    <a href="#"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                    </svg>
                
                    </a>
                </div>


                <!-- <form class="d-flex" role="search"> 
         
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary bg-dark" type="submit"><i class="bi bi-search"></i></button>
                <i class="bi bi-house-door"></i>

                 </form> -->
            </div>
        </nav> 

        <br>


        <div class="container">
        @yield('content')
    </div>


</body>
</html>