<?php
        require "konek.php";
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API -- Youtube Video</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../Style.css">

</head>
<body>
        <div class="container-xxl mt-3 fixed-top">
                <nav class="navbar navbar-dark bg-dark rounded-3 border border-warning">
                        <div class="container-fluid">
                        <a id="vdo" class="navbar-brand">Video</a>
                                <form class="d-flex" name="mnsc" method="POST">
                                        <input name="sc" class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                                        <button class="btn btn-outline-warning me-2" type="submit">Search</button>
                                        <a href="../index.php"><button class="btn btn-outline-warning" type="button">Back</button></a>
                                </form>
                        </div>
                </nav>
        </div>

        <div class="container isi">
                <div class="row">
                        <?php
                                foreach ($data['items'] as $dt ){
                                        $judul = $dt['snippet']['title'];
                                        $gambar = $dt['snippet']['thumbnails']['high']['url'];
                                        $des = $dt['snippet']['description'];
                                        $wp = $dt['snippet']['publishedAt'];
                                        $link = $dt['id']['videoId'];
                        ?>

                        <div class="col-4 mt-3">
                                <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
                                        <img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <h5 class="card-title"><?php echo $judul ?></h5>
                                                <p class="card-text"><?php echo $des ?></p>
                                                <p class="card-text">Waktu publish : <?php echo $wp ?></p>
                                                <a href="https://www.youtube.com/watch?v=<?php echo $link ?>" class="btn btn-warning">View</a>
                                        </div>
                                </div>
                        </div>

                        <?php
                                }
                        ?>
                                
                </div>
        </div>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
