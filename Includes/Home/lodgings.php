<?php
session_start();
require("../Apis/Amadeus/index.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_SESSION['flights']['data'])){
        if (!empty($_POST["checkin"]) && !empty($_POST["entry"]) && !empty($_POST["checkin"])) {
            if (strtotime($_POST["checkin"]) < strtotime(($_POST["checkout"]))) {
                $apicall = new search_apis;
                $hotels = $apicall->amadeus_lodgings_list($_POST["entry"]);
                if (empty($hotels['errors'])) {
                    if ($hotels['data'] != array()) {
    
                        foreach (array_slice($hotels['data'], 0, 125) as $hotel) {
                            if ($hotels['data'][0]['hotelId'] == $hotel['hotelId']) {
                                $hotelIds .= $hotel['hotelId'];
                            }
                            $hotelIds .=  ", " . $hotel['hotelId'];
                        }
                        $hotelsfinal = $apicall->amadeus_lodgings_prices("$hotelIds", $_POST["checkin"], $_POST["checkout"], $_POST["rooms"]);
    
                        // echo '<pre>';
                        // print_r($hotelsfinal['data']);
                        // echo '</pre>';
                        $idhotel = isset($_SESSION['flights']) ? count($_SESSION['flights']['data']) : 1;
                        $numrow = 0;
                        foreach ($hotelsfinal['data'] as $hotelinstances) {
                            $idhotel++;
                            $hotelinstances["id"] = "$idhotel";
                            $hotelsfinaloffers['data']["$numrow"]= $hotelinstances;
                            $numrow++;
                            // echo '<pre>';
                            // print_r($hotelinstances);
                            // echo '</pre>';
                            $hotelsxflights["$numrow"]= array("id"=>"$idhotel", "type"=>"hotel-offer", "price" => array("total"=>$hotelinstances['offers'][0]['price']['total']), "airline"=>$hotelinstances['hotel']['name']);
    
                        }
                        if (isset($_SESSION['flights'])){
                            $_SESSION['flights']['data']= array_merge($_SESSION['flightsfinalshow']['data'], $hotelsxflights);
                        }
    
                        // echo '<pre>';
                        // print_r($_SESSION['flights']);
                        // echo '</pre>';
    
                        if ($hotelsfinaloffers['data'] != array()) {
                            $_SESSION['hotels']  = $hotelsfinaloffers;
                            header("Location: ../../Views/Home/lodgings.php");
                        } else {
                            $_SESSION['alerta'] = array(
                                "icon" => "info",
                                "title" => "Sorry",
                                "text" => "No lodgings available for the options provided"
                            );
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $_SESSION['alerta'] = array(
                            "icon" => "info",
                            "title" => "Sorry",
                            "text" => "No lodgings available for the options provided"
                        );
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                } else {
                    foreach ($hotels['errors'] as $errors) {
                        if ($errors == $hotels['errors'][0]) {
                            $errorcode = $errors['code'];
                            $errortitle = $errors['title'];
                            $errordetail = $errors['detail'];
                        } else {
                            $errorcode = $errorcode . ", " . $errors['code'];
                            $errortitle = $errortitle . ", " . $errors['title'];
                            $errordetail = $errordetail . ", " . $errors['detail'];
                        }
                    }
                    if ($hotels['errors'][0]['status'] == 400) {
                        // $errormessage = "$errordetail. Error Code: $errorcode. Please contact us to fix this error";
                        $_SESSION['alerta'] = array(
                            "icon" => "warning",
                            "title" => ucwords(strtolower($errortitle)) . ".",
                            "text" => "$errordetail."
                        );
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit();
                    } else {
                        $errormessage = "Error Code: $errorcode. Please contact us to fix this error ($errordetail).";
                        $_SESSION['alerta'] = array(
                            "icon" => "warning",
                            "title" => $errortitle,
                            "text" => $errormessage
                        );
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit();
                    }
                }
            } else {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please correctly select a Check In date and Check Out date...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } else {
            if (empty($_POST["checkin"]) && empty($_POST["entry"]) && empty($_POST["checkout"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check In date, Check Out date and City...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["checkin"]) && empty($_POST["entry"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check In date and City...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["checkin"]) && empty($_POST["checkout"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check In date and Check out date...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["entry"]) && empty($_POST["checkout"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check In date and City...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["checkin"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check In date...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["entry"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a City...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } elseif (empty($_POST["checkout"])) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Wait a second!',
                    'text' => 'Please select a Check Out  date...'
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
    }else{
        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'Wait a second!',
            'text' => 'Search Flights First...'
        );
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
} else {
    $_SESSION['alerta'] = array(
        'icon' => 'error',
        'title' => 'Wait a second!',
        'text' => 'Please send a POST request...'
    );
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
