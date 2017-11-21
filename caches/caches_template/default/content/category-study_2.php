<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>      
<body>
<?php $this->exam_course_db=pc_base::load_model('exam_course_model');?>
<?php $exam_chapter_db=pc_base::load_model('exam_chapter_model');?>
<?php $catinfo=$this->exam_course_db->get_one(array('courseid'=>$catid,'uid'=>$this->_userid))?>
<?php $userid=$this->_userid?>
<?php if($this->_userid) { ?>
<?php 
$currentid=$catinfo[currentid];//获取当前考试进行阶段
$arrchildid=trim(str_replace($catid, "", $CATEGORYS[$catid]['arrchildid']),",");

 $arr=explode(",",$arrchildid);
 foreach ($arr as $key => $value) {   
     if($currentid<count($arr)) 
     {
      if($key==$currentid){
            $current=$value;       
        }
     }else{
      $current=$value;  
     }
    
 }

//echo $current;
 $exam_record=pc_base::load_model('exam_record_model');
 $date =  strtotime(date('Ymd'))-86400;
 $where="uid=$_userid and courseid=$catid and knowsid=$current and endtime > $date ";
$records= $exam_record->select($where);

 $lastnum=2-count($records);
?>  


<?php $nextid=$catinfo[currentid]+1?>
<?php } else { ?>
<?php $lastnum=0;?>
<?php } ?>
<?php //计算次数?>   


<script type="text/javascript">
    var current=<?php echo SYS_TIME;?>;
    var catid=<?php echo $catid;?>;
    var time=<?php echo $lastnum;?>;   
</script>
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
        <div class="vertical_base_title">您当前的位置：<a href="/">首页</a> ><?php echo $CATEGORYS[$x_catid]['catname'];?>> <a href="{$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid][parentid]][parentid]][url]"><?php echo $CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['catname'];?></a> > <a href="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['url'];?>"><?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['catname'];?></a> ><span><?php echo $CATEGORYS[$catid]['catname'];?></span></div>
        <div class="huiYuan_one_right_box">
            <!--不一样的地方-->
            <div class="hui_two_top clearFix">
                <div class="hui_two_top_left fl"><img src="<?php echo $CATEGORYS[$catid]['image'];?>"></div>
                <div class="hui_two_top_right fl">
                    <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
                    <div class="hui_two_top_right_text">
                        <?php echo $CATEGORYS[$catid]['description'];?>
                    </div>

                      <div class="frequency fr">今日剩余次数：<span><?php echo $lastnum;?></span>次</div>
                       <div class="Refresh fr">每天00：00刷新</div>
                </div>
            </div>
            <div class="hui_two_bot">
                <ul class="clearFix video" >
		<?php $sql_count="select count(*) as num from phpcms_category where parentid=$catid and ismenu=1"?> 
          <?php $this->db->query($sql_count)?>
          <?php $total=$this->db->fetch_array()?>
          <?php $pagesize=20?>
          <?php $page = max(intval($_GET[page]), 1);?>
          <?php $offset = $pagesize*($page-1);?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f7f7636e468b700577063a0aabe06b2f&sql=select+%2A+from+phpcms_category+where+parentid%3D%24catid+and+ismenu%3D1+order+by+listorder+asc+limit+%24offset%2C%24pagesize+--\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from phpcms_category where parentid=$catid and ismenu=1 order by listorder asc limit $offset,$pagesize -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li data-media-id="<?php echo $r['catid'];?>">
                 <a href="<?php echo $r['url'];?>" class="tong_text fl"><div class="num"><?php echo $n;?></div><p><?php echo $r['catname'];?></p>
            <?php $chapter_infd=$exam_chapter_db->get_one(array('uid'=>$userid,'courseid'=>$r[parentid],"chapterid"=>$r[catid]));?>
			
            <?php $yxq=$chapter_infd[endtime]?>
             <div class="term">有效期至：<?php echo date("Y-m-d",$yxq);?></div>
             </a> 
		 
            <?php if($userid) { ?>
               <?php if($current==$n||$nextid>$n) { ?>
                 <a class="tong fr" href="?m=exam&c=index&a=exam_rules&step=1&catid=<?php echo $catid;?>&chapterid=<?php echo $r['catid'];?>">已通过</a>                      
                 <?php } elseif ($nextid==$n) { ?>    
                 <?php if($lastnum<1) { ?>  
				
                   <a class="tong fr" id="lasttimer" href="?m=exam&c=index&a=exam_rules&step=1&catid=<?php echo $catid;?>&chapterid=<?php echo $r['catid'];?>">考试</a>    
                  <?php } else { ?>
                   <a class="tong fr"  href="?m=exam&c=index&a=exam_rules&step=1&catid=<?php echo $catid;?>&chapterid=<?php echo $r['catid'];?>" style="background:#33a643">考试</a>
                 <?php } ?>                  
                 
                   <?php } else { ?>
                  <a class="tong fr" href="?m=exam&c=index&a=exam_rules&step=1&catid=<?php echo $catid;?>&chapterid=<?php echo $r['catid'];?>" style="background:#db0202">未通过</a>
              <?php } ?>     
  
                <?php } else { ?>
                <a class="tong fr" href="?m=exam&c=index&a=exam_rules&step=1&catid=<?php echo $catid;?>&chapterid=<?php echo $r['catid'];?>" style="background:#db0202">未登录</a>    
                  <?php } ?>
                    </li>         
            <?php $n++;}unset($n); ?>   
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>              
                   
                  
                </ul>

         <?php if($total[0][num]>$pagesize) { ?>
            <div id="pages" class="page" align="center"><?php echo pages($total[0][num],$page,$pagesize,makeurlrule());?></div>
         <?php } ?>
            </div>
        </div>
<script src="statics/plugin/layerui/lay/dest/layui.all.js"></script>
<script src="<?php echo JS_PATH;?>default/checkAuth.js"></script>
 <script type="text/javascript">
 /**倒计时计算  暂修改*/
  var d=new Date();
  var cd=d.getDay();
  var cm=d.getMonth();
  var cy=d.getYear();
   // var endtime=var today = new Date(cd."/").getTime();
   // console.log(endtime)
    if(time<1){     
      // // setInterval(function(){
      // var starttime=new Date();         
      //  var _shijiancha=endtime-starttime.getTime();
      //  console.log(_shijiancha);
      //  $("#lasttimer").html(formatSeconds(_shijiancha));
      //  },1000);
    }   

function formatSeconds(value) { 
    var theTime = parseInt(value);// 秒 
    var theTime1 = 0;// 分 
    var theTime2 = 0;// 小时 
    // alert(theTime); 
    if(theTime > 60) { 
    theTime1 = parseInt(theTime/60); 
    theTime = parseInt(theTime%60); 
    // alert(theTime1+"-"+theTime); 
    if(theTime1 > 60) { 
    theTime2 = parseInt(theTime1/60); 
    theTime1 = parseInt(theTime1%60); 
    } 
    } 
    var result = ""+parseInt(theTime)+"秒"; 
    if(theTime1 > 0) { 
    result = ""+parseInt(theTime1)+"分"+result; 
    } 
    if(theTime2 > 0) { 
    result = ""+parseInt(theTime2)+"小时"+result; 
    } 
    return result; 
} 
 </script>
<?php include template("content","footer-main"); ?>        