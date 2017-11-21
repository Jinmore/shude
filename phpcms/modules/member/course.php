<?php
/**
 * 管理员后台会员操作类
 */

defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);

pc_base::load_app_class('admin', 'admin', 0);
pc_base::load_sys_class('format', '', 0);
pc_base::load_sys_class('form', '', 0);
pc_base::load_app_func('util', 'content');

class course extends admin {
	
	private $db, $verify_db;
	
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('member_model');	
		$this->form_address = pc_base::load_model('form_address_model');
		$this->form_invoice = pc_base::load_model('form_invoice_model');
		$this->coursetype=6;
		$this->siteid = $this->get_siteid()?$this->get_siteid():1;
		$this->exam_course_db=pc_base::load_model('exam_course_model');
	}

/**
 * [addCourse]分配课程
 * @yl
 * @DateTime  2016-12-14T09:34:27+0800
 */
public function addCourse(){


			//获取知识点分类
	$parentid=$this->coursetype;
	$CATS=getcache('category_content_'.$this->siteid,'commons');
	foreach ($CATS as $k => $v) 
		{
			if($v[parentid]==$parentid){					
				$classinfo[$k]=$v;
				}				
		}

	if(isset($_POST['dosubmit'])) {

			$datas=array();
			$datas=new_addslashes($_POST['info']);
			$datas['inputtime']=SYS_TIME;
			$datas['addname']=param::get_cookie('admin_username');//分配人		
			$datas['status']=99;//定义时间 88失效，99正常
			$datas['endtime']=$_POST['endtime']?strtotime($_POST['endtime']):0;//0不限制	
			$courseid=$datas['courseid'];
			$uid=$datas['uid'];			
		

			if($datas['endtime']!=0){
				//判断当前时间
				if($datas['endtime']-$datas['inputtime']<24*3600){
					showmessage("课程到期时间少于1天","?m=member&c=course&a=addCourse&userid=".$uid);
				}
			}

			
			$info=$this->exam_course_db->get_one(array("uid"=>$uid,"courseid"=>$courseid));
			if($info){//若此课程已经有了，提示去更改

				if($info['status']==88){
					$this->exam_course_db->update($datas,array("uid"=>$uid,"courseid"=>$courseid));
					showmessage("课程已经重新激活","?m=member&c=course&a=addCourse&userid=".$uid);
				}else{
					showmessage("此课程已经添加，且还未过期","?m=member&c=course&a=addCourse&userid=".$uid);
				}

			}else{
				//初次添加当前状态时课程第一个阶段
				$datas['currentid']=0;
					$eid=$this->exam_course_db->insert($datas);
					if($eid){
						showmessage(L('add_success'), "?m=member&c=course&a=addCourse&userid=".$uid);
					}else{
						showmessage("添加失败",HTTP_REFERER);
					}
			}		
			//加载数据库
		

	}else{

			$show_header = $show_scroll = true;
			$siteid = get_siteid();
			$userid = isset($_GET['userid']) ? $_GET['userid'] : showmessage(L('illegal_parameters'), HTTP_REFERER);
			
			//会员组缓存
			$group_cache = getcache('grouplist', 'member');
			foreach($group_cache as $_key=>$_value) {
				$grouplist[$_key] = $_value['name'];
			}

			//会员模型缓存
			$member_model_cache = getcache('member_model', 'commons');
			foreach($member_model_cache as $_key=>$_value) {
				if($siteid == $_value['siteid']) {
					$modellist[$_key] = $_value['name'];
				}
			}
			
			//如果是超级管理员角色，显示所有用户，否则显示当前站点用户
			if($_SESSION['roleid'] == 1) {
				$where = array('userid'=>$userid);
			} else {
				$where = array('userid'=>$userid, 'siteid'=>$siteid);
			}

			$memberinfo = $this->db->get_one($where);
			
			if(empty($memberinfo)) {
				showmessage(L('user_not_exist').L('or').L('no_permission'), HTTP_REFERER);
			}		

		
			$modelid = isset($_GET['modelid']) ? $_GET['modelid'] : $memberinfo['modelid'];

			//获取对应会员模型课程列表
			

			include $this->admin_tpl('course_add');
		}

}




