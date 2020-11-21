<?php

namespace OnlineCheckWriter;


use OnlineCheckWriter\Resource\Checks;

class Api{

    
    protected $ocw;
    public function __construct(Ocw $ocw)
    {
          $this->ocw = $ocw;
        
    }

    public function sendRequest($resource_url, $data, $request_method = "POST"){
        
            $curl = curl_init();
             $this->ocw->baseUrl . $resource_url;
            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->ocw->baseUrl . $resource_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => false,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $request_method,
                CURLOPT_POSTFIELDS => json_encode($data) ,
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer " . $this->ocw->token
                ) ,
            ));
            
            $response = curl_exec($curl);
            $err      = curl_error($curl);
            curl_close($curl);
            if ($err)
            {
                $r = array(
                    "completed" => 0,
                    "errorMsg" => $err
                );
                return json_decode($r, true);
            }
            else
            {
                return json_decode($response, true);
            }

    }



}