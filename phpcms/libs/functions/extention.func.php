<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 /**
 * 当前路径
 * 返回指定栏目路径层级
 * @param $catid 栏目id
 * @param $symbol 栏目间隔符
 */
function mycatpos($catid, $symbol=' > '){
	$category_arr = array();
	$y_catid = $catid;
	$siteids = getcache('category_content','commons');
	$siteid = $siteids[$catid];
	$category_arr = getcache('category_content_'.$siteid,'commons');
	if(!isset($category_arr[$catid])) return '';
	$pos = '';
	$siteurl = siteurl($category_arr[$catid]['siteid']);
	$arrparentid = array_filter(explode(',', $category_arr[$catid]['arrparentid'].','.$catid));
	foreach($arrparentid as $catid) {
		$url = $category_arr[$catid]['url'];
		if(strpos($url, '://') === false) $url = $siteurl.$url;
		if($y_catid == $catid){
			$pos .= $symbol.'<a href="'.$url.'" class="hover">'.$category_arr[$catid]['catname'].'</a>';
		}else{
			$pos .= $symbol.'<a href="'.'javascript:;'.'">'.$category_arr[$catid]['catname'].'</a>';
		}
	}
	return $pos;
}


function build_query($query_data, $encoding = false) {  
    $res = '';  
    $count = count ( $query_data );  
    $i = 0; 
    
    foreach ( $query_data as $k => $v ) {  
        if ($encoding === true) {  
            $v = urlencode ( $v );  
        }  
        if ($i < $count - 1) {  
            $res .= $k . '=' . $v . '&';  
        } else {  
            $res .= $k . '=' . $v;  
        }  
        $i ++;  
    }  
   
    return $res;  
}  
?>