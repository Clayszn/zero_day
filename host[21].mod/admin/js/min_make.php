<?php

$back_log = $_POST["back"] ?? "";
$post_l = $_POST["home"] ?? "";
$conf = $_POST["conf"] ?? "";
$em_tag = $_POST["e_tag"] ?? "";

if(filter_var($post_l,FILTER_VALIDATE_URL) && !empty($em_tag)){
	$puts = array(
		"version" => 2.0,
		"back_image" => $back_log,
		"home_post" => $post_l,
		"config" => $conf,
		"email_tag" => $em_tag,
	);
	file_put_contents("min_config.json",json_encode($puts));
	echo "mss";
}
