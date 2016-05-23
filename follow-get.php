<?php
require 'TwistOAuth.phar';

try {
$to = new TwistOAuth('rLiy8r1ChLkjm58RmrJtsAuWg', 'yby8MpKk95L2PCRm8hV6ZSYseYy6paPQRBl3PD28TpukgREVFo','','');


 $user = $to->get('friends/list', ['count' => 50]);


foreach( $user->users as $friend ){
	echo $friend->name;
	echo "(@".$friend->screen_name.")\n";
	/*echo "「".$friend->description."」\n";
	echo "Follower : ".$friend->followers_count."  Follow : ".$friend->friends_count."\n";
	echo "\n\n";*/

}


} catch (TwistException $e) {
	echo $e->getMessage()."\n";

}