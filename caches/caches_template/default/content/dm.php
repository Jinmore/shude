<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php
$y_catid = $catid;
if($CATEGORYS[$catid][parentid]==0){
	$x_catid = $catid;
}elseif($CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]==0){
	$x_catid = $CATEGORYS[$catid][parentid];
	
}elseif($CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][parentid]==0){
	$x_catid =$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid];

}elseif($CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][parentid]][parentid]==0){
	//$x_catid =$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][parentid];
	$x_catid =$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][parentid];
}else{
	$x_catid =$CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][parentid]][parentid];
}
//echo $x_catid;

$fen_img="";
if($CATEGORYS[$catid][image]){
	$fen_img=$CATEGORYS[$catid][image];
}else{
	if($CATEGORYS[$x_catid][image]){
		$fen_img=$CATEGORYS[$x_catid][image];
	}else{
		$fen_img=IMG_PATH."default/fen_banner.jpg";
	}
}
?>