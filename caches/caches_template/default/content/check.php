<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php
	if(isMobile()){
		if($catid){
			if($CATEGORYS[$catid][type]==0){
				if($catid&&$id){
					$url=APP_PATH."index.php?m=mobile&a=show&catid=".$catid."&id=".$id;
				}else{
					$url=APP_PATH."index.php?m=mobile&a=lists&catid=".$catid;
				}

			}else{
				$url=APP_PATH."index.php?m=mobile&a=page&catid=".$catid;

			}
		}else{

			$url=APP_PATH."index.php?m=mobile&sited=1";
		}


		header("location:".$url);

	}
?>