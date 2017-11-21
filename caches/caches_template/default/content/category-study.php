<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<body>
<div class="base_inner clearFix">
    <div class="left_shadow"></div>
    <div class="right_shadow"></div>
    <!--垂直导航-->
    <div class="vertical_nav fl">
      <?php include template("content","left-nav"); ?>
      <!--二级菜单-->
    </div>
    <!--右边内容-->
    <div class="huiYuan_one_right fr">
      <div class="vertical_base_title">您当前的位置：<a href="/">首页</a>  ><?php echo $CATEGORYS[$x_catid]['catname'];?> ><?php if($CATEGORYS[$catid][parentid]!=$x_catid) { ?><?php if($CATEGORYS[$catid][parentid]!=0) { ?><a href="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['url'];?>"><?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['catname'];?></a> ><?php } ?><?php } ?><span><?php echo $CATEGORYS[$catid]['catname'];?></span></div>
        <!--修改-->
        <div class="right_modify">
       <ul>
           <?php $sql_count="select count(*) as num from phpcms_category where parentid=$catid and ismenu=1"?> 
          <?php $this->db->query($sql_count)?>
          <?php $total=$this->db->fetch_array()?>
          <?php $pagesize=4?>
          <?php $page = max(intval($_GET[page]), 1);?>
          <?php $offset = $pagesize*($page-1);?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f7f7636e468b700577063a0aabe06b2f&sql=select+%2A+from+phpcms_category+where+parentid%3D%24catid+and+ismenu%3D1+order+by+listorder+asc+limit+%24offset%2C%24pagesize+--\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where parentid=$catid and ismenu=1 order by listorder asc limit $offset,$pagesize -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="clearFix">
                    <a class="left fl" href="javascript:;"><img src="<?php echo thumb($r[image],480,323);?>"></a>
                    <div class="right fl">
                        <div class="right_h3" ><?php echo $r['catname'];?></div>
                        <div class="right_text">
                           <?php echo $r['description'];?>
                        </div>
                       	
                           
							
                            <a href="<?php echo $r['url'];?>" class="right_more" >READ MORE</a>
							
                    </div>
                </li>
             <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>            
            </ul>
          <?php if($total[0][num]>$pagesize) { ?>
            <div id="pages" class="page" align="center"><?php echo pages($total[0][num],$page,$pagesize,makeurlrule());?></div>
         <?php } ?>
        </div>
<?php include template("content","footer-main"); ?>