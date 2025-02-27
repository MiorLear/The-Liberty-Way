<?php

//-------------------- CONNECTION TO DATABASE --------------------

require "../../Includes/Connection/connection.php";
session_start();


//--------------------- UPDATE PROFILE IMAGE ---------------------

if (isset($_FILES["FILE_img"])) {

    $id = $_POST["id"];

    $img_name = $_FILES['FILE_img']['name'];
    $img_size = $_FILES['FILE_img']['size'];
    $img_tmp = $_FILES['FILE_img']['tmp_name'];
    $img_error = $_FILES['FILE_img']['error'];

    if ($img_error === 0) {

        $img_type = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
        $allow_type = array("jpg", "jpeg", "png");

        if (in_array($img_type, $allow_type)) {
            
            if ($img_size <= 2000000) {
                
                $new_img_name = 'IMG-' . date('H.i.s') . '__' . date('d.m.Y') . '.' . $img_type;
                $img_upload_path = "../../Assets/Profile/image/" . $new_img_name;
                move_uploaded_file($img_tmp, $img_upload_path);

                //---------- UPDATE IMAGE SQL ----------
                $sql = pg_query($conexion, "UPDATE usuarios SET imagen = '$new_img_name' WHERE id_usuario = $id");

                if ($sql) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'success',
                        'title' => 'Successfully updated',
                        'text' => 'Profile picture has been updated successfully!'
                    );
            
                    header("Location: ../../Views/Profile/profile.php");
                    exit();

                }else {

                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'Updating error',
                        'text' => 'Error updating profile picture!'
                    );
            
                    header("Location: ../../Views/Profile/profile.php");
                    exit();

                }
            }else {

                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'File size not allowed',
                    'text' => 'File size should not exceed 2mb!'
                );
        
                header("Location: ../../Views/Profile/profile.php");
                exit();

            }

        } else {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'File type not allowed',
                'text' => 'Only files are allowed jpg, jpeg or png!'
            );
    
            header("Location: ../../Views/Profile/profile.php");
            exit();

        }

    } else {

        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'Unknown error',
            'text' => 'Error updating profile picture!'
        );

        header("Location: ../../Views/Profile/profile.php");
        exit();

    }
}
