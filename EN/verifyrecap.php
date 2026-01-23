<?php

//Funcion que valida el token para el envio del formulario

function sendVerify($apk,$token) {
  $response = FALSE;
  $data = [
    "secret" => $apk,
    "response" => $token
  ];
  $options = [
    CURLOPT_URL => "https://hcaptcha.com/siteverify",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_RETURNTRANSFER => true
  ];
  $ch = curl_init();
  curl_setopt_array($ch,$options);
  $rs = json_decode(curl_exec($ch),true);
  if($rs['success']){
    $response = TRUE;
  }
  return $response;
}

?>