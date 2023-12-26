<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="photo[]" multiple>
        <input type="submit" name="submit" value="submit">
    </form>

        
<pre>
    <?php
        print_r(($_FILES));

        
        if (isset($_FILES) && !empty($_FILES)) {

            // $uploads_dir = "uploads";
            // $photos_name = $_FILES["photo"]["tmp_name"];
            // $name = $_FILES["photo"]["name"];

            // $photo_type = array("image/gif","image/jpg","image/jpe","image/jpeg","image/png");
            
            // if(!in_array($_FILES["photo"]["type"], $photo_type)) {
            //     echo "File type not Supported";
            //     exit;
            // }
            // $size = 1024*1024;
            // if($_FILES["photo"]["size"] > $size) {
            //     echo "File size must be less than 1MB";
            //     exit;
            // }   

            foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['photo']['name'][$key];
                $file_size = $_FILES['photo']['size'][$key];
                $file_tmp = $_FILES['photo']['tmp_name'][$key];
                $file_type = $_FILES['photo']['type'][$key];

           
                if(move_uploaded_file($file_tmp, "uploads/" . $file_name)) {
                
                    echo "File Uploaded Successfully";
                } else {
                    "File Upload Failed";
                }

                
            }
           
        }
    ?>
</pre>

</body>
</html>