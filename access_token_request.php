<?php

$token_endpoint = "https://developer.softheon.com/IdentityServer3.WebHost/core/connect/token";
$client_id = "3177AF10D71D4287BC0A8C8946F0BB75";
$client_secret = "17CA89F45D5E4E21926192ACD3D2B151";
$scope = "exampleapi";

$post_fields = array(
    "grant_type" => "client_credentials",
    "scope" => $scope,
    "client_id" => $client_id,
    "client_secret" => $client_secret
);

$curl = curl_init($token_endpoint);

// Set cURL options
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_fields));
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if ($response === false){
    echo curl_error($curl);
}

echo $response;

?>