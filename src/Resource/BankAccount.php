<?php

namespace OnlineCheckWriter\Resource;

use OnlineCheckWriter\Api;

class BankAccount extends Api
{
    
    public function create(array $data)
    {
        return $data;
    
    }
    public function all(array $query = array())
    {
        return  $this->sendRequest('/bankAccounts',[],"GET");
    
    }

}
