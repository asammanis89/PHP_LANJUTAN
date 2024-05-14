<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Ardha</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            justify-items: center;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Welcome My Gallery</h1>
    <div class="gallery">
        <?php
        $gambarFolder = 'gambar/';
        $files = scandir($gambarFolder);
        $filesToShow = array_slice($files, 2);
        foreach($filesToShow as $file) {
            $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if($fileExt === 'jpg' || $fileExt === 'jpeg' || $fileExt === 'png' || $fileExt === 'gif') {
                echo '<img src="' . $gambarFolder . $file . '" alt="' . $file . '">';
            }
        }
        ?>
    </div>
</body>
</html>