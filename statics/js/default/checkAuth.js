//判断是是否登陆
//!,若没登陆，弹出登陆框
//2,若登陆没权限弹出请联系管路员窗口，有权限则点进内容页
//前后台约定 json传输格式
//{
// 'media-id':19,
// 'website':'localhost',// 
// }
//返回值说明 -1 用户未登录，-2 没有权限 1 成功 -3当前章节已通过或还未学习上一章节 -4 当前考试已超过两次
$(document).ready(function(){
		$('.video li a.tong_text').click(function(event) {
		var _cid=$(this).parent().attr('data-media-id');
		var _n=$(this).find('div.num').text();
		/*console.log(_n)*/
		var href=$(this).attr('href');
		$.ajax({
			url: '/index.php?m=content&a=public_checkAu',
			type: 'get',
			dataType: 'html',
			data: {"cid": _cid,"chapter":_n},
			success:function(data){
				//console.log(data)
				switch(data){
					case '1':
					  window.location.href=href;
					  break;
					case '-1':
					   alert('您还未登录，等先登陆') ;		
					   window.location.href="?m=member&a=login"			   
					   break;
					case '-2':
					    alert('此课程没有权限，请联系管理员');   
					    break;
					case '-3':
					    alert('已经失效');  
					    break;
					case '-4':
					    alert("此章节已经通过或还未通过上一章节");
					    break;    
					default:
					   break;      
				}
			
			}
		})
		
		return false;
	});
/**考试*/
	$('.video li a.tong').click(function(event) {
		var _cid=$(this).parent().attr('data-media-id');
		var _n=$(this).siblings('a.tong_text').find('div.num').text();
		var href=$(this).attr('href');
		//console.log(href)
		$.ajax({
			url: href,
			type: 'get',
			dataType: 'html',
			data: {"cid": _cid,"chapter":_n},
			success:function(info){
				if(typeof(info)!='object'){
					info=jQuery.parseJSON(info);
				}
				if(info.code==1)
				{
					layer.open({
						type: 2,
						title: false,
						closeBtn: 1, //不显示关闭按钮
						shade: 0.8,
						area: ['500px', '400px'],						 
						anim: 2,
						content: [info.msg, 'yes'], //iframe的url，no代表不显示滚动条						
						});
				}else{
					alert(info.msg);
					if(info.url){
						location.href=info.url;	
					}
				}
						
					
			}
		})
		
		return false;
	});


	
});