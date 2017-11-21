<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript" src="/statics/js/formvalidator.js"></script>
<script type="text/javascript" src="/statics/js/formvalidatorregex.js"></script>
<script type="text/javascript"><!--
	$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
	$("#content").formValidator({onshow:"<?php echo L("input").L('question_name')?>",onfocus:"<?php echo L("input").L('question_name')?>"}).inputValidator({min:0,onerror:"<?php echo L("input").L('question_name')?>"});
 	$("#link_url").formValidator({onshow:"<?php echo L("input").L('url')?>",onfocus:"<?php echo L("input").L('url')?>"}).inputValidator({min:1,onerror:"<?php echo L("input").L('url')?>"}).regexValidator({regexp:"^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&]*([^<>])*$",onerror:"<?php echo L('link_onerror')?>"});
 	$("#option1").formValidator({onshow:"<?php echo L("input").L('选项')?>",onfocus:"<?php echo L("input").L('survey_option')?>"}).inputValidator({min:1,onerror:"<?php echo L("input").L('survey_option')?>"}).regexValidator({regexp:"notempty",datatype:"enum",param:'i',onerror:"<?php echo L('input_not_space')?>"});

	 
	})
//-->
</script>
<style type="text/css">
	.option{padding-top: 5px;}
	#addItem{margin-top: 10px}
</style>
<div class="pad_10">
<form action="?m=exam&c=exam&a=add" method="post" name="myform" id="myform">
<table cellpadding="2" cellspacing="1" class="table_form" width="100%">


	<tr>
		<th width="20%"><?php echo L('knows')?>：</th>
		<td>
		<input type="hidden" value="" name="exam[knowsid]" id="knowsid"/>
		<input type="hidden" value="" name="exam[courseid]" id="courseid"/>
		<input type="hidden" value="" name="exam[class]" id="classid"/>

		<select  id="classtype">
		<option value="0">请选择系列</option>
		<?php
		  $i=0;
		  foreach($classinfo as $catid=>$va){
		  $i++;
		?>
		<option value="<?php echo $catid;?>"><?php echo $va['catname'];?></option>
		<?php }?>
		</select>	

		<select  id="coursetype">
		<option value="0">请选择课程</option>
		
		</select>	

		<select  id="coursechapter">
		<option value="0">请选择章节</option>	
		</select>	

		</td>
	</tr>	
	
	<tr>
		<th width="100"><?php echo L('question_name')?>：</th>
		<td>
<script type="text/javascript" src="/statics/js/ckeditor/ckeditor.js"></script>
<textarea name="exam[question]" cols="50" rows="8" id="content"></textarea>
<?php echo form::editor('content','basic','','','',1,1)?>
	<!-- 	<input type="text" name="exam[question]" id="link_name"
			size="50" class="input-text"> --></td>
	</tr>
	

	<tr>
		<th width="100"><?php echo L('selecte')?>：</th>
		<td id="add_option">
		<div class="option"><span>
			<input type="text" name="exam[selecte][]" id="selecte" size="50" class="input-text"></span></div>
			<div class="option"><span>	<input type="text" name="exam[selecte][]" id="selecte" size="50" class="input-text"></span></div>

		<input type="button" id="addItem" value="增加选项" class="button" onclick="add_option()">	
		
		</td>
	</tr>

	<tr>
		<th width="100"><?php echo L('answer')?>：</th>
		<td>
			<input type="radio" value="A" name="exam[correct]"> A 
			<input type="radio" value="B" name="exam[correct]"> B
			<input type="radio" value="C" name="exam[correct]"> C
			<input type="radio" value="D" name="exam[correct]"> D 
			<input type="radio" value="E" name="exam[correct]"> E 

		</td>
	</tr>	

<tr>
		<th></th>
		<td><input type="hidden" name="forward" value="?m=exam&c=exam&a=add"> <input
		type="submit" name="dosubmit" id="dosubmit" class="dialog"
		value=" <?php echo L('submit')?> "></td>
	</tr>

</table>
</form>

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
				$("#coursechapter").change();
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
						var opt='<option value="0">请选择章节</option>	';
						if(data){
						
							$.each(data,function(index, item) {
								opt +="<option value='"+item.catid+"'>"+item.catname+"</option>";
							});

							$("#coursechapter").html(opt)
						}
					}
				});
			
			}else{
				var opt='<option value="0">请选择章节</option>	';
				$("#coursechapter").html(opt)
				$("#coursechapter").change();
				alert('请选择系列');

			}
		});


		$("#coursechapter").change(function(event) {
			var c=$("#classtype").children('option:selected').val();
			var ct=$("#coursetype").children('option:selected').val();
			var cp=$(this).val();

			var knowsid='{"ct":'+ct+',"cp":'+cp+c+"}";
			$("#classid").val(c)
			$("#knowsid").val(cp);
			$("#courseid").val(ct);
			console.log($("#knowsid").val());
		});

	});


var i = 1;

function add_option() {

	//var i = 1;
	

	var htmloptions = '';

	htmloptions += '<div id='+i+' class="option"><span><input type="text" name="exam[selecte][]" size="50" msg="<?php echo L('must_input')?>" value="" class="input-text"/><input type="button" value="<?php echo "&nbsp;&nbsp;".L('del')."&nbsp;&nbsp;"?>"  onclick="del('+i+')" class="button"/><br></span></div>';

	$("#addItem").before(htmloptions);

	var htmloptions = '';

	i = i+1;

}

function del(o){

 $("div [id=\'"+o+"\']").remove();	

}



function load_file_list(id) {

	$.getJSON('?m=admin&c=category&a=public_tpl_file_list&style='+id+'&module=survey&templates=survey_tp&name=survey_subject&pc_hash='+pc_hash, function(data){$('#show_template').html(data.survey_tp_template);});

}


</script>
</div>
</body>
</html> 