<?php
require 'TwistOAuth.php';
//sakito_moon　or momo
$to = new TwistOAuth('rLiy8r1ChLkjm58RmrJtsAuWg', 'yby8MpKk95L2PCRm8hV6ZSYseYy6paPQRBl3PD28TpukgREVFo','','');




 $tweets = $to->get('statuses/user_timeline',['screen_name'=>'TwitterID','count'=>10]);


foreach( $tweets as $tweet){

if(!array_key_exists('retweeted_status',$tweet)){

  
    echo "\e[35mFrom : \e[37m@".$tweet->user->screen_name."\n";
    echo "\e[35mText : \e[37m".$text."\n";
    echo "------------------------------------------------\n";
}

}


var_dump($to->get('friendships/incoming'));