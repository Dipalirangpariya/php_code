<?php

class Account {
  public function load($key,$type) {
    print(" $key\n");
  }
}

class TwitterAccount extends Account {
  public $type = 'Twitter';

  public function load($key) {
    
//   print("accout have : $key");
     parent::load($key,$this->type);
  }
}


$account = new Account();
$account->load(123,'Facebook');

$twitterAccount = new TwitterAccount();
$twitterAccount->load(123);




?>