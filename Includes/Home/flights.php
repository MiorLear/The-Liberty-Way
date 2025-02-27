<?php
session_start();
unset($_SESSION['flights']);
$airports = json_decode(file_get_contents('../Apis/Amadeus/airports.json'), true);
require("../Apis/Amadeus/index.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST["departure"]) && !empty($_POST["entry"]) && !empty($_POST["date"])) {
        if ($_POST["departure"] != ($_POST["entry"])) {
            $apicall = new search_apis;
            $flights = $apicall->amadeus_flight_destinations($_POST["departure"], $_POST["entry"], $_POST["date"], $_POST["passengers"]);
            if (empty($flights['errors'])) {
                if ($flights['data'] != array()){
                    $departure = $_POST['departure'];
                    $date = $_POST['date'];
                    $entry = $_POST['entry'];
                    $query= "$departure $date $entry";
                    $flights["parameters"] = array(array('query' => $query,'departure' => $departure, 'date' => $date, 'entry' => $entry));
                    $i = 0;
                    foreach($flights["data"] as $row){
                        
                        // $flights["data"][$i]['id'] .='-flight';
                        foreach($flights["dictionaries"]["carriers"] as $carriers => $getcarriers){
                            if ($row["validatingAirlineCodes"][0] == $carriers){
                                $flights["data"][$i]["airline"] = $getcarriers;
                            // echo "$a<br>codedictionarie: $carriers<br>codedata: ".$row['validatingAirlineCodes'][0]."<br>resultcarriers $getcarriers<br><br><br>";
                            }
                        }


                        foreach($airports['data'] as $aeropuertos){
                            foreach($row['itineraries'][0]['segments'] as $keys => $segmento){
                                if ($segmento['departure']['iataCode']== $aeropuertos['iata_code']) {
                                    $flights["data"][$i]['itineraries'][0]['segments'][$keys]['departure']['departure_airport'] = $aeropuertos['airport_name'];
                                }
                                if ($segmento['arrival']['iataCode']== $aeropuertos['iata_code']) {
                                    $flights["data"][$i]['itineraries'][0]['segments'][$keys]['arrival']['arrival_airport'] = $aeropuertos['airport_name'];
                                }
                                   
                            }
                        }
                        $i++;
                    }
                    $_SESSION['flights'] = $flights;
                    $_SESSION['flightsfinalshow'] = $flights;

                    

                        // echo "<pre>";
                        // print_r($flights);
                        // echo "</pre>";
                    header("Location: ../../Views/Home/flights.php");
                }
                else{
                    $_SESSION['alerta'] = array(
                        "icon" => "info",
                        "title" => "Sorry",
                        "text" => "No flights available for the options provided"
                    );
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            }else{
                foreach ($flights['errors'] as $errors) {
                    if ($errors == $flights['errors'][0]) {
                        $errorcode = $errors['code'];
                        $errortitle = $errors['title'];
                        $errordetail = $errors['detail'];
                    }else{
                        $errorcode = $errorcode . ", " . $errors['code'];
                        $errortitle = $errortitle . ", " . $errors['title'];
                        $errordetail = $errordetail . ", " . $errors['detail'];
                    }
                }
                if ($flights['errors'][0]['status'] == 400) {
                    $errormessage = "$errordetail.";
                    // $errormessage = "$errordetail. Error Code: $errorcode. Please contact us to fix this error";
                    $_SESSION['alerta'] = array(
                        "icon" => "warning",
                        "title" => ucwords(strtolower($errortitle)).".",
                        "text" => "$errormessage."
                    );
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
                }else{
                    $errorcode = $errors['code'];
                    $errortitle = $errors['title'];
                    $errormessage = "Error Code: $errorcode. Please contact us to fix this error";
                    $_SESSION['alerta'] = array(
                        "icon" => "warning",
                        "title" => $errortitle,
                        "text" => $errormessage
                    );
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
                }
            }
        }else{
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a different departure and entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else {
        if (empty($_POST["departure"]) && empty($_POST["entry"]) && empty($_POST["date"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a date, departure and entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["departure"]) && empty($_POST["entry"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a departure and entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["departure"]) && empty($_POST["date"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a date and entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["entry"]) && empty($_POST["date"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a date and entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["departure"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select an entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["entry"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select an entry destination...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } elseif (empty($_POST["date"])) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Wait a second!',
                'text' => 'Please select a departure date...'
            );
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
} else {
    $_SESSION['alerta'] = array(
        'icon' => 'error',
        'title' => 'Wait a second!',
        'text' => 'Please send a POST request...'
    );
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