function courselist() {

		//获取会员id和用户名
		$uid=intval($_GET['userid'])?intval($_GET['userid']):showmessage('会员不存在',HTTP_REFERER);
		$memberinfo=get_memberinfo($uid);
		$where=" uid = ".$uid;		
		//课程信息		
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$clistinfo = $this->exam_course_db->listinfo($where, 'id DESC', $page, 20);
		$CATS=getcache('category_content_'.$this->siteid,'commons');
		foreach($clistinfo as $k=>$v){		

			$info=$CATS[$v['courseid']];
			if(empty($info)){
				$clistinfo[$k]['ksstatus']="课程已删除";
			}else{
				$clistinfo[$k]['cname']=$info['catname'];
			}
			$clistinfo[$k]['classid']=$CATS[$v['classid']][catname];
			$i=1;
			foreach ($CATS as $ks => $vs) {
				if($vs['parentid']==$v['courseid']){				
					if($v[currentid]==$i){
							$clistinfo[$k]['laspos']=$CATS[$ks]['catname'];	
							$clistinfo[$k]['lastimg']=$CATS[$CATS[$ks][parentid]]['icon'];	
					}
					$i++;

				}
			}	
		//检查是否到期,会员登录查看课程时也应该触发
			if($v['endtime']<=SYS_TIME&&$v['endtime']!=0){
				$this->exam_course_db->update(array('status'=>88),array('uid'=>$uid,'courseid'=>$v['courseid']));
				$clistinfo[$k]['status']=88;
			}
			
		}
		$pages = $this->exam_course_db->pages;		
		$big_menu = array('?m=member&c=member&a=manage&menuid=72', L('会员管理'));
		include $this->admin_tpl('course_list');
	}

/**
 *后台查看会员进度
 * 20161214
 */

  public function viewJie(){

  		//购买课程单号
  		$courseid=$_GET['courseid'];
  		$userid=$_GET['uid']?$_GET['uid']:showmessage('会员id错误');

  		$memberinfo = $this->db->get_one(array("userid"=>$userid));
  		//获取视频信息  		
  		$CATS=getcache('category_content_'.$this->siteid,'commons');
  		$jie_list=array();
  		foreach ($CATS as $key => $v) {
  			if($v[parentid]==$courseid){
  				$jie_list[$key]=$v;
  			}
  		}
		$exam_chapter_db=pc_base::load_model('exam_chapter_model');

		$chapter_infd=$exam_chapter_db->select(array('uid'=>$userid,'courseid'=>$courseid));

		/**
		 * 检查章节是否过期
		 */
		if($chapter_infd){		

			foreach ($chapter_infd as $k => $v) {
				if($v[endtime]-SYS_TIME<=0){
					$exam_chapter_db->update(array('status'=>-1),array('uid'=>$userid,'courseid'=>$courseid,"chapterid"=>$v[chapterid]));
				}
			}
			//重新获取，以数据库中信息为准
			$chapter_infd=$exam_chapter_db->select(array('uid'=>$userid,'courseid'=>$courseid));
			foreach ($jie_list as $bs => $bsv) {
				 foreach ($chapter_infd as $key => $value) {
					if($value[chapterid]==$bsv['catid']){
						$jie_list[$bs]['status']=$value['status'];
						$jie_list[$bs]['endtime']=$value['endtime'];
						$jie_list[$bs]['starttime']=$value['creattime'];
					}
				}
			}
		}
	
		include $this->admin_tpl('jie_list');
  }

/**
 * 分配时间权限
 */
public  function editChapter(){
	$CATS=getcache('category_content_'.$this->siteid,'commons');
	$exam_chapter_db=pc_base::load_model('exam_chapter_model');	
	//获取用户id;
	//获取章节id
	//查询数据，若有则更新，若没有则插入	
	if($_POST[dosubmit]){
		$info=$_POST['info'];
		$userid=$info['uid']?$info['uid']:0;
		$chapterid=$_POST[info]['chapterid'];
		$info['courseid']=$CATS[$chapterid][parentid];
		$info['endtime']=strtotime($_POST[info]['endtime']);		
	   $inf=$exam_chapter_db->get_one(array("uid"=>$userid,"chapterid"=>$chapterid));

		if($inf){
			$exam_chapter_db->update($info,array("uid"=>$userid,"chapterid"=>$chapterid));
		}			
	showmessage("修改成功","?m=member&c=course&a=viewJie&courseid=".$info['courseid']."&uid=".$userid,'','edit');
	}else{

	$chapterid=$_GET['chapterid']?intval($_GET['chapterid']):showmessage('章节信息不存在');
	$userid=$_GET['userid']?intval($_GET['userid']):showmessage("会员id错误",HTTP_REFERER);	
	$info=$exam_chapter_db->get_one(array("uid"=>$userid,"chapterid"=>$chapterid));	
	if($info){
		extract($info);
	}else{
			$init_data=array(
					"chapterid"=>$chapterid,
					'uid'=>$userid,
					'courseid'=>$CATS[$chapterid][parentid],
					'creattime'=>SYS_TIME,
					'endtime'=>0,
					'status'=>-1
				);
			$exam_chapter_db->insert($init_data);

		}		
	}

	include $this->admin_tpl('editChapter');
	
}

		
}
?>