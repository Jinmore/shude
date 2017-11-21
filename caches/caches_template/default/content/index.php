<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<body>
<div class="top_line"></div>
<div class="header_top">
<div class="inner">
   <?php include template("content","header-nav"); ?>
</div>
</div>

<div id="demo01" class="flexslider">
    <ul class="slides">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd1e5da4037289e7692fc89c1904f7f1&action=lists&catid=24&num=25&order=listorder+desc%2Cinputtime+desc%2Cid+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'listorder desc,inputtime desc,id DESC','limit'=>'25',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><div class="img"><img src="<?php echo $r['thumb'];?>"></div></li>
    <?php $n++;}unset($n); ?>    
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
    </ul>
    <!-- <div class="banner_line"></div> -->
</div>
<div class="inner">
    <div class="ke">
        <div class="ke_top clearFix">
            <div class="ke_top_left fl">
                <h3 class="base_title"><?php echo $CATEGORYS['1']['catname_en'];?></h3>
                <p class="base_title_two"><?php echo $CATEGORYS['1']['catname'];?></p>

               <div class="three_ke">
	
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c4f0672821c9f01192851f8f0a9aaaef&action=category&catid=1&num=3&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','order'=>'listorder ASC','limit'=>'3',));}?>
            	    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                               <div class="chu_ke clearFix">
                                   <div class="chu_ke_left fl"><img src="<?php if($n==1) { ?><?php echo IMG_PATH;?>default/ji_05.jpg<?php } elseif ($n==2) { ?><?php echo IMG_PATH;?>default/ji_08.jpg<?php } else { ?><?php echo IMG_PATH;?>default/ji_10.jpg<?php } ?>"></div>
                                   <div class="chu_ke_right fl">
                                       <a href="<?php echo $r['url'];?>" class="chu_a"><?php echo $r['catname'];?></a>
                                       <div class="chu_ke_right_bot clearFix">
                                           <p class="fl"><?php echo str_cut(strip_tags($r[description]),63,"...");?></p><a href="<?php echo $r['url'];?>" class="detailed fl">[点击详细]</a>
                                       </div>
                                   </div>
                               </div>
            		<?php $n++;}unset($n); ?>
            		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               
               </div>

            </div>
            <div class="ke_top_right fr"><img src="<?php echo $CATEGORYS['1']['image'];?>"></div>
        </div>
    </div>
</div>

<div class="ke_bot">
    <div class="ke_bot_inner">
        <ul>
            <li>
                <a href="<?php echo $CATEGORYS['34']['url'];?>">
                    <div class="a_icon1"></div>
                    <h5>课程合作</h5>
                </a>
            </li>
            <li>
                <a href="<?php echo $CATEGORYS['85']['url'];?>">
                    <div class="a_icon2"></div>
                    <h5>咨询</h5>
                </a>
            </li>
            <li>
                <a href="<?php echo $CATEGORYS['4']['url'];?>">
                    <div class="a_icon3"></div>
                    <h5>培训</h5>
                </a>
            </li>
            <li>
                <a href="<?php echo $CATEGORYS['110']['url'];?>">
                    <div class="a_icon4"></div>
                    <h5>商务服务</h5>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="cooperation">
    <div class="inner">
        <div class="cooperation_line"></div>
        <h3>Collaborative description</h3>
        <p>合作说明</p>
		 
        <div class="cooperation_bot clearFix">
            <div class="heZuo_left fl">
                <h4>营销策略支持</h4>
                <div class="odd clearFix">
                <div class="diamond fl">&nbsp;</div>
                <div class="even_p fl">树德将为您提供专业的上门招生团队，为您量身定制一套属于您的、独家的招生解决方案。我们的招生服务不仅可以增加您的客户到访量，还可以提升您的主营业务销售量，降低公司成本。客观条件上减少对“人”的依赖。


</div>
                </div>
                
                </div>
                <div class="heZuo_left heZuo_right fl">
                <h4>咨询培训</h4>
                <div class="odd clearFix">
                <div class="diamond fl">&nbsp;</div>
                <div class="even_p fl">我们拥有多元化、多层次的服务体系，不仅针对您目前存在的问题制定出一套独特的解决方案，而且还可以为贵司未来发展的项目提供推广加盟及上市捆绑储备。区域独家合作，为您的发展保驾护航。

</div>
                </div>
               
                
               

        </div>
    </div>
</div>
</div>

<div class="qiYe">
    <div class="inner">
        <div class="qiYe_zs"></div>
        <div class="base_title"><?php echo $CATEGORYS['4']['catname_en'];?></div>
        <div class="base_title_two"><?php echo $CATEGORYS['4']['catname'];?></div>
        <div class="qiYe_pic"><img src="<?php echo $CATEGORYS['4']['image'];?>"></div>
    </div>
</div>
<div class="box_news">
<div class="inner">
    <div class="news">
        <div class="news_bg"></div>
        <div class="base_title"><a href="<?php echo $CATEGORYS['25']['url'];?>"><?php echo $CATEGORYS['25']['catname_en'];?></a></div>
        <div class="base_title_two"><a href="<?php echo $CATEGORYS['25']['url'];?>"><?php echo $CATEGORYS['25']['catname'];?></a></div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e7c281013683034335ad0f427d95ce22&action=lists&catid=25&num=2&order=listorder+desc%2Cinputtime+desc%2Cid+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'listorder desc,inputtime desc,id DESC','limit'=>'2',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php if($n%2!=0) { ?>
        <div class="news_top clearFix">
            <div class="news_top_left fl">
                <a class="left_number fl" href="<?php echo $r['url'];?>">
                    <h1><?php echo date("d",$r[inputtime]);?></h1>
                    <div class="left_number_txt"><?php echo date("Y-m",$r[inputtime]);?></div>
                </a>
                <div class="news_line fl"></div>
                <div class="news_text fl">
                    <a href="<?php echo $r['url'];?>" class="news_text1"><?php echo $r['title'];?></a>
                    <div class="news_text2"><?php echo str_cut($r[description],159,"...");?></div>
                    <a href="<?php echo $r['url'];?>" class="news_more">READ MORE</a>
                </div>
            </div>
            <div class="news_top_right fr">
                <a href="javascript:;"><img src="<?php echo thumb($r[indexthumb],601,170);?>"></a></div>
        </div>
        <?php } else { ?>
           <div class="news_top news_bot clearFix">
            <div class="news_top_right fl">
                <a href="javascript:;"><img src="<?php echo thumb($r[indexthumb],601,170);?>"></a></div>
            <div class="news_top_left fr">
                <a class="left_number fl" href="<?php echo $r['url'];?>">
                    <h1><?php echo date("d",$r[inputtime]);?></h1>
                    <div class="left_number_txt"><?php echo date("Y-m",$r[inputtime]);?></div>
                </a>
                <div class="news_line fl"></div>
                <div class="news_text fl">
                    <a href="<?php echo $r['url'];?>" class="news_text1"><?php echo $r['title'];?></a>
                    <div class="news_text2"><?php echo str_cut($r[description],159,"...");?> </div>
                    <a href="<?php echo $r['url'];?>" class="news_more">READ MORE</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
    </div>
</div>
</div>

<div class="problem">
    <div class="inner">
        <div class="problem_bg"></div>
        <div class="base_title"><a href="<?php echo $CATEGORYS['26']['url'];?>"><?php echo $CATEGORYS['26']['catname_en'];?></a></div>
        <div class="base_title_two"><a href="<?php echo $CATEGORYS['26']['url'];?>"><?php echo $CATEGORYS['26']['catname'];?></a></div>
        <div class="problem_bot">
	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2d9149f52461245668013c0f2d5d42e&action=lists&catid=26&num=4&order=listorder+desc%2Cinputtime+desc%2Cid+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','order'=>'listorder desc,inputtime desc,id DESC','limit'=>'4',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="problem_one">
                <a href="<?php echo $r['url'];?>" class="q clearFix">
                    <span class="fl"><img src="<?php echo IMG_PATH;?>default/problem_pic_14.png"></span>
                    <p class="q_title fl"><?php echo $r['title'];?></p>
                </a>
                <div class="problem_one_bot clearFix">
                    <div class="w fl"><img src="<?php echo IMG_PATH;?>default/problem_pic_17.png"></div>
                    <div class="problem_one_bot_right fl">
                        <p class="w_text">
                        <?php echo str_cut($r[description],147,"...");?>
                        </p>
                        
                    </div>
                </div>
            </div>   
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	  </div>
    </div>
</div>
<?php include template("content","footer"); ?>