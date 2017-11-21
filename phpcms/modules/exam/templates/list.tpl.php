<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>
<style type="text/css">
	td.img img{width: 32px;height: 32px}

</style>
<div class="pad-lr-10">

<form name="searchform" action="" method="get" >
<input type="hidden" value="exam" name="m">
<input type="hidden" value="exam" name="c">
<input type="hidden" value="question" name="a">
<input type="hidden" value="1604" name="menuid">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">			
	
		<?php echo L('knows')?>：


		<select  id="classtype"  name="classid">
		<option value="0">请选择系列</option>	
		<?php 
		if($classinfo){
			foreach ($classinfo as $k => $v) {		
	
		?>
			<option value="<?php echo $k;?>" <?php if($classid==$k) echo 'selected';?>><?php echo $v['catname'];?></option>
		<?php }	}?>
		</select>	

		
		<select  id="coursetype" name="courseid">
		<option value="0">请选择系列</option>
		<?php
		  $i=0;
		  foreach($catinfo as $catid=>$va){
		  $i++;
		?>
		<option value="<?php echo $catid;?>" <?php if($catid==$courseid) echo "selected";?> ><?php echo $va['catname'];?></option>
		<?php }?>
		</select>		
		<select  id="coursechapter"  name="knowsid">
		<option value="0">请选择章节</option>	
		<?php 
		if($subinfo){
			foreach ($subinfo as $k => $v) {		
	
		?>
			<option value="<?php echo $k;?>" <?php if($knowsid==$k) echo 'selected';?>><?php echo $v['catname'];?></option>
		<?php }	}?>
		</select>	
		&nbsp;&nbsp;&nbsp;
		<?php echo L('question_name')?>：		
		<input name="keyword" type="text" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>" class="input-text" />
		<input type="submit" name="search" class="button" value="<?php echo L('search')?>" />
		
		<!-- 题量数<?php echo $total;?> -->
	</div>
		</td>


		</tr>
    </tbody>
</table>
</form>



<form name="myform" id="myform" action="?m=exam&c=exam&a=listorder" method="post" >
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
		<!-- 	<th width="35" align="center"><?php echo L('listorder')?></th> -->
			<th><?php echo L('question_name')?></th>
			<th width="8%" align="center"><?php echo L('系列')?></th>
			<th width="15%" align="center"><?php echo L('course')?></th>
			<th width="20%" align="center"><?php echo L('chapter')?></th>
			
			<th width="8%" align="center"><?php echo L('inputtime')?></th>
			<th width="12%" align="center"><?php echo L('operations_manage')?></th>
		</tr>
	</thead>
<tbody>
<?php
if(is_array($infos)){
	foreach($infos as $info){
		?>
	<tr>
		<td align="center" width="35"><input type="checkbox" name="id[]" value="<?php echo $info['id']?>"></td>
	<!-- 	<td align="center" width="35"><input name='listorders[<?php echo $info['linkid']?>]' type='text' size='3' value='<?php echo $info['listorder']?>' class="input-text-c"></td> -->
		<td class="img"><?php echo $info['question']?> </td>
		
			<td align="center" width="12%"><?php echo $info['class']?></td>
		<td align="center" width="12%"><?php echo $info['course']?></td>
		<td align="center" width="10%"><?php echo $info['chapter'];?></td>

		<td align="center" width="10%"><?php echo date("Y-m-d H:i:s",$info['inputtime'])?></td>
		<td align="center" width="12%"><a href="###"
			onclick="edit(<?php echo $info['id']?>, '<?php echo new_addslashes(new_html_special_chars(str_replace(array(" ","　","\t","\n","\r"),array("","","","",""), trim(strip_tags($info['question'])))))?>')"
			title="<?php echo L('edit')?>"><?php echo L('edit')?></a> |  <a
			href='?m=exam&c=exam&a=delete&id=<?php echo $info['id']?>'
			onClick="return confirm('<?php echo L('confirm', array('message' => new_addslashes(new_html_special_chars($info['name']))))?>')"><?php echo L('delete')?></a> 
		</td>
	</tr>
	<?php
	}
}
?>
</tbody>
</table>
</div>
<div class="btn"> 
<!-- <input name="dosubmit" type="submit" class="button"
	value="<?php echo L('listorder')?>"> -->&nbsp;&nbsp;<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=exam&c=exam&a=delete'" value="<?php echo L('delete')?>"/></div>
<div id="pages"><?php echo $pages?></div>
</form>
</div>
<script type="text/javascript">
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
							$("#coursetype").html(createOption(data,"请选择课程"))
					}
				});
			
			}else{
				var opt='<option value="0">请选择课程</option>	';
				$("#coursetype").html(opt)
				$("#coursetype").change();
				alert('请选择系列');
			}
		});

		$("#coursetype").change(function(event) {
			var pid=$(this).val();			
			if(pid>0){
				$.ajax({
					url: '?m=exam&c=exam&a=public_ajax_getCa',
					type: 'post',
					dataType: 'json',
					data: {'pid': pid},
					success:function(data){
							$("#coursechapter").html(createOption(data,"请选择阶段"))
					}
				});
			
			}else{
				var opt='<option value="0">请选择阶段</option>	';
				$("#coursechapter").html(opt)
				$("#coursechapter").change();
				//alert('请选择课程');
			}
		});

	});

function createOption(data,optionVal){
	var opt='<option value="0">'+optionVal+'</option>	';
	if(data){
						
		$.each(data,function(index, item) {
			opt +="<option value='"+item.catid+"'>"+item.catname+"</option>";
		});							
		}
	return opt;	
}



function edit(id, name) {
	name=$.trim(name);
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'<?php echo L('edit')?> '+name+' ',id:'edit',iframe:'?m=exam&c=exam&a=edit&id='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
function checkuid() {
	var ids='';
	$("input[name='linkid[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});
	if(ids=='') {
		window.top.art.dialog({content:"<?php echo L('before_select_operations')?>",lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	} else {
		myform.submit();
	}
}
//向下移动
function listorder_up(id) {
	$.get('?m=link&c=link&a=listorder_up&linkid='+id,null,function (msg) { 
	if (msg==1) { 
	//$("div [id=\'option"+id+"\']").remove(); 
		alert('<?php echo L('move_success')?>');
	} else {
	alert(msg); 
	} 
	}); 
} 
</script>
</body>
</html>
