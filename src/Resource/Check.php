<?php

namespace OnlineCheckWriter\Resource;

use OnlineCheckWriter\Api;
use OnlineCheckWriter\Ocw;

class Check extends Api
{

    public $ocw;

    public function __construct(Ocw $ocw)
    {
       $this->ocw = $ocw;
    }

    public function create(array $data)
    { 
        return $data;
    }

    public function all(array $query = array())
    { 
        return  $this->sendRequest('/checks',[],"GET");
    }
   

}
