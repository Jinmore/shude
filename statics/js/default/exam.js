$(function(){
	var $parentCon=$('div.test_one');
	
	var config={
		 sendResultsURL: "?m=exam&a=checkAn",
	};
	// $parentCon.each(function(index, el) {
	// 	$that=$(this);
	// 	$that.find('input').click(function(event) {
	// 		var val=$(this).parent("label").attr('data-id');
	// 		console.log($that.index()+",,,,,,,"+val);
	// 	});
	// });
	// 
	$("#exam_submit").click(function(event) {

		var answer=[];
		//检测时间是否用完
		//价差题是否做完
		
		//封装答案
		$parentCon.each(function(index, el) {
			$that=$(this);
			var index=$that.index();
			var val=$that.find('input:checked').parent("label").attr('data-id');
			if(val=='undefined'||typeof(val)=='undefined')
			{
				//var cfm=confirm('第'+(index+1)+"道题未做，是否确定提交");
				//console.log(cfm)
				//if(!cfm) return false;
				val=88;
			} 
			answer.push(val);
		});
		console.log(answer);
		myanswer=answer.join("|");	
		console.log(myanswer)
		/*提交数据*/
		$.ajax({
			url: config.sendResultsURL,
			type:'GET',	
			async: false,		
			data: {an: myanswer,'timsamp':$("input[name='timesamp']").val()},
			beforeSend:function(){
				$('#exam_submit').val('评分中。。');
				$('#exam_submit').css('background',"#337ab7");
				/*改变提交按钮上的文字并将按钮设置为不可点击*/
				$('#exam_submit').attr('disabled','true');
			},
			success:function(json){
			if (json == null) {
               alert('通讯失败!');
	           } else {
	            	if(typeof(json)!='object'){
	            		json=$.parseJSON(json);
	            	}   
	            	/**答对后检测*/
	            	console.log(json)
	            	var score=json.score;
	            	var resut=json.res;
	            	//弹出考试结果提示
	            	//判卷显示信息
	            	$(".blank").show();
	            	$('.test_adopt').fadeIn();
	            	//考试成绩等于考题书，则成功
	            	console.log($parentCon.length);
	            	if(score==$parentCon.length){
	            		$('.test_adopt').find('.adopt').show();
	            		$('.test_adopt').find('.fail').hide();
	            		$('.test_adopt').find('.seal').show();
	            		$('.test_adopt').find('.fail_pic').hide();
	            	}else{
	            		$('.test_adopt').find('.adopt').hide();
	            		$('.test_adopt').find('.fail').show();
	            		$('.test_adopt').find('.seal').hide();
	            		$('.test_adopt').find('.fail_pic').show();
	            	}
					subflag=true;
	            	$(".test_confirm").click(function(){
	            		
	            		$('.test_adopt').fadeOut();
	            		$(".blank").hide();
	            		judetest(resut);
	            	})	            	
	           }
			}

		});	


	});


	function judetest(result){
		$.each(result,function(index, el) {
	       if(result[index]==1){
	         $parentCon.eq(index).find('img.yes').fadeIn();
	        }else{
	        $parentCon.eq(index).find('img.no').fadeIn();
	     }
	  });

	$('#exam_submit').val('关闭');
	$('#exam_submit').css('background',"#32a442");
	$('#exam_submit').removeAttr('disabled');
	var _p=$('#exam_submit').parent();
	$('#exam_submit').remove();
	$(_p).append("<a href='/index.php?m=content&c=index&a=lists&catid="+catid+"' style='font-size:15px;color: #fff;line-height: 40px;padding: 0 73px;background-color: #32a442;opacity: 1;border-radius: 30px;display:inline-block;cursor: pointer;'>关闭</a>");
	}
})
