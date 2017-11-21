<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form','',0);
pc_base::load_sys_class('format','',0);
class exam extends admin
{
	private $db, $tablename, $m_db, $cdb;
	public function __construct() {
		parent::__construct();
		$this->db=pc_base::load_model("exam_questions_model");
		$this->cdb=pc_base::load_model('content_model');
		$this->siteid = $this->get_siteid()?$this->get_siteid():1;
		//$parentid为内容模块中课程栏目id
		$this->coursetype=6;
	}
	
	function question()
	{
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;

		$pagesize=12;
		$offset = $pagesize*($page-1);
		//获取知识点分类
		$parentid=$this->coursetype;
		$CATS=getcache('category_content_'.$this->siteid,'commons');
		foreach ($CATS as $k => $v) 
		{
			if($v[parentid]==$parentid){					
					$classinfo[$k]=$v;
				}				
		}

		$where ='';
		if($_GET['keyword']){
			$keyword=safe_replace($_GET['keyword']);
			$where .= " and question LIKE '%".$keyword."%' ";
		}

		if($_GET['classid']){
			$classid=safe_replace($_GET['classid']);
			$where .=" and class =".$classid;

			foreach ($CATS as $k => $v) {
				if($v[parentid]==$classid){					
					$catinfo[$k]=$v;
				}				
			}
		}


		if($_GET['knowsid']){
			$knowsid=intval($_GET['knowsid']);
			$where .=" and knowsid =".$knowsid;


		}
		if($_GET['courseid']){
			$courseid=intval($_GET['courseid']);
			$where .=" and courseid =".$courseid;
				foreach ($CATS as $k => $v) {
				if($v[parentid]==$courseid){					
					$subinfo[$k]=$v;
				}				
			}
		}		
		$sql2="select count(*) as num from ld_exam_questions where status=99 ".$where;
		$this->db->query($sql2);
		$total = $this->db->fetch_array();
		$total = $total[0]['num'];		
		if($total!=0){
			$sql="select * from ld_exam_questions where status=99";
			$sql .= $where;
			$order = 'courseid desc,id DESC';	
			$sql .= ' ORDER BY '.$order;
			$sql .= " LIMIT $offset,$pagesize";
			$this->db->query($sql);
			$infos = $this->db->fetch_array();		
			$pages = pages($total, $page, $pagesize);
		}

		$CATS=getcache('category_content_'.$this->siteid,'commons');		
		foreach ($infos as $k => $va) {
			$infos[$k]['selecte']=string2array($va['selecte']);	
			$infos[$k]['class']=$CATS[$va['class']][catname];		
			$infos[$k]['course']=$CATS[$va['courseid']][catname];
			$infos[$k]['chapter']=$CATS[$va['knowsid']][catname];
		}
		
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=exam&c=exam&a=add\', title:\''.L('add_q').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('add_q'));
		include $this->admin_tpl('list');
	}

	function add()
	{
		if($_POST[dosubmit]){

			$info=$_POST['exam'];

			/*选项*/
			$data=array();
			$data=$info;
			if(!$data['knowsid']||!$data['courseid']||!$data['class']) showmessage(L('请选择知识点'), '?m=exam&c=exam&a=question', '', 'add');		
			
			$data['selecte']=array2string($info['selecte']);	
			
			$data['inputtime']=SYS_TIME;
			$data['type']=1;
			$data['status']=99;

			$id=$this->db->insert($data);
			if($id){
				showmessage(L('add_success'), '?m=exam&c=exam&a=question', '', 'add');
			}

		}else{

			//获取知识点分类
			$parentid=$this->coursetype;

			$CATS=getcache('category_content_'.$this->siteid,'commons');
			foreach ($CATS as $k => $v) {
				if($v[parentid]==$parentid){					
					$classinfo[$k]=$v;
				}				
			}			
			include $this->admin_tpl('add');
		}
	}

	/**
	 * 修改
	 */

	function edit(){

		if($_POST['dosubmit']){

			$examid=intval($_POST['examid']);
			$info=$this->db->get_one(array('id'=>$examid));
			if($info){
				$info=$_POST['exam'];
				$data=new_stripslashes($info);
				$data['question']=$info['question'];
				$data['selecte']=array2string($info['selecte']);
				$bool=$this->db->update($data,array('id'=>$examid));
				if($bool){					

					showmessage(L('修改成功'), '?m=exam&c=exam&a=question', '', 'edit');
				}else{
				showmessage(L('修改失败'), '?m=exam&c=exam&a=question', '', 'edit');

			}
			}else{
				showmessage(L('修改失败'), '?m=exam&c=exam&a=question', '', 'edit');

			}	

		}else{

			$examid=$_GET['id']?intval($_GET['id']):showmessage(L('修改不存在'), '?m=exam&c=exam&a=question', '', 'edit');
			$info=$this->db->get_one(array('id'=>$examid));
			//var_dump($info);
			extract($info);
			//获取知识点分类
			$parentid=$this->coursetype                ;
			$CATS=getcache('category_content_'.$this->siteid,'commons');
			foreach ($CATS as $k => $v) {
				if($v[parentid]==$parentid){					
					$classinfo[$k]=$v;
				}	

				if($v[parentid]==$class){					
					$catinfo[$k]=$v;
				}

				if($v['parentid']==$courseid)	{
					$subinfo[$k]=$v;
				}		
			}
			$selected=$info[selecte];
			if(is_array($selected)){
			$list_select=$selected;
			}else{
				//echo $selected;
				$list_select=string2array($selected);
			}
			
			
			include $this->admin_tpl('edit');
		}

	}


	/**
	 * 删除
	 */
	
	public function delete() {
  		if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_POST['id']) || empty($_POST['id']))) {
			showmessage(L('illegal_parameters'), HTTP_REFERER);
		} else {
			if(is_array($_POST['id'])){
				foreach($_POST['id'] as $linkid_arr) {
 					//批量删除友情链接
					$this->db->delete(array('id'=>$linkid_arr));
					//更新附件状态
				
				}
				showmessage(L('operation_success'),'?m=exam&c=exam&a=question');
			}else{
				$examid = intval($_GET['id']);
				if($examid < 1) return false;
				//删除友情链接
				$result = $this->db->delete(array('id'=>$examid));
			
				if($result){
					showmessage(L('operation_success'),'?m=exam&c=exam&a=question');
				}else {
					showmessage(L("operation_failure"),'?m=exam&c=exam&a=question');
				}
			}
			showmessage(L('operation_success'), HTTP_REFERER);
		}
	}

	function public_ajax_getCa(){
		$pid=$_POST['pid']?intval($_POST['pid']):0;

		$catinfo=array();
		if($pid>0){
			$CATS=getcache('category_content_1','commons');
			foreach ($CATS as $k => $v) {
				if($v[parentid]==$pid){					
					$catinfo[$k]=$v;
				}
				
			}
		}

		echo  json_encode($catinfo);
	}

	/**
	 * 说明:异步更新排序 
	 * @param  $optionid
	 */
	public function listorder_up() {
		$result = $this->db->update(array('listorder'=>'+=1'),array('id'=>$_GET['id']));
		if($result){
			echo 1;
		} else {
			echo 0;
		}
	}
	
	//更新排序
 	public function listorder() {
		if(isset($_POST['dosubmit'])) {
			foreach($_POST['listorders'] as $examid => $listorder) {
				$examid = intval($examid);
				$this->db->update(array('listorder'=>$listorder),array('id'=>$examid));
			}
			showmessage(L('operation_success'),HTTP_REFERER);
		} 
	}
	

	/**
	 * 试题导入
	 */

	function importQ(){
		$pc_hash = $_SESSION['pc_hash'];

		$parentid=$this->coursetype;
		//知识点分类
		
		$CATS=getcache('category_content_'.$this->siteid,'commons');
		foreach ($CATS as $k => $v) {
				if($v[parentid]==$parentid){					
					$classinfo[$k]=$v;
				}	
		}
			//渲染上传界面
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=exam&c=exam&a=add\', title:\''.L('add_q').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('add_q'));

		if($_POST['dosubmit'])
		{
			//提交后处理
			$classId=isset($_POST['classid'])&&!empty($_POST['classid'])?intval($_POST['classid']):showmessage(L('choose').L('class'));
			//获取课程分类
			$courseid=isset($_POST['courseid'])&&!empty($_POST['courseid'])?intval($_POST['courseid']):showmessage(L('choose').L('course'));
			
			//获取章节分类
			$knowsid=isset($_POST['knowsid'])&&!empty($_POST['knowsid'])?intval($_POST['knowsid']):showmessage(L('choose').L('chapter'));
			
			$file = $_FILES['importQ']['name'];
			$filetempname = $_FILES['importQ']['tmp_name'];

			//$msg = uploadFile($filename,$tmp_name);

			//自己设置的上传文件存放路径

			$filePath = 'uploadfile/question/';

			$str = "";   			
			//注意设置时区
			$time=date("Ymd_His");//去当前上传的时间 
			//获取上传文件的扩展名
			$extend=strrchr ($file,'.');
			if($extend!='.xls') showmessage(L('文件格式不对'),'?m=exam&c=exam&a=importQ');
			//上传后的文件名

			$name=$time.$extend;

			$uploadfile=$filePath.$name;//上传后的文件名地址 

			//move_uploaded_file() 函数将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。

			$result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下

			//如果上传文件成功，就执行导入excel操作

			if($result){
					/*将excel内容转换成数组*/
					$ImportExcel=pc_base::load_app_class('ImportExcel');
					$res=$ImportExcel->read($uploadfile);
								
					if($res&&is_array($res)){

						foreach ($res as $k => $v) {
							$datas = array();
							$datas['question']=new_addslashes(safe_replace($v[0]));
							if(!$datas['question']) continue;
							$selected=explode("###",trim($v[1]));
							$selecte=array();
							foreach($selected as $k=>$vs){
								$selecte[]=$vs;
							}
							
							$datas['selecte']=array2string($selecte);
							
							$datas['correct']=$v[2];
							$datas['type']=1;
							$datas['inputtime']=SYS_TIME;
							$datas['status']=99;

							$datas['class']=$classId;//
							$datas['courseid']=$courseid;//导入表格中是否需要填写章节？？
							$datas['knowsid']=$knowsid;							
							$examid=$this->db->insert($datas);							
							if($examid){//若成功记录成功id
								$succ[$k]['examid']=$examid;
								$succ[$k]['question']=$v[0];
								$succ[$k]['msg']="导入成功";
							}else{//失败记入失败记录
								$succ[$k]['question']=$v[0];
								$succ[$k]['msg']="导入失败";
							}
						}						

					}
					
			$retruninfo=$succ;				
			unlink($uploadfile); //删除上传的excel文件
			showmessage(L('导入成功'),'?m=exam&c=exam&a=importQ'.'&pc_hash='.$pc_hash);
			}else{
				showmessage(L('导入失败'),'?m=exam&c=exam&a=importQ'.'&pc_hash='.$pc_hash);
			}

		}else{		

	
		include $this->admin_tpl('importQ');
		}
	}
}