<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $_u=param::get_cookie('_userid')?>
 <div class="vertical_logo"><a href="<?php echo APP_PATH;?>"><img src="<?php echo IMG_PATH;?>default/logo2.png"></a></div>
 <ul class="vertical_ul">
   <li>
       <a href="/">首页</a>
   </li>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5413032d23f2aadc51768405f3baa93e&action=category&catid=0&num=9&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'9',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php if($r[child]==0||$r[catid]==14) { ?>
    <li>
      <a href="<?php echo $r['url'];?>" <?php if($catid==$r[catid]||$x_catid==$r[catid]) { ?>class="vertical_li_bg"<?php } ?>><?php echo $r['catname'];?></a>    
      </li>
<?php } else { ?>
 <li>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1c2c01b648d110b8d6323c4dfbf22e7&action=category&catid=%24r%5Bcatid%5D&num=1&order=listorder+ASC&return=infoas\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$infoas = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'1',));}?>
 <?php $n=1;if(is_array($infoas)) foreach($infoas AS $as) { ?>
 <?php $e=$as[url]?>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   <a href="<?php echo $e;?>" <?php if($catid==$r[catid]||$x_catid==$r[catid]) { ?>class="vertical_li_bg"<?php } ?>><?php echo $r['catname'];?></a>    

        <div class="two_nav">
         <ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef211b2f25cea9eee9dc25c344f858e1&action=category&catid=%24r%5Bcatid%5D&num=10&order=listorder+ASC&return=infobs\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$infobs = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'10',));}?>
          <?php $n=1;if(is_array($infobs)) foreach($infobs AS $bs) { ?>
            <li><a href="<?php echo $bs['url'];?>"><?php echo $bs['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             
          </ul>
        </div>    
   </li>        
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>             
   </ul>

 <?php if(empty($_u)&&!isset($_u)) { ?>
    <a target="_blank" href="?m=member&a=login&forward=<?php echo urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);?>&sited=1" class="Sign_in">会员登录</a>
  <?php } else { ?>
    <a href="?m=member&a=init&sited=1" class="Sign_in">个人中心</a>
  <?php } ?>