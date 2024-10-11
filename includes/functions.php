<?php
function uploadimage($myimage){
    
    // // // // //  // image upload // // // // // //


    $imagename = $myimage['name'];
    $imagetype = $myimage['type'];
    $imagsize = $myimage['size'];
    $imagelocation = $myimage['tmp_name'];

    if ($imagetype !="image/jpeg" && $imagetype!= "image/png") {
        echo 'File is not supported';
    };

    if ($imagsize > 3000000){
        echo 'File is too large';
    }

    $random = rand() . time();
    $newlocation = "images/$random$imagename";

    $uploadedimage = move_uploaded_file($imagelocation, $newlocation);

    return $newlocation;

}
