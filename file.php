<?php
    if (isset($_FILES['image'])) {
        // echo "<pre>";
        // print_r($_FILES['image']);
        // echo "</pre>";

        $total = count($_FILES['image']['name']);
        //echo $total;
        for($i=0; $i < $total; $i++){
            $file_name = $_FILES['image']['name'][$i];
            //echo $file_name;
            $file_tmp = $_FILES['image']['tmp_name'][$i];
            //echo $file_tmp;
            move_uploaded_file($file_tmp, "upload/multiple/".$file_name);
        }

        //declare file name
        // $file_name = $_FILES['image']['name'];
        // $file_tmp = $_FILES['image']['tmp_name'];

        // //move file into folder
        // move_uploaded_file($file_tmp, "upload/".$file_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple="multiple">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>