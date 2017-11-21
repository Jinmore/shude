<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $_u=param::get_cookie('_userid')?>
 <div class="header clearFix">
        <a href="/" class="logo fl"><img src="<?php echo IMG_PATH;?>default/logo2.png"></a>
        <ul class="nav fl">
            <li><a href="/"  <?php if(ROUTE_A=='init'&&ROUTE_M=='content') { ?>class="nav_color" <?php } ?>>首页</a></li>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49e1cb31e8e8254e69addb9e9ca09791&action=category&catid=0&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
      <?php $m=0;?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<?php if($r[child]==0||$r[catid]==14) { ?>
		<li <?php if($catid==$r[catid]||$x_catid==$r[catid]) { ?> class="nav_hov" <?php } ?>><a href="<?php echo $r['url'];?>"  <?php if($r[type]==2) { ?> target="_blank"<?php } ?>><?php echo $r['catname'];?></a></li>
		<?php } else { ?>
		<?php $j=0;?>
		<?php $d=0;?>
		<?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $m) { ?>
			<?php $j++;?>
			<?php if($j==1) { ?>				
				<?php $xj_url=$m[url];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>
		<li  <?php if($catid==$r[catid] || $CATEGORYS[$catid][parentid]==$r[catid]) { ?> class="nav_color" <?php } ?>><a href="<?php echo $xj_url;?>"><?php echo $r['catname'];?></a></li>
		<?php } ?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 
        </ul>
		<?php if(empty($_u)) { ?>
        <a target="_blank" href="?m=member&a=login&forward=<?php echo urlencode($_GET['forward']);?>&sited=1" class="sign fr">会员登录</a>
		<?php } else { ?>
		<a href="?m=member&a=init&sited=1" target="_blank" class="sign fr">个人中心</a>
        <?php } ?>
    </div>