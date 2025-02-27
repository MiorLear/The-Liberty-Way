<?php
require "../../Includes/Connection/connection.php";
session_start();


// ---------------------------------------------------------------------------------------

// if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 2) { //Administrador

//    header("Location: ../../Views/Dashboard/index.php");

// }
//  elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 3) { //Usuario

//     header("Location: ../../Views/Home/index.php");
// }

//  ---------------------------------------------------------------------------------------

if (isset($_POST['feedback'])) {

    if (empty($_SESSION['id_user'])) {
        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'Oops...',
            'text' => 'You must log in to rate us!'
        ); 
        header("Location: ../../Views/Home/contact.php");
    } else {
        if (empty($_POST['id_usuario']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['subject']) || empty($_POST['message'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must fill in the form!'
            );
    
            header("Location: ../../Views/Home/contact.php");
        }else if($_POST['value'] == 0){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $rating = $_POST['value'];
            $id = $_POST['id_usuario'];
    
            $sql = "INSERT INTO feedback(name,email,phone,subject,message,id_usuario, star_rating) VALUES('$name','$email','$phone','$subject','$message','$id','$rating')";
            if (pg_query($conexion, $sql)){
                $_SESSION['alerta'] = array(
                    'icon' => 'success',
                    'title' => 'Registration success',
                    'text' => 'Feedback successfully registered!'
                );
    
            header("Location: ../../Views/Home/contact.php");
            } else{
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Oops...',
                    'text' => 'Registration Error!'
                );
    
                header("Location: ../../Views/Home/contact.php");
            }
        } else{
    
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $rating = $_POST['value'];
            $id = $_POST['id_usuario'];
    
            $sql = "INSERT INTO feedback(name,email,phone,subject,message,id_usuario, star_rating) VALUES('$name','$email','$phone','$subject','$message','$id','$rating')";
            if (pg_query($conexion, $sql)){
                $_SESSION['alerta'] = array(
                    'icon' => 'success',
                    'title' => 'Registration success',
                    'text' => 'Feedback successfully registered!'
                );
    
            header("Location: ../../Views/Home/contact.php");
            } else{
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Oops...',
                    'text' => 'Registration Error!'
                );
    
                header("Location: ../../Views/Home/contact.php");
            }
        }
    } 
} 
?>