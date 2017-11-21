<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>

<div class="pad-lr-10">

<form name="form" action="?m=exam&c=exam&a=importQ" method="post" enctype="multipart/form-data">

<table width="100%" cellspacing="0" class="table_form">
    <tbody>

    	<tr>
    		<th>示例图:</th>
    		<td><a  href="statics/images/admin_img/impotr.png" target="_blank"><img src="statics/images/admin_img/impotr.png " height="150px"></a></td>
    	</tr>

		<tr>
		<th>
				<?php echo L('knows')?>：		
		</th>
		<td>	

		<select  id="classtype"  name="classid">
		<option value="0">请选择系列</option>	
		<?php 
		if($classinfo){
			foreach ($classinfo as $k => $v) {		
	
		?>
			<option value="<?php echo $k;?>" <?php if($classId==$k) echo 'selected';?>><?php echo $v['catname'];?></option>
		<?php }	}?>
		</select>	

		<select  id="coursetype" name="courseid">
		
		<option value="0" selected>请选择课程</option>
		<?php
		if($catinfo){
		  $i=0;
		  foreach($catinfo as $catid=>$va){
		  $i++;
		?>
		<option value="<?php echo $catid;?>" <?php if($catid==$courseid) echo "selected";?> ><?php echo $va['catname'];?></option>
		<?php }}?>
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

		
		<!-- 题量数<?php echo $total;?> -->
	
		</td>
		</tr>
		
		<tr>
		
		<th>选择文件:</th>	
		<td>
			
			<input type="file" name="importQ">
			<span >请选择excel格式</span>
		</td>	
		</tr>


		<tr >
			<th style="margin-top:10px">&nbsp;</th>

		<input type="hidden" name="dosubmit" value="1">
			<td style="margin-top:10px"><input type="submit" name="search" class="button" value="<?php echo L('submit')?>" /></td>
		</tr>
    </tbody>
</table>
</form>
<?php if($retruninfo){?>

	<div class="resturn">
	<ul>
		<?php
		foreach ($retruninfo as $k => $v) {
			echo "<li>{$k} -----{$v['question']}-------{$v['msg']}  </li>";
		}
		?>

		</ul>
	</div>


<?php }?>
	



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

		// $("#coursechapter").change(function(event) {
		// 	var ct=$("#coursetype").children('option:selected').val();
		// 	var cp=$(this).val();

		// 	var knowsid='{"ct":'+ct+',"cp":'+cp+"}";
		// 	$("#knowsid").val(cp);
		// 	$("#courseid").val(ct);
		// 	console.log($("#knowsid").val());
		// });

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
</script>
</body>
</html>
