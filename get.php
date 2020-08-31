<?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/SuhuPagarsih/Temperature/la",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "X-M2M-Origin: bdc2996719c6ac07:8cbb60e9c5997e74",
            "Content-Type: application/json;ty=4",
            "Accept: application/json"
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_encode($response);
    echo $response;
?>