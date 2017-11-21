<?php defined('IN_ADMIN') or exit('No permission resources.');?>
<?php include $this->admin_tpl('header', 'admin');?>
<style type="text/css">
td.t_t{width: 80px}
.select1{width: auto;}

</style>
<div class="pad-lr-10">
<form name="myform" action="?m=member&c=course&a=editChapter" method="post" onsubmit="return checkdata();">
<div class="table-list">
<table width="100%" cellspacing="0">
	
<tbody>

	<tr>
		
	<td class="t_t">章节</td>
		<td>			
			<input type="hidden" value="<?php echo $chapterid?>" name="info[chapterid]" >			
		<input  type="hidden" name="info[uid]" id="uid" value="<?php echo $userid?>" />
			<?php echo $CATS[$chapterid][catname]?>		
		</td>

	</tr>
	
	
	<tr>
		<td>
			到期时间
		</td>
		<td>
				<?php echo form::date('info[endtime]', date("Y-m-d",$endtime))?>
		</td>
	</tr>

	<tr>
		<td>
			是否开通
		</td>
		<td>
			<input type="radio" value="0" name="info[status]" <?php if($status==0) echo "checked"?> > 是

			<input type="radio" value="-1" name="info[status]"  <?php if($status==-1&&$status!=0) echo "checked"?> > 否
		</td>
	</tr>

	

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

</body>
</html>