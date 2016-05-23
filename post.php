<?php
require 'TwistOAuth.php';

$to = new TwistOAuth('rLiy8r1ChLkjm58RmrJtsAuWg','yby8MpKk95L2PCRm8hV6ZSYseYy6paPQRBl3PD28TpukgREVFo','','');


// tweet
$to->post('statuses/update', array('status' => '@rinyellow_621 '.$i));


// 画像
$params = array(
	'status' => "@WuZqumomo @souunnoreku お幸せに",
	'@media[]' => "img/test.jpg",
);
$to->postMultipart('statuses/update_with_media', $params);

// 複数画像
foreach (array('img/test.jpg', 'img/test2.jpg') as $path) {
	$media_ids[] = $to->postMultipart('media/upload', array('@media' => $path))->media_id_string;
} 
$to->post('statuses/update', array(
	'status' => '@NSG_border_SAO fuck'.$i,
	'media_ids' => implode(',', $media_ids),
));

// follow
$to->post('friendships/create', array('screen_name' => 'rinyellow_621'));
