<?php

class quanxian {
	public $db, $memberinfo;
	private $_member_modelinfo;

	public function __construct() {
		self::check_ip();
		$this->db = pc_base::load_model('member_model');

	}


	/**
	 *
	 * IP禁止判断 ...
	 */
	final private function check_ip(){
		$this->ipbanned = pc_base::load_model('ipbanned_model');
		$this->ipbanned->check_ip();
 	}


  public function checkClass(){
  		if(isset($_GET['siteid'])) {
			$siteid = intval($_GET['siteid']);
		} else {
			$siteid = 1;
		}
		$siteid = $GLOBALS['siteid'] = max($siteid,1);
  		$CATEGORYS = getcache('category_content_'.$siteid,'commons');

  		$knowsid=$_REQUEST['chapterid']?$_REQUEST['chapterid']:$_REQUEST['catid'];

		$courseid=$CATEGORYS[$knowsid]['parentid'];

		/*判断此课程是否有权限*/
		$_userid=param::get_cookie("_userid");

		if(!$_userid)  {

			return json_encode(array('code'=>'-1','msg'=>'请先登陆','url'=>'?m=member&a=login'));
		}
		$this->exam_course_db=pc_base::load_model('exam_course_model');
		//获取该会员的所有视频,并更新
		$result=$this->exam_course_db->get_one(array('courseid'=>$courseid,'uid'=>$_userid,'status'=>99));

		$jieduan='';
		//获取所子栏目,获取当前的学习阶段
		$arrchildid=trim(str_replace($courseid, "", $CATEGORYS[$courseid]['arrchildid']),",");
		$arr=explode(",",$arrchildid);
		foreach ($arr as $key => $v) {
			if($v==$knowsid){
				$jieduan=$key+1;
			}
		}

		if($result){
			if($result['currentid']>=$jieduan||($result['currentid']+1)!=$jieduan){
				$returnStr=array('code'=>'-3','msg'=>'当前阶段已经通过或还未通过上一阶段');

				return json_encode($returnStr);
			}else{
				//查看当前日期时间,
				if($_REQUEST['m']!='exam'){
					//是否过期
					$exam_chapter_db=pc_base::load_model('exam_chapter_model');
					$chapter_infd=$exam_chapter_db->get_one(array('uid'=>$_userid,'courseid'=>$courseid,"chapterid"=>$knowsid));
						if($chapter_infd&&$chapter_infd['endtime']>SYS_TIME){
						$returnStr=array('code'=>'1','msg'=>'验证成功');

						}	else{
						$returnStr=array('code'=>'-3','msg'=>'课程已到期');

						}

				}else{
					//
				$returnStr=array('code'=>'1','msg'=>'验证成功');
				}

			}
		}else{
			$returnStr=array('code'=>'-2','msg'=>'此课程没有权限');

			return json_encode($returnStr);;
		}


		/**若是考试，还需检查考试次数*/
		$moudle=$_REQUEST['m'];

		if($moudle=='exam'){

			$exam_record=pc_base::load_model('exam_record_model');
			// 获取当天0分0秒时间
			$date =  strtotime(date('Ymd 00:00:00',time()));
			$where="uid=$_userid and courseid=$courseid and knowsid=$knowsid and endtime > $date ";
			$records= $exam_record->select($where);
			// $time = strtotime(date('Ymd')) + 86400;
			$total=count($records);
			if($total>=2){//若超过两次，
				$returnStr=array('code'=>'-4','msg'=>'当天考试已经达到两次','url'=>'?m=content&c=index&a=lists&catid='.$courseid);
			}
		}
		return json_encode($returnStr);
  }

}
