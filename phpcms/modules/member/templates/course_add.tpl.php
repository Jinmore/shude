<?php defined('IN_ADMIN') or exit('No permission resources.');?>
<?php include $this->admin_tpl('header', 'admin');?>
<style type="text/css">
td.t_t{width: 80px}
.select1{width: auto;}

</style>
<div class="pad-lr-10">
<form name="myform" action="?m=member&c=course&a=addCourse" method="post" onsubmit="return checkdata();">
<div class="table-list">
<table width="100%" cellspacing="0">
	
<tbody>

	<tr>
		
		<td class="t_t">学员用户名</td>
		<td>
			<input  type="hidden" name="info[uid]" id="uid" value="<?php echo $memberinfo['userid']?>" />
			<?php echo $memberinfo['username']?>
		</td>

	</tr>

	<tr>
		
	<td class="t_t">选择课程</td>
		<td>			
			<select id="classtype" class="select1" name="info[classid]">
				<option value='-1' selected>选择课程</option>	
				<?php foreach ($classinfo as $key => $v){ ?>
					<option value="<?php echo $v['catid']?>" ><?php echo str_cut($v['catname'],'60',"...")?></option>
				<?php } ?>

			 </select>

			 <select id="coursetype" class="select1" name="info[courseid]">
				<option value='-1' selected>选择课程</option>			

			 </select>

			<!-- <input type="text" class="input-text" value="" id="cid" title="输入课程编号快速选择">-->
			<!-- <a onclick="quickchoose()" class="button" href="javascript:;" >确定</a> -->
		</td>

	</tr>
	
<!-- 	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			<textarea name="course" disabled="" style="height:30px;width:60%" id="confirmData"></textarea>
		</td>
	</tr> -->
	
<!-- 	<tr>
		<td>
			到期时间
		</td>
		<td>
				<?php echo form::date('endtime', $endtime)?>
		</td>
	</tr>
 -->
	

<input name="dosubmit" type="submit" id="dosubmit" value="<?php echo L('submit')?>" class="dialog">



</tbody>
</table>


</div>
</form>
</div>
<style type="text/css">
	.visable{display: none;}
	.visable p span,.visable p label{vertical-align: middle;}
	.visable p span{font-size: 14px;font-weight: bold;}
</style>
<script type="text/javascript">
<!--
function order_edit(id, name) {
	window.top.art.dialog({id:'order_edit'}).close();
	window.top.art.dialog({title:'修改订单《'+name+'》',id:'order_edit',iframe:'?m=member&c=order&a=edit&id='+id,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'order_edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'order_edit'}).close()});
}
function confirm_delete(){
	if(confirm('确认删除')) $('#myform').submit();
}
$(document).ready(function() {	

});

function quickchoose(){
	
	var cat=$("#classId option:selected").val();
	var content=$("#classId option:selected").text();
	/*待定*/
	$("#confirmData").click();
	console.log(cat+"----"+content);
}
function checkdata(){
	if($("#coursetype option:selected").val()=='-1'||$("#cname").val()==''){
		alert('请选择课程');
		return false;
	}

	if($("#classtype option:selected").val()=='-1'||$("#cname").val()==''){
		alert('请选择课程');
		return false;
	}
	return true;
}


	$(document).ready(function(){
		$("#classtype").change(function(event) {
			var pid=$(this).val();
			
			if(pid>0){
				$.ajax({
					url: '?m=exam&c=exam&a=public_ajax_getCa',
					type: 'post',
					dataType: 'json',
					data: {'pid': pid},
					success:function(data){
						var opt='<option value="0">请选择课程</option>	';
						if(data){
						
							$.each(data,function(index, item) {
								opt +="<option value='"+item.catid+"'>"+item.catname+"</option>";
							});

							$("#coursetype").html(opt)
						}
					}
				});
			
			}else{
				var opt='<option value="0">请选择课程</option>	';
				$("#coursetype").html(opt)
				$("#coursetype").change()
				// $("#coursechapter").change();
				//alert('请选择系列');

			}
		});

		$("#coursetype").change(function(event) {
			var pid=$(this).val();
			if(pid>0){
				// $.ajax({
				// 	url: '?m=exam&c=exam&a=public_ajax_getCa',
				// 	type: 'post',
				// 	dataType: 'json',
				// 	data: {'pid': pid},
				// 	success:function(data){
				// 		var opt='<option value="0">请选择章节</option>	';
				// 		if(data){
						
				// 			$.each(data,function(index, item) {
				// 				opt +="<option value='"+item.catid+"'>"+item.catname+"</option>";
				// 			});

				// 			$("#coursechapter").html(opt)
				// 		}
				// 	}
				// });
			
			}else{
				// var opt='<option value="0">请选择章节</option>	';
				// $("#coursechapter").html(opt)
				// $("#coursechapter").change();
				alert('请选择课程');

			}
		});

})



</script>
</body>
</html>