var layer = layui.layer,
    element = layui.element(),
    laydate = layui.laydate,
    form = layui.form();

/**
 * AJAX全局设置
 */
$.ajaxSetup({
    type: "post",
    dataType: "json"
});
/**
 * 通用表单提交(AJAX方式)
 */
form.on('submit(*)', function (data) {
    $.ajax({
        url: data.form.action,
        type: data.form.method,
        data: $(data.form).serialize(),
        success: function (info) {
			console.log(info)
        	if(typeof(info)!='object'){
        		info=$.parseJSON(info);
        	}

           if (info.code === 1) {
           		$.get(info.redictto,function(datas){
		           	if(typeof(datas)!='object'){
		        		datas=$.parseJSON(datas);
		        	}
		        	if(datas.code==1){
		        		$("#phonenumber").html(datas.phone);
		        		$("#result_one").hide();
		        		$("#result_two").show();

		        	}
           		})
               
            }
            layer.msg(info.msg);
        }
    });

    return false;
});


var flagValidateCodeM=false;
var countdown=60;
$(document).ready(function(){
	if(getcookie("t_time")){
			intv = setInterval(changeText, 1000);
			countdown=getcookie("t_time");
		}
	$("#getValidateSMS").click(function(event) {
			if(!flagValidateCodeM){	
				$.ajax({
					url: '/api.php?op=sms',
					type: 'GET',
					data: {random:Math.random()},
					success:function(data){
						console.log(data);
						if(data=="0") {
							layer.msg("验证码以短信形式发送至您的手机");
							//setcookie('mobile', $("#mobile").val());		
							intv = setInterval(changeText, 1000);

						} else if(data=="-1") {
							layer.msg("你今天获取验证码次数已达到上限");
						}else if(data=='-3'){
							layer.msg("当前ip已达最大注册数");
						} else {
							layer.msg("短信发送失败");
						}
					},
					error:function(data){
						console.log("错误"+data);
					}
				})	
			}			
		});

		function changeText() {			
		if (countdown <= 0) {
			$("#getValidateSMS").val("获取短信验证码");			
			 $('#getValidateSMS').removeClass('disabled');
			 flagValidateCodeM=false;
			 clearInterval(intv);
			 countdown = 60;
			delcookie('t_time');
		   $("#mobile").attr("disabled",false);//防止发送后更改电话号码  
		} else {
			countdown--;
			$("#getValidateSMS").val(countdown+"秒后重新获取");
			$("#getValidateSMS").addClass('disabled')
			setcookie("t_time",countdown)
			flagValidateCodeM=true
			//console.log(countdown)

		}
	}


	$("#confirmSub").click(function(){
		var code=$("#validataCode").val();
		if(code.length!=6){
			layer.msg("请输入6位验证码");	
			return false;		
		}else{			
			$.ajax({
			url: '/index.php?m=member&c=ajaxlogin&a=public_checkmobile',
			type: 'post',
			dataType: 'json',
			data: {'dosubmit': '1','code':code},
			success:function(info){
				console.log(info)
				if(typeof(info)!='object'){
        		info=$.parseJSON(info);
        	}
        	if(info.code=='1'){    
        	
        		if(info.redictto){        			
                  location.href = info.redictto;               
        		}        		
        	}
        	layer.msg(info.msg);
			}
		})
		
		}		

	})

	})


