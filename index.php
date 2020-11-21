
<?php

use OnlineCheckWriter\Ocw;

require_once __DIR__ . '/vendor/autoload.php';
   

  $token ="lgcu86ZhYb7PoEHJfm3A9JlCBYAQbp1UTS2VQVOcdoj7OXNMUxJsYnhssSnw";

  $ocw   = new Ocw($token,"LOCAL","v3");
//   $checks          = $ocw->checks()->all();
  $bankAccounts    = $ocw->bankAccounts()->all();



  print_r($bankAccounts);
        


    
