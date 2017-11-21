<?php
  
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('foreground');
pc_base::load_sys_class('format', '', 0);
pc_base::load_sys_class('form', '', 0);
  class AJAXIndex extends foreground{

  	private $times_db;
	
	function __construct() {
		parent::__construct();
		$this->http_user_agent = $_SERVER['HTTP_USER_AGENT'];
	}

  	function public_Login()
  	{
  		$this->_session_start();
		//获取用户siteid
		$siteid = isset($_REQUEST['siteid']) && trim($_REQUEST['siteid']) ? intval($_REQUEST['siteid']) : 1;
		//定义站点id常量
		if (!defined('SITEID')) {
		   define('SITEID', $siteid);
		}
		
		if(isset($_POST['dosubmit']))
		{
			// if(empty($_SESSION['connectid'])) {
			// 	//判断验证码
			// 	$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) :$this->msg(1101,'请输入验证码');;
			// 	if ($_SESSION['code'] != strtolower($code)) {
			// 		$this->msg(1101,'验证码错误');
			// 	}
			// }
			$username = isset($_POST['username']) && is_username($_POST['username']) ? trim($_POST['username']) : $this->msg(1102,"用户名或密码不符合格式");
			$password = isset($_POST['password']) && trim($_POST['password']) ? trim($_POST['password']) :$this->msg(1102,"用户名或邮箱不符合格式");

			$cookietime = intval($_POST['cookietime'])?$_POST['cookietime']:3600*2;//1小时
			$synloginstr = ''; //同步登陆js代码
			
			if(pc_base::load_config('system', 'phpsso')) {
			
				$this->_init_phpsso();
				$status = $this->client->ps_member_login($username, $password);
				
				$memberinfo = unserialize($status);		
				
				if(isset($memberinfo['uid'])) {
			
					//查询帐号
					$r = $this->db->get_one(array('phpssouid'=>$memberinfo['uid']));
					if(!$r) {
						//插入会员详细信息，会员不存在 插入会员
						$info = array(
									'phpssouid'=>$memberinfo['uid'],
						 			'username'=>$memberinfo['username'],
						 			'password'=>$memberinfo['password'],
						 			'encrypt'=>$memberinfo['random'],
						 			'email'=>$memberinfo['email'],
						 			'regip'=>$memberinfo['regip'],
						 			'regdate'=>$memberinfo['regdate'],
						 			'lastip'=>$memberinfo['lastip'],
						 			'lastdate'=>$memberinfo['lastdate'],
						 			'groupid'=>$this->_get_usergroup_bypoint(),	//会员默认组
						 			'modelid'=>10,	//普通会员
									);
									
						//如果是connect用户
						if(!empty($_SESSION['connectid'])) {
							$userinfo['connectid'] = $_SESSION['connectid'];
						}
						if(!empty($_SESSION['from'])) {
							$userinfo['from'] = $_SESSION['from'];
						}
						unset($_SESSION['connectid'], $_SESSION['from']);
						
						$this->db->insert($info);
						unset($info);
						$r = $this->db->get_one(array('phpssouid'=>$memberinfo['uid']));
					}
					$password = $r['password'];
					$synloginstr = $this->client->ps_member_synlogin($r['phpssouid']);
 				} else {
					if($status == -1) {	//用户不存在						
						$this->msg(1103,L('user_not_exist'),'index.php?m=member&c=index&a=login');
					} elseif($status == -2) { //密码错误
						/*记录错误次数*/
						$this->times_db = pc_base::load_model('times_model');
						$rtime = $this->times_db->get_one(array('username'=>$username));
						if($rtime['times'] > 4) {
							// $minute = 60 - floor((SYS_TIME - $rtime['logintime']) / 60);
							// showmessage(, array('minute'=>$minute)));
							$this->msg(1104,'登录次数错误过多，账号已被锁定，请联系管理员重新开通','index.php?m=member&c=index&a=login');
						}
		
						$ip = ip();
						if($rtime && $rtime['times'] < 5) {
							$times = 5 - intval($rtime['times']);
							$this->times_db->update(array('ip'=>$ip, 'times'=>'+=1'), array('username'=>$username));
						} else {
							$this->times_db->insert(array('username'=>$username, 'ip'=>$ip, 'logintime'=>SYS_TIME, 'times'=>1));
							$times = 5;
						}
				
					$this->msg(1104,L('password_error')."还可以尝试".($times-1)."次",'index.php?m=member&c=index&a=login');
				
					$this->msg(1104,L('password_error'),'index.php?m=member&c=index&a=login');
						
					} else {
						showmessage(L('login_failure'), 'index.php?m=member&c=index&a=login');
					}
				}
				
			}else{

			}

			//如果用户被锁定
			if($r['islock']) {$this->msg(1105,L('user_is_lock'));}

			$userid = $r['userid'];
			$groupid = $r['groupid'];
			$username = $r['username'];
			$nickname = empty($r['nickname']) ? $username : $r['nickname'];
			
			$updatearr = array('lastip'=>ip(), 'lastdate'=>SYS_TIME);
			//vip过期，更新vip和会员组
			if($r['overduedate'] < SYS_TIME) {
				$updatearr['vip'] = 0;
			}			
			
			//检查视频状态 add 20170331
			$this->exam_course_db=pc_base::load_model('exam_course_model');
			//获取该会员的所有视频,并更新
			$course_list=$this->exam_course_db->select(array('uid'=>$userid));

			if($course_list){

				foreach ($course_list as $k => $v) {
					if($v['endtime']<=SYS_TIME&&$v['endtime']!=0){
							$this->exam_course_db->update(array('status'=>88),array('uid'=>$userid,'courseid'=>$v['courseid']));
					}
				}
			}
			
			//检查用户积分，更新新用户组，除去邮箱认证、禁止访问、游客组用户、vip用户，如果该用户组不允许自助升级则不进行该操作		
			if($r['point'] >= 0 && !in_array($r['groupid'], array('1', '7', '8')) && empty($r[vip])) {
				$grouplist = getcache('grouplist');
				if(!empty($grouplist[$r['groupid']]['allowupgrade'])) {	
					$check_groupid = $this->_get_usergroup_bypoint($r['point']);
	
					if($check_groupid != $r['groupid']) {
						$updatearr['groupid'] = $groupid = $check_groupid;
					}
				}
			}


				//如果是connect用户
			if(!empty($_SESSION['connectid'])) {
				$updatearr['connectid'] = $_SESSION['connectid'];
			}
			if(!empty($_SESSION['from'])) {
				$updatearr['from'] = $_SESSION['from'];
			}
			unset($_SESSION['connectid'], $_SESSION['from']);
						
			$this->db->update($updatearr, array('userid'=>$userid));
			
			if(!isset($cookietime)) {
				$get_cookietime = param::get_cookie('cookietime');
			}
			$_cookietime = $cookietime ? intval($cookietime) : ($get_cookietime ? $get_cookietime : 0);
			$cookietime = $_cookietime ? SYS_TIME + $_cookietime : 0;
			
			$phpcms_auth_key = md5(pc_base::load_config('system', 'auth_key').$this->http_user_agent);
			$phpcms_auth = sys_auth($userid."\t".$password, 'ENCODE', $phpcms_auth_key);
			
			// param::set_cookie('auth', $phpcms_auth, $cookietime);
			param::set_cookie('_wuserid', $userid, $cookietime);
			param::set_cookie('_username', $username, $cookietime);
			param::set_cookie('_groupid', $groupid, $cookietime);
			param::set_cookie('_nickname', $nickname, $cookietime);
			//param::set_cookie('cookietime', $_cookietime, $cookietime);			

			$forward = isset($_POST['forward']) && !empty($_POST['forward']) ? urldecode($_POST['forward']) : 'index.php?m=member&c=index';

			//验证用户密码,登录成功删除密码错误信息		
			$this->times_db = pc_base::load_model('times_model');
			$this->times_db->delete(array('username'=>$username));
			$this->msg(1,"用户名验证成功，请进行手机验证", "?m=member&c=AJAXIndex&a=public_checkmobile");
		}else{
			$this->msg(1101,"登陆失败");
		}  		
  	}

 public function public_checkmobile(){
 		$this->_session_start();
		$userid=param::get_cookie('_wuserid'); 		
 				
 		if($userid){
 			if($_POST[dosubmit])
 			{
 				$code=$_POST['code'];
 				$sms_report_db = pc_base::load_model('sms_report_model');
				$mobile_verify =$code;
			 	if(!$mobile_verify || preg_match("/[^a-z0-9]+/i",$mobile_verify)) exit();
 				$mobile=$_SESSION['mobile'];
 				$posttime = SYS_TIME-600;
				$where = "`mobile`='$mobile' AND `posttime`>'$posttime'";
				$r = $sms_report_db->get_one($where,'id,id_code','id DESC');
				if($r && $r['id_code']==$mobile_verify) {
					if($_GET['jscheck']!=1) {//验证通过后，将验证码置为空，防止重复利用！
						$sms_report_db->update(array('id_code'=>''),$where);
					}
					/**成功后写入cookie*/
					/**正式测试时放入上出注释*/
					$phpcms_auth_key = md5(pc_base::load_config('system', 'auth_key').$this->http_user_agent);
					$r = $this->db->get_one(array('phpssouid'=>$userid)); 					
					$phpcms_auth = sys_auth($userid."\t".$r['password'], 'ENCODE', $phpcms_auth_key);
					$cookietime=param::get_cookie('cookietime');	

					$userid=param::get_cookie("_wuserid");			
					param::set_cookie('auth', $phpcms_auth,SYS_TIME+3600*2);
					param::set_cookie('_userid', $userid, SYS_TIME+3600*2);

					$this->msg(1,"验证成功","/index.php?m=member&c=index&a=init");
				} else {
									
					/**正式测试时放入上出注释*//*,"?m=member&c=index&a=login"*/
					$this->msg(0,"验证失败");
				}

 				
 			}else{
 				$r = $this->db->get_one(array('phpssouid'=>$userid)); 			
 				$_SESSION['mobile']=$r['mobile'];
 				echo json_encode(array('code'=>1,'phone'=>substr($r['mobile'], 0,3)."****".substr($r['mobile'], -2)));
 			}
 		}else{

 			$this->msg(1101,"先输入用户名和密码",'index.php?m=member&c=index&a=login');
 		} 	
 		
 }

/*
*$code int 错误号
*$msg  string 提示消息
*$url  string 跳转地址
*$data  array 额外信息
*/
  	protected function msg($code=1,$msg='操作成功',$url,$data=array()){
  		$datas=array(
  				'code'=>$code,
  				'msg'=>$msg,
  				'redictto'=>$url,
  				'data'=>$data
  			);

  		echo json_encode($datas);
  		die;
  	}

	/**
	 *根据积分算出用户组
	 * @param $point int 积分数
	 */
	protected function _get_usergroup_bypoint($point=0) {
		$groupid = 2;
		if(empty($point)) {
			$member_setting = getcache('member_setting');
			$point = $member_setting['defualtpoint'] ? $member_setting['defualtpoint'] : 0;
		}
		$grouplist = getcache('grouplist');
		
		foreach ($grouplist as $k=>$v) {
			$grouppointlist[$k] = $v['point'];
		}
		arsort($grouppointlist);

		//如果超出用户组积分设置则为积分最高的用户组
		if($point > max($grouppointlist)) {
			$groupid = key($grouppointlist);
		} else {
			foreach ($grouppointlist as $k=>$v) {
				if($point >= $v) {
					$groupid = $tmp_k;
					break;
				}
				$tmp_k = $k;
			}
		}
		return $groupid;
	}
/**
 * 开启session
 *  
 */
  private function _session_start() {
		$session_storage = 'session_'.pc_base::load_config('system','session_storage');
		pc_base::load_sys_class($session_storage);
	}

	/**
	 * 初始化phpsso
	 * about phpsso, include client and client configure
	 * @return string phpsso_api_url phpsso地址
	 */
	private function _init_phpsso() {
		pc_base::load_app_class('client', '', 0);
		define('APPID', pc_base::load_config('system', 'phpsso_appid'));
		$phpsso_api_url = pc_base::load_config('system', 'phpsso_api_url');
		$phpsso_auth_key = pc_base::load_config('system', 'phpsso_auth_key');
		$this->client = new client($phpsso_api_url, $phpsso_auth_key);
		return $phpsso_api_url;
	}


	public function public_forgetmobile(){
		$this->_session_start();
		$code=$_POST['yzcode'];
		$step=$_POST['step']?intval($_POST['step']):1;
		if($_SESSION['code'] != strtolower($code)&&$step==1){

			echo json_encode(array('code' =>'-2' ,'msg'=>'验证码输入错误'));
		}else{
			//获取当前装填
			
			if($step==1){
				$mobile=$_POST['phone'];
				if(!preg_match('/^1([0-9]{10})$/',$mobile)){
					echo json_encode(array('code' =>'-3' ,'msg'=>'手机号不正确'));
					return ;
				}
				$memberinfo=$this->db->get_one(array('mobile'=>$mobile));
				if($memberinfo){
					$_SESSION['mobile']=$mobile;
					$_SESSION['username']=$memberinfo['username'];
					echo json_encode(array('code' =>'1' ,'msg'=>"用户验证成功",'step'=>$step+1));
				}else{
					echo json_encode(array('code' =>'0' ,'msg'=>"此手机号未注册",'step'=>$step+1));
				}
				

			}elseif($step==2){

				$code=$_POST['code'];
 				$sms_report_db = pc_base::load_model('sms_report_model');
				$mobile_verify =$code;
			 	if(!$mobile_verify || preg_match("/[^a-z0-9]+/i",$mobile_verify)) exit();
 				$mobile=$_SESSION['mobile'];
 				$posttime = SYS_TIME-600;
				$where = "`mobile`='$mobile' AND `posttime`>'$posttime'";
				$r = $sms_report_db->get_one($where,'id,id_code','id DESC');
				if($r &&$r['id_code']==$mobile_verify) {
					if($_GET['jscheck']!=1) {//验证通过后，将验证码置为空，防止重复利用！
						$sms_report_db->update(array('id_code'=>''),$where);
					}

					/**成功后写入cookie*/
					$username=$_SESSION['username'];
					$newpwds=$_REQUEST['newpassword'];



					$array = $this->db->get_one(array('mobile'=>$mobile,'username'=>$username));

					if(empty($array)){
						echo json_encode(array('code' =>'0' ,'msg'=>"修改失败",'step'=>$step+1));
					}else{
						$encrypt = random(6,"23456789abcdefghkmnrstwxyABCDEFGHKMNRSTWXY");
						$password = password($newpwds, $encrypt);
					
						$result = $this->db->update(array('password'=>$password,'encrypt'=>$encrypt),array('mobile'=>$mobile,'username'=>$username));
						if(pc_base::load_config('system', 'phpsso')) {
							//初始化phpsso
							$this->_init_phpsso();
							$this->client->ps_member_edit('', '', '', $newpwds, $array['phpssouid'], $encrypt);
						}
						echo json_encode(array('code' =>'1' ,'msg'=>"密码修改成功，您的新密码为：".$newpwds,'url'=>"?m=member&a=login",'step'=>'3'));
					}
				} else{
					echo json_encode(array('code' =>'0' ,'msg'=>"手机验证码错误",'step'=>$step+1));
				}


			}else{

				echo json_encode(array('code' =>'-1' ,'msg'=>'请输入可用的手机号'));
			}

		}
	}
	
  }