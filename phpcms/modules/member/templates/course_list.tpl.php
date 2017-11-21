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
				<!-- 订单编号：<input name="keyword" type="text" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>" class="input-text" />
				订单状态：<select name="order_status">
					<option value="" <?php if($order_status==''){?> selected="selected"<?php } ?>>全部</option>
					<option value="4" <?php if($order_status==4){?> selected="selected"<?php } ?>>待付款</option>
					<option value="1" <?php if($order_status==1){?> selected="selected"<?php } ?>>已付款</option>
					<option value="3" <?php if($order_status==3){?> selected="selected"<?php } ?>>已取消</option>
					</select>
				　<input type="submit" name="search" class="button" value=" <?php echo L('search')?> " /> -->
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
			<th  align="left" width="20"><input type="checkbox" value="" id="check_box" onclick="selectall('ids[]');"></th>
			<th align="left">序号</th>
			<th align="left">系列</th>
			<th align="left">课程名称</th>
			<th align="left" width="12%">添加时间</th>		
		<!-- 	<th align="left">到期时间</th> -->
		<!-- 	<th align="left">到期状态</th> -->
			<th align="left">阶段管理</th>
			<th align="left">学习阶段</th>
		
			<!-- <th align="center"><?php echo L('operation')?></th> -->
		</tr>
	</thead>
<tbody>
<?php
	if(is_array($clistinfo)){
	
		foreach ($clistinfo as $k => $v) {		# code...

?>
    <tr>
		<td align="left">
		<input type="checkbox" value="<?php echo $v['id']?>" name="ids[]">
		<input type="hidden" value="<?php echo $uid?>" name="uid">
		</td>
		<td align="left"><?php echo $v['id']?></td>
		<td align="left"><?php echo $v['classid']?></td>

		<td align="left"><?php echo $v['cname']?> <?php if($v[ksstatus]) echo "<font color='red'>【".$v[ksstatus]."】</font>";?></td>
		<td align="left"><?php echo date("Y-m-d ",$v['inputtime'])?></td>
	<!-- 	<td align="left"><?php echo $v[endtime]!=0?date("Y-m-d ",$v['endtime']):'永久有效'?></td>
		<td align="left"><?php echo $v['status']==88?"<font color='red'>已到期</font>":"<font color='green'>正常</font>";?></td>  -->
		
		<td align="left"><a href="/index.php?m=member&c=course&a=viewJie&uid=<?php echo $memberinfo[userid]?>&courseid=<?php echo $v[courseid]?>&pc_hasc=<?$_SESSION['pc_hash']?>">查看阶段</a></td>
		<td align="left"><?php if($v[currentid]>0){ echo $v['laspos']?> 
		<i style="background:url(<?php echo $v['lastimg']?>) no-repeat center;display:inline-block;text-align:center;font-style:normal;line-height:32px;width:32px;height:32px"><?php echo $v[currentid]?></i>
		<?php }?>
		</td>		
		
	
    </tr>
<?php
	}
}
?>
</tbody>
</table>

<div class="btn">
<!-- <label for="check_box"><?php echo L('select_all')?>/<?php echo L('cancel')?></label> <input type="submit" class="button" name="dosubmit" value="<?php echo L('delete')?>" onclick="return confirm('<?php echo L('sure_delete')?>')"/>
</div> -->

<div id="pages"><?php echo $pages?></div>
</div>
</form>
</div>


<script type="text/javascript">
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