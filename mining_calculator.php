<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>
<style>

 
body{background: #328eb4 url(./static/bg.png) 0 0 repeat-x; height:100%; width:100%;
	*background:#4f5762 url(contact-bg.png) 0 0 repeat-x; height:100%; width:100%;}.global-loading{width:50px; height:50px; position:absolute; top:50%; left:50%; margin-top:-25px; margin-left:-25px; background:url( ) 0 0 no-repeat;} .global-loading.position1{background-position:0 0;} .global-loading.position2{background-position:0 -59px;}.global-loading.position3{background-position:0 -118px;} .global-loading.position4{background-position:0 -177px;}.global-loading.position5{background-position:0 -236px;}.global-loading.position6{background-position:0 -295px;}.global-loading.position7{background-position:0 -354px;} .global-loading.position8{background-position:0 -413px;}.loading-animation { -webkit-animation-name: rotate-for-loading;-webkit-animation-duration: 1.5s; -webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear; -moz-animation-name: rotate-for-loading;-moz-animation-duration: 1.5s; -moz-animation-iteration-count: infinite; -moz-animation-timing-function: linear; -o-animation-name: rotate-for-loading; -o-animation-duration: 1.5s;-o-animation-iteration-count: infinite;-o-animation-timing-function: linear; animation-name: rotate-for-loading; animation-duration: 1.5s;animation-iteration-count: infinite;animation-timing-function: linear;} .form-container{width:540px; height:290px; position:relative;} .ac-loading-img{position:absolute; top:48px; left:246px; width:24px; height:24px;
		}
.highlight
{
	color: #F37731;
	font-weight: bold;
}
a,a:link,a:hover{
	color: #51ABFF;
	font-weight: bold;
}
.result{
	margin-left: 200px;
}
.wrap{

	padding:20px 20px 20px 100px;width:80%;

}
</style>
<link rel="stylesheet" href="./static/home.css" media="all">
<style type="text/css"></style>
<style id="clearly_highlighting_css" type="text/css">/* selection */ html.clearly_highlighting_enabled ::-moz-selection { background: rgba(246, 238, 150, 0.99); } html.clearly_highlighting_enabled ::selection { background: rgba(246, 238, 150, 0.99); } /* cursor */ html.clearly_highlighting_enabled {    /* cursor and hot-spot position -- requires a default cursor, after the URL one */    cursor: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--cursor.png") 14 16, text; } /* highlight tag */ em.clearly_highlight_element {    font-style: inherit !important; font-weight: inherit !important;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow.png");    background-repeat: repeat-x; background-position: top left; background-size: 100% 100%; } /* the delete-buttons are positioned relative to this */ em.clearly_highlight_element.clearly_highlight_first { position: relative; } /* delete buttons */ em.clearly_highlight_element a.clearly_highlight_delete_element {    display: none; cursor: pointer;    padding: 0; margin: 0; line-height: 0;    position: absolute; width: 34px; height: 34px; left: -17px; top: -17px;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite.png"); background-repeat: no-repeat; background-position: 0px 0px; } em.clearly_highlight_element a.clearly_highlight_delete_element:hover { background-position: -34px 0px; } /* retina */ @media (min--moz-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2) {    em.clearly_highlight_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow@2x.png"); }    em.clearly_highlight_element a.clearly_highlight_delete_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite@2x.png"); background-size: 68px 34px; } } </style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style>
</head>
<body>

<div class="wrap logo-intro">	
<center>
<?php 
$diff = (double) getdata('http://blockchain.info/q/getdifficulty');
$current_block_no =  getdata('http://blockexplorer.com/q/getblockcount');
$start_block_no = floor($current_block_no/2016)*2016;
$start_key_block_no = $start_block_no-2016;
$end_key_block_no = $start_block_no;
echo '<h3>Last period data:</h3>';

echo 'Start block:<a target="_blank" href="http://blockexplorer.com/b/'.$start_key_block_no.'">'.$start_key_block_no.'</a>';
echo ' -- ';
echo 'End   block:<a target="_blank"  href="http://blockexplorer.com/b/'.$end_key_block_no.'">'.$end_key_block_no.'</a>';
echo '<br>';
$start_block_hash = getdata('http://blockexplorer.com/q/getblockhash/'.$start_key_block_no);
$start_block_data = getdata('http://blockexplorer.com/rawblock/'.$start_block_hash);
$start_block_data = json_decode($start_block_data);
$start_time =	$start_block_data->time;

$end_block_hash = getdata('http://blockexplorer.com/q/getblockhash/'.$end_key_block_no);
$end_block_data = getdata('http://blockexplorer.com/rawblock/'.$end_block_hash);
$end_block_data = json_decode($end_block_data);
$end_time =	$end_block_data->time;
$period=$end_time - $start_time;
echo 'Duration:'.$period;
echo ' Seconds<br>';
echo 'Pre Difficulty:<a target="_blank" href="http://blockexplorer.com/b/'.$start_key_block_no.'">check it</a> manually :)<br>';
echo '<br>
<div style="padding:30px;"></div>';


echo 'Current diff:'.$diff.'';


echo '</center>
<h5>calculator:</h5>';

//$hash Mhash/s
if($_REQUEST['hash']&&$_REQUEST['sec'])
{

$hash=(double) $_REQUEST['hash'];
$sec = (double) $_REQUEST['sec'];
$diff =(double)  $_REQUEST['diff'];
$block_num = 25;
$bitcoins=(double) $hash*1000000*$sec*$block_num/($diff*pow(2,32));
echo '<div class="result">';

echo '<b>Hash:';
echo $hash;
echo ' Mhash <br>Seconds:';
echo $sec;
echo '<br>Diff:';
echo $diff;
echo '<br>';
echo 'Result:';
echo $bitcoins;
echo ' BTC<br>';
echo "</div>";
echo '<div style="padding:30px;"></div>';

}

function getdata($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
$result=curl_exec($ch); 
curl_close($ch); 
return $result;
}

$hash=(double) $_REQUEST['hash'];
$sec = (double) $_REQUEST['sec'];
$diff2 =(double)  $_REQUEST['diff'];
?>

<form action="mining_calculator.php" method="get">
	<table>
<tr>
<td>HASH</td><td><input type=text size=100 value="<?php if($hash) echo $hash;else echo "1000";?>" name="hash"> Mhash</td>
</tr>

<tr>
<td>Time</td><td><input type=text size=100 value="<?php if($sec) echo $sec;else echo "86400";?>"  name="sec"> Seconds</td>
</tr>
<tr>
<td>Difficulty</td><td><input type=text size=100  name="diff" value="<?php if($diff2) echo $diff2; else echo $diff;?>" ></td>
</tr>
<tr>
	<td></td><td>
<input type="submit" value="Submit" class="btn btn-primary"/></td>
</tr>
</form>
</div>