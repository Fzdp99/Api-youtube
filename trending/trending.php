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
        <div class="judult p-3 mb-2 bg-warning text-dark">
                <a href="../index.php" class="jdlt">
                        <h1>Trending</h1>
                </a>
        </div>

        <div class="container isi">
                <div class="row">
                        <?php
                                foreach ($data['items'] as $dt ){
                                        $judul = $dt['snippet']['title'];
                                        $gambar = $dt['snippet']['thumbnails']['maxres']['url'];
                                        $des = $dt['snippet']['description'];
                                        $wp = $dt['snippet']['publishedAt'];
                                        $link = $dt['snippet']['channelId'];
                        ?>

                        <div class="card mb-5 shadow-lg p-3 mb-5 bg-body rounded">
                                <img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title"><?php echo $judul ?></h5>
                                        <p class="card-text"><?php echo $des ?></p>
                                        <p class="card-text">Waktu publish : <?php echo $wp ?></p>
                                        <a href="https://www.youtube.com/channel/<?php echo $link ?>" class="btn btn-warning">View</a>
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
