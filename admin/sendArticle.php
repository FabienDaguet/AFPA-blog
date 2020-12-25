<?php

    //var_dump($_POST);

    include("app/app.php");
    include("app/protect.php");

    var_dump($_POST);
    var_dump($_FILES); 


    if (isset($_POST["title"])) {

        $filename = substr(md5(uniqid(rand())), 0, 16);
        //die ($url);
        $ext = array("jpg", "jpeg");
        $ext_upload = strtolower(substr(strrchr($_FILES["post_img_url"]["name"], "."), 1));
        //die($ext_upload);
        $url = "../static/img/" . $filename . "." . $ext_upload;
        //die ($url);

        if (in_array($ext_upload, $ext)) {
            if (move_uploaded_file($_FILES["post_img_url"]["tmp_name"], $url)) {

                $image = ImageCreateFromJPEG($url);
                $width = imagesx($image);
                $height = imagesy($image);
                $ratio = $width / $height;
                if ($width > $height) {
                    $new_width = 800;
                    $new_height = ceil($new_width / $ratio);
                } else {
                    $new_height = 600;
                    $new_width = ceil($new_height * $ratio);
                }
                //echo "w=" . $width . " - h=" . $height . " - ratio=" . $ratio . " - newW=" . $new_width . " - newH=" . $new_height; exit;
                $thumb = imagecreatetruecolor($new_width, $new_height);
                //var_dump($thumb); exit;
                imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                ImageJPEG($thumb, $url);
                imagedestroy($image);

                $_POST = sanitize($_POST);
                $_POST["post_img_url"] = $filename . "." . $ext_upload;
                include("app/model/postModel.php");

                if (addPost($_POST, $_SESSION["userBO"]["ID"])) {
                    flash_create("Artcile ajouté", "success");
                } else {
                    flash_create("L'artcile n'a pas été ajouté", "danger");
                }      
            } else {
                flash_create("impossible de déplaccer le fichier", "danger");
            }
            
        } else {
            flash_create("Type de fichier refusé", "danger");
        }
        header("Location: articles.php");
        exit;
    } else {
        die("Et ben non");
    }

    
   