/**
 * Created by Administrator on 2017-05-04.
 */
$(function(){
    //菜单
    $(".set").click(function(){
        $(this).hide();
        $(".close").show();
        $(".menu").slideDown();
    });
    $(".close").click(function(){
        $(this).hide();
        $(".set").show();
        $(".menu").slideUp();
    });
 
    //标题
    $(".base_ul").find("li").each(function(){
        $(this).find("a").click(function(){
            $(this).addClass("click").parent().siblings().find("a").removeClass("click");
        })
    });
    //联系我们
    $(".contact").find("li").each(function(){
        $(this).click(function(){
            $(this).addClass("click").siblings().removeClass("click");
        })
    });
    //24集
    $(".videos_content table tr").find("td").each(function(){
        $(this).click(function(){
            var src=$(this).find('a').attr("href");
            $('.videos_content ').find('video').attr("src",src);
            return false;
        });
    });
    //会员中心
    $(".header_icon").find(".header_icon_right").click(function(){
        if($(".hide").css("display")=="none"){
            $(".hide").show();
        }else {
            $(".hide").hide();
        }
    });
    //考试
    $(".exam").find("li").each(function(){
        $(this).find(".right").click(function(){
            $(".blank").show();
            $(".rule_box").show();
            fiveT();
        })
    });
    $(".rule_close").click(function(){
        $(".rule_box").hide();
        $(".blank").hide();
    });
    $(".registerform").Validform({
        tiptype:1
    });
    //倒计时5秒
    var time=parseInt($("#countDownTime").text());
    function fiveT(){
        var setTime=setInterval(function(){
            if(time>0){
                time--;
                $("#countDownTime").text(time);
            }else {
                clearInterval(setTime);
                $(".time").hide();
                $(".time_box").find(".begin_box").show();
                return;
            }
        },1000);
    }
    
    //登录
    $(".forget").click(function(){
        $(".sign_one").hide();
        $(".sign_two").show();
    });
    //表单验证
  
});
function banner(){
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
}
$(function(){
       var $obj=$(".mediaplayer");
       if($obj.length>=0) {
       $obj.each(function(index, el) {
           var url=$(this).attr("data-href");
           var width=$(this).width()||'100%';
           var height=$(this).height();

           var id="mediaplayer_"+index;
           $(this).attr('id',id);
           _initPlayer(id,url,width,height)           
       });    
	   }
})

function _initPlayer(id,url,width,height){
            jwplayer(id).setup({ 
                'flashplayer': '/statics/js/ckeditor/plugins/lVideo/player/jwplayer/jwplayer.flash.swf',
                'image': '',
                'id': 'playerID',
                'width': '100%',
                'height':'',
                'aspectratio':'10:6',
                'file': url
            });
			
    }
	