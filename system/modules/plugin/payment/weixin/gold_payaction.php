<?php 



		header("Location:".WEBSITE_ROOT.create_url("mobile",array("name"=>"modules","do"=>"gold_bridgepay","osn"=>urlencode(base64_encode($order['ordersn'])), "gtitle"=>urlencode(base64_encode($goodtitle)))));
	exit;