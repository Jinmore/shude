	 $(function(){
		var $li_con=$("#videolist");
		$li_con.find('.videoItem').click(function(event) {
			var Vid=$(this).attr('data-source');
			if(Vid==''||Vid=='undefined') return false;
			
			if(Vid.indexOf('mp4')>0||Vid.indexOf('MP4')>0||Vid.indexOf('Mp4')>0||Vid.indexOf('mP4')>0){
				var _p=$('.shi_center');
				var closeBtn='<div class="guan"><img src="statics/images/default/ch.png"></div> ';  
				var videoElement="<video src='"+Vid+"' controls='controls' width='100%' >您的浏览器不支持视频标题按</video>";
				_p.html(closeBtn+videoElement);
				$('.shi_center').on('click','div.guan',function(){
						$(this).parent().hide();
						$('.hei').hide();
					})
			}else{
				_initPLayer(Vid,'100%','50%');
			}
			
		});

	
	})
	function _initPLayer(VId,width,height){
	  		var width=width||550+'px';
	  		var height=height||400+'px';
	  		var palyContainer='J_prismPlayer';
	  		if($("#"+palyContainer).is(':hidden')){
	  			$("#"+palyContainer).show();
	  		}
				$.ajax({
				url: '/api.php?op=getauth',
				type: 'GET',
				async :false,
				data: {'VId':VId},
				success:function(info){
					if(typeof(info)!='object'){
						info=$.parseJSON(info);
					}
					// console.log(typeof(info.code));
					// console.log(typeof(info.code)==1)
					//console.log(info)
					if(info.code=='1'){
						playAuth=info.source;
						var pcover=info.cover;
						//初始化播放器
						var player = new prismplayer({
							id: palyContainer,
							autoplay: false,
							cover:pcover,
							width: width,
							height: height,
							vid:  VId,
							playauth:playAuth,
						});
					}
					//console.log(info);
				}
			})
				return false;
		}