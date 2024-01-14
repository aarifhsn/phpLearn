<?php

require 'directoryReader.php';

$images = directoryReader('images');


if (!$images) {
    die('No images found');
}

if (isset($_FILES) && !empty($_FILES)) {
            
            $uploads_dir = "uploads";
            $photos_name = $_FILES["photo"]["tmp_name"];
            $name = $_FILES["photo"]["name"];

            $photo_type = array("image/gif","image/jpg","image/jpe","image/jpeg","image/png");
            
            if(!in_array($_FILES["photo"]["type"], $photo_type)) {
                echo "File type not Supported";
                exit;
            }
            $size = 1024*1024;
            if($_FILES["photo"]["size"] > $size) {
                echo "File size must be less than 1MB";
                exit;
            }   

    foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['photo']['name'][$key];
        $file_size = $_FILES['photo']['size'][$key];
        $file_tmp = $_FILES['photo']['tmp_name'][$key];
        $file_type = $_FILES['photo']['type'][$key];

        if(move_uploaded_file($file_tmp, "images/" . $file_name)) {
            echo "<p class='text-green-800 font-bold p-8 border border-solid border-green-800'> File Uploaded Successfully</p>";
        } else {
            "File Upload Failed";
        }
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Media Gallery</title>
</head>
<body>
<div class="container my-8 mx-auto px-8 w-full">
    <div class="max-w-6xl mx-auto">
        <div class="flex item-center justify-between">
            <div class="flex">
                <img class="w-12 h-12 rounded-full" src="logo.png" alt="logo">
                <h1 class="text-2xl font-bold p-2">Photo Galley- PHP</h1>
            </div>

            <!-- Image Upload Form -->
            <form action="" method="post" enctype="multipart/form-data" class="flex justify-between bg-emerald-300 p-4 ">
                <label for="photo[]" class="block pr-2">Upload Image</label>
                <input type="file" id="imageUpload" name="photo[]" class="">
                <button type="submit" class="bg-sky-950 px-4 font-bold rounded">Upload
                </button>
            </form>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8">
            <?php foreach ($images as $image) : ?>
                <div>
                    <img class="h-auto max-w-full" src="<?php echo $image ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</body>
</html>
