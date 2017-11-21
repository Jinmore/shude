<?php
/**
 * 会员前台管理中心、账号管理、收藏操作类
 */

defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('format', '', 0);

pc_base::load_app_class('quanxian');
$session_storage = 'session_'.pc_base::load_config('system','session_storage');
pc_base::load_sys_class($session_storage);
class index extends quanxian{

	private $times_db;
	
	function __construct() {
		parent::__construct();
		$this->_userid = param::get_cookie('_userid');
		$this->_username = param::get_cookie('_username');
		$this->_groupid = param::get_cookie('_groupid');
		$siteid=$siteid?$siteid:1;
		$CATS=getcache('category_content_'.$siteid,'commons');
	}

	public function init() {	
			showmessage("迷路了，回首页看看吧",'?m=content&c=index');
	}
	


	function exam_rules(){	
		$knowsid=intval($_GET['chapterid']);
		$return=$this->checkClass();
		$return_arr=json_decode($return,true);	
		if($return_arr['code']!='1'){
			echo $return;
		}else{
			echo json_encode(array('code'=>1,'msg'=>'?m=exam&a=rules&chapterid='.$knowsid));
		}			
	}
	/*获取考题信息*/
	function gettheme()
	{
		session_start();	
		$sign=array('1'=>'A','2'=>'B','3'=>'C',"4"=>'D','5'=>'E','6'=>'F');
		$return=$this->checkClass();
		$return_arr=json_decode($return,true);		
		if($return_arr['code']!='1'){
			showmessage($return_arr['msg'],$return_arr['url']);
		}		
		$knowsid=intval($_GET['chapterid']);
		//获取缓存信息
		if(isset($_GET['siteid'])) {
			$siteid = intval($_GET['siteid']);
		} else {
			$siteid = 1;
		}
		$siteid = $GLOBALS['siteid'] = max($siteid,1);
		$SEO = seo($siteid);
		$sitelist  = getcache('sitelist','commons');
		$default_style = $sitelist[$siteid]['default_style'];
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		$courseid=$CATEGORYS[$knowsid]['parentid'];
		$_SESSION['knowsid']=$knowsid;
		$_SESSION['courseid']=$courseid;
		
		if($_POST['dosubmit']&&$_POST['timesamp']==$_SESSION['timesamp']){
			//var_dump($_POST);
		}else{
			//加载考题数据库
			$question_db=pc_base::load_model('exam_questions_model');
			$list_info =$question_db->select(array('knowsid'=>$knowsid),"*",15,"RAND()");
			$total=count($list_info);//获取总数
			if($total<=0){
				showmessage("该章节下，暂无考题",'?m=content&c=index&a=lists&catid='.$courseid);
			}
			$arr=array();
			foreach ($list_info as $k=> $v) {
				$arr[]=array(
					'id'=> $v['id'] ,
					'question' =>$v['question'], 
	        		'answers' => string2array($v['selecte']) 
				);
				$themeid[]=$v['id'];
			}

			
		}
		$timesamp=$_SESSION['timesamp']=md5(SYS_TIME);
		$json=json_encode($arr);

		if(isMobile()){
			include template("mobile","exam");
		}else{
			include template("content","exam");
		}
		
		
	}
	/**
	 * 考试提交后处理
	 */
	function checkAn(){
		$an=$_GET['an'];
		$temp=$_POST['timesamp'];
		//定义答案序列
		$sign=array('1'=>'A','2'=>'B','3'=>'C',"4"=>'D','5'=>'E','6'=>'F');
		$ans=array_filter(explode("|", $an));//将答案转换成数组，并去除空值
		$question_db=pc_base::load_model('exam_questions_model');
		$q_right = 0; //答对的题数 
		$arr=array();
		//echo $an."<br/>";	
	
		foreach ($ans as $k => $v) {
			$temp=explode("###",$v);
			
			if(is_array($temp)){
				$r=$question_db->get_one(array('id'=>$temp[0]));
				if($r){		
					if($r['correct']==$sign[$temp[1]]){
						 $arr['res'][] = 1; 
	       				 $q_right += 1; 
					}else{
						 $arr['res'][] = 0;
					}
				}else{
					  $arr['res'][] = 0;
					 }
			}else{
				$arr['res'][] = 0;
				//echo "xxx";
			}		
		}
		$arr['score']=$q_right;
		if($q_right==count($ans)){
			$arr['msg']="恭喜您通过了考试";
		}else{
			$arr['msg']="很遗憾，您未通过考试";
		}
		echo json_encode($arr);
		$uid=param::get_cookie('_userid');
		/*
		*进行记录炒作
		 */
		$knowsid=$_SESSION['knowsid']?intval($_SESSION['knowsid']):0;
		$courseid=$_SESSION['courseid']?intval($_SESSION['courseid']):0;		
		$exam_record=pc_base::load_model('exam_record_model');

		$data=array(
			'knowsid'=>$knowsid,
			'courseid'=>$courseid,
			'uid'=>$uid,
			'endtime'=>SYS_TIME,
			'answer'=>safe_replace($an),
			'ip'=>ip(),
			'status'=>$q_right,
			);
		$exam_record->insert($data);
		if($q_right==count($ans)){
			$exam_course=pc_base::load_model('exam_course_model');
			$c_info=$exam_course->get_one(array('courseid'=>$courseid,'uid'=>$uid));
			if($c_info){
				$nu=(int)$c_info['currentid']+1;
				$CATEGORYS = getcache('category_content_1','commons');
				$arrchildid=trim(str_replace($courseid, "", $CATEGORYS[$courseid]['arrchildid']),",");
				$arr=explode(",",$arrchildid);

				if($nu>=count($arr)) $nu=count($arr);//最大值为当前的阶段数
				$exam_course->update(array('currentid'=>$nu),array('courseid'=>$courseid,'uid'=>$uid));
				$exam_chapter_db=pc_base::load_model('exam_chapter_model');
				$exam_chapter_db->update(array('status'=>1),array('uid'=>$uid,'courseid'=>$courseid,'chapterid'=>$knowsid));

			}

			//更新单个章节
		}

	}

	public function rules(){
		$knowsid=intval($_GET['chapterid']);
		if(isMobile()){
			include template("mobile","exam_rules");
		}else{
			include template("content","exam_rules");
		}
		
	}
	function noRand($begin=0,$end=20,$limit=5){ 
		 $rand_array=range($begin,$end); 
		 shuffle($rand_array);//调用现成的数组随机排列函数 
		return array_slice($rand_array,0,$limit);//截取前$limit个 
		} 
}
?>