<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Youtube</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="Style.css">

</head>
<body>
        <!-- navbar -->
        <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                <a class="navbar-brand">MENU</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header ms">
                                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body navbar-dark bg-dark">
                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                                <li class="nav-item">
                                                        <a class="nav-link" href="trending/trending.php">Trending</a>
                                                </li>

                                                <li class="nav-item">
                                                        <a class="nav-link" href="live/live.php">Live</a>
                                                </li>
                                                
                                                <li class="nav-item">
                                                        <a class="nav-link" href="t_api/ytapi.php">Tutorial API</a>
                                                </li>

                                                <li class="nav-item">
                                                        <a class="nav-link" href="cari/cari.php">Search</a>
                                                </li>

                                        </ul>
                                </div>
                        </div>
                </div>
        </nav>

        <div class="gambar">
                <p class="textopen">Welcome to my youtube website</p>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="javascript.js"></script>
</body>
</html>