<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<pre>
    <?php
        print_r(($_FILES));
        if($_FILES['photo']) {

            $photo_type = array('image/gif','image/jpg','image/jpe','image/jpeg','image/png');
            
            if(!in_array($_FILES['photo']['type'], $photo_type)) {
                echo "File type not Supported";
                exit;
            }
            $size = 1024*1024;
            if($_FILES['photo']['size'] > $size) {
                echo "File size must be less than 1MB";
                exit;
            }

            $uploads_dir = 'uploads';
            $photos_name = $_FILES["photo"]["tmp_name"];
            $name = $_FILES["photo"]["name"];
            move_uploaded_file($photos_name, "$uploads_dir/$name");
        }
    ?>
</pre>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="photo[]" multiple>
        <input type="submit" name="submit" value="submit">

    </form>

</body>
</html>