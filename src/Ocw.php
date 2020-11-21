<?php

namespace OnlineCheckWriter;

use OnlineCheckWriter\Resource\Check;


class Ocw extends Api{

    const SANDBOX_BASE_URL    = 'https://sandbox.onlinecheckwriter.com/api/v3';
    const LIVE_BASE_URL       = 'https://app.onlinecheckwriter.com/api/v3';
    const LOCAL_BASE_URL      = 'http://localhost:8000/api/v3';

    public $version;
    public $token;
    public $baseUrl;

    public function __construct($token = null,$enviorment="LOCAL", $version = "v3")
    {
        $this->token         = $token;

        $this->version       = $version;

        $this->baseUrl       = "http://localhost:8000/api/v3";
       
    }

    public function checks()
    {
        return new Resource\Check($this);
    }
    
    public function bankAccounts()
    {
        return new Resource\BankAccount($this);
    }


}