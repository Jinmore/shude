<?php defined('IN_ADMIN') or exit('No permission resources.');?>
<?php include $this->admin_tpl('header', 'admin');?>
<style type="text/css">
	.explain-col label{font-size: 16px;color:#000;padding-right: 10px;vertical-align: middle;}
</style>
<div class="pad-lr-10">
<form name="searchform" action="" method="get" >
<input type="hidden" value="member" name="m">
<input type="hidden" value="order" name="c">
<input type="hidden" value="lists" name="a">
<input type="hidden" value="879" name="menuid">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">
			用户名：<label><?php echo $memberinfo[username]?></label>，姓名为：<label><?php echo $memberinfo['nickname']?></label>的课程列表			
	</div>
		</td>
		</tr>
    </tbody>
</table>
</form>

<form name="myform" action="?m=member&c=course&a=cdelete" method="post" >
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
		
		
			<th align="left">阶段名称</th>
			<th align="left" width="12%">添加时间</th>		
			<th align="left">到期时间</th>		
			<th align="left">状态</th>
		
			<th align="center"><?php echo L('operation')?></th> 
		</tr>
	</thead>
<tbody>
<?php

if(is_array($jie_list)){
	
		foreach ($jie_list as $k => $v) {		# code...

?>
    <tr>
    	<td><?php echo $v[catname]?></td>
    	<?php if($v[endtime]) {    ?>	
    	<td><?php echo date("Y-m-d " ,$v[starttime])?></td>
		<td><?php echo date("Y-m-d" ,$v[endtime])?></td>
		<td><?php echo $v[status]==1?'已通过':($v[status]==0?"未通过":"已失效") ?></td>
		<?php }else {?>

		<td>未设置</td>
		<td>未设置</td>
		<td>未设置</td>
		<?php }?>
		<td>
			<a href="javascript:;" onclick="edit(<?php echo $memberinfo['userid']?>,'<?php echo $v[catname]?>',<?php echo $v[catid]?>)">修改</a>
		</td>
    </tr>
<?php
	}
}
?>
</tbody>
</table>

<div class="btn">
<label for="check_box"><?php echo L('select_all')?>/<?php echo L('cancel')?></label> <input type="submit" class="button" name="dosubmit" value="<?php echo L('delete')?>" onclick="return confirm('<?php echo L('sure_delete')?>')"/>
</div>

<div id="pages"><?php echo $pages?></div>
</div>
</form>
</div>

<script type="text/javascript">
function edit(userid, name,chapterid) {	
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'<?php echo L('edit')?>《'+name+'》',id:'edit',iframe:'?m=member&c=course&a=editChapter&userid='+userid+"&chapterid="+chapterid,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
<!--


function view_process(id,name){
		window.top.art.dialog({id:'order_edit'}).close();
		window.top.art.dialog({title:'查看进度《'+name+'》',id:'order_edit',iframe:'?m=member&c=course&a=view_process&id='+id,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'order_edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'order_edit'}).close()});
}

function confirm_delete(){
	if(confirm('确认删除')) $('#myform').submit();
}

//-->
</script>
</body>
</html>