<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://cevicherias.informaticapp.com/clientes/'.$_GET['cli_id'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VxWmE4ZEtVREUxZFl5VmJsSDhEbDRuMllIaFkzYktTOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlRVJZdDJTL3FVM1VETFl6dTBaZmRvM3BtLmUzampBaQ=='
    ),
  ));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);
header("Location: cliente_html.php");
?>