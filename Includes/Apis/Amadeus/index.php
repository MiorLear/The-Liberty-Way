<?php
class search_apis
{
    public function airlab()
    {
        $queryString = http_build_query([
            'api_key' => '18a661b1-c172-4779-a0ee-7fec22bef67d' //Api Key Aún disponible
            // 'maxPrice' => $maxprice
        ]);

        $url = sprintf('%s?%s', 'https://airlabs.co/api/v9/airports', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $airport = curl_exec($curls);
        curl_close($curls);
        return json_decode($airport, true);
    }
    public function aviationstack_airports()
    {
        $queryString = http_build_query([
            'access_key' => '1610c044dd313b0bd8755901fabfd0b5', //Api Key Expirada
            'limit' => '6707'
            // 'maxPrice' => $maxprice
        ]);

        $url = sprintf('%s?%s', 'http://api.aviationstack.com/v1/airports', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        curl_close($curls);
    }
    public function aviationstack_cities()
    {
        $queryString = http_build_query([
            'access_key' => '1610c044dd313b0bd8755901fabfd0b5', //Api Key Expirada
            'limit' => '9370'
            // 'maxPrice' => $maxprice
        ]);

        $url = sprintf('%s?%s', 'http://api.aviationstack.com/v1/cities', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        curl_close($curls);
    }
    public function countries()
    {
        $apiurl = 'https://www.universal-tutorial.com/api/getaccesstoken';
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Accept: application/json', 'api-token: KFC4tPHEKs3nQk1K4JDWZ4ekGlrC-f1P-r7v1SKB4kC7-Ru91M_TkFYYbd6-Zc_8-S0', 'user-email: thelivertway@gmail.com'));
        curl_setopt($curls, CURLOPT_URL, $apiurl);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $apitoken = curl_exec($curls);
        $apitoken = json_decode($apitoken, true);
        $apitoken = $apitoken['auth_token'];
        curl_close($curls);

        $countriesurl = 'https://www.universal-tutorial.com/api/countries/';
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array("Authorization: Bearer $apitoken", 'Accept: application/json'));
        curl_setopt($curls, CURLOPT_URL, $countriesurl);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $countriesjson = curl_exec($curls);
        $countriesjson = json_decode($countriesjson, true);
        curl_close($curls);
        return $countriesjson;
    }
    public function restcountries()
    {
        $countriesurl = 'https://restcountries.com/v3.1/all';
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_URL, $countriesurl);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $countriesjson = curl_exec($curls);
        $countriesjson = json_decode($countriesjson, true);
        curl_close($curls);
        return $countriesjson;
    }
    public function amadeus_auth_token()
    {
        $tokenurl = 'https://test.api.amadeus.com/v1/security/oauth2/token';
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curls, CURLOPT_URL, $tokenurl);
        curl_setopt($curls, CURLOPT_POSTFIELDS, 'grant_type=client_credentials&client_id=JnnOgS5gOr4Ub9eSeVj0cMYdVOnxQyXC&client_secret=nsMNdStAKeS30KBm');
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $apitoken = curl_exec($curls);
        $apitoken = json_decode($apitoken, true);
        curl_close($curls);
        return $apitoken['access_token'];
    }
    function amadeus_flight_destinations($departure, $entry, $date, $adults)
    {
        $auth = new search_apis;
        $token = $auth->amadeus_auth_token();
        $queryString = http_build_query([
            'originLocationCode' => $departure,
            'destinationLocationCode' => $entry,
            'departureDate' => $date,
            'adults' => $adults
            // 'maxPrice' => $maxprice
        ]);

        $url = sprintf('%s?%s', 'https://test.api.amadeus.com/v2/shopping/flight-offers', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Authorization: Bearer $token"));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $flight_result = curl_exec($curls);
        curl_close($curls);
        return json_decode($flight_result, true);
    }
    function amadeus_lodgings_list($city)
    {
        $auth = new search_apis;
        $token = $auth->amadeus_auth_token();
        $queryString = http_build_query([
            'cityCode' => $city,
            'radius' => '100',
            'radiusUnit' => 'KM',
            'ratings' => '1,2,3,4,5',
            'hotelSource' => 'ALL'
        ]);

        $url = sprintf('%s?%s', 'https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-city', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Authorization: Bearer $token"));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $flight_result = curl_exec($curls);
        curl_close($curls);
        return json_decode($flight_result, true);
    }

    function citieslist()
    {
        $json = file_get_contents("./city_airport.json"); //Json Propio Generado con AviationStack
        return json_decode($json);
    }
    function amadeus_lodgings_prices($hotelIds, $checkin, $checkout, $rooms){
        $auth = new search_apis;
        $token = $auth->amadeus_auth_token();
        $queryString = http_build_query([
            'hotelIds' => $hotelIds,
            'checkInDate' => $checkin,
            'checkOutDate' => $checkout,
            'roomQuantity' => $rooms,
            'paymentPolicy' => 'NONE',
            'bestRateOnly' => 'true',
            'max' => 100
        ]);

        $url = sprintf('%s?%s', 'https://test.api.amadeus.com/v3/shopping/hotel-offers', $queryString);
        $curls = curl_init();
        curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Authorization: Bearer $token"));
        curl_setopt($curls, CURLOPT_URL, $url);
        curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
        $flight_result = curl_exec($curls);
        curl_close($curls);
        return json_decode($flight_result, true);
    }
}


// $apicall = new search_apis;
// $apiresult = $apicall->amadeus_lodgings_prices('MCLONGHM', '2023-11-22', '2023-11-23', '1');
// echo '<pre>';
// print_r($apiresult);
// echo '</pre>';
