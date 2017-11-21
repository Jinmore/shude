/**
 * Created by Administrator on 2017-03-14.
 */
$(function(){
    $('#demo01').flexslider({
        animation: "slide",
        direction:"horizontal",
        easing:"swing"
    });
});
$(function(){
    //滚动到最上面
    $(".back_top").click(function(){
        $("html,body").animate({"scrollTop":0},800);
    });
    $(".frequency").on("mouseover",function(){
        $(".Refresh").show();
    });
    $(".frequency").on("mouseout",function(){
        $(".Refresh").hide();
    });
    //两个垂直导航的高度
    var docuH=$(document).height();
    $(".vertical_nav").css({"height":docuH});
    $(".two_nav").css({"height":docuH});

    // 垂直选项卡
    //滑动
    $(".vertical_ul").find("li").each(function(){
        $(this).on("mouseover",function(){
            $(this).find("a").addClass("vertical_li_bg_hover").parent().siblings().children().removeClass("vertical_li_bg_hover");
            $(this).find(".two_nav").show();
            $(this).siblings().find(".two_nav").hide();
        });
        $(this).on("mouseout",function(){
            $(this).find(".two_nav").hide();
        });
    });
    //移出
    $(".vertical_ul").on("mouseout",function(){
        $(".vertical_ul").find("li").each(function(){
            $(this).find("a").removeClass("vertical_li_bg_hover");
        });
    });
    //二级菜单划过
    $(".two_nav ul").find("li").each(function(){
        $(this).on("mouseover",function(){
            $(this).children().addClass("vertical_li_two_bg").parent().siblings().children().removeClass("vertical_li_two_bg");
        });
    });
    $(".two_nav").each(function(){
        $(this).on("mouseover",function(){
            $(this).show();
        });
        $(this).on("mouseout",function(){
            $(this).hide();
                $(".two_nav ul").find("li").each(function(){
                $(this).children().removeClass("vertical_li_two_bg");
            });
        });
    });
    
     //三个视频
    var Ovideo = $(".shi_center>video");
    $(".kec_one").find("li").each(function(index){
        $(this).on("click",function(){
            $(".shi_center").show();
            $(".shi_center").css("z-index","2000");
            $(".hei").show();
            if($(".guan").is(':hidden')){
                $(".guan").show();
            }
            var srcVideo=$(this).find('.kec_one_video').attr("href");
            $('.shi_center ').find('video').attr("src",srcVideo);
            Ovideo.eq(index).fadeIn().siblings('video').hide();
            Ovideo.eq(index).fadeIn().siblings('.guan').show();
            return false;
        });
    });
    $(".guan").click(function(){
        $(this).hide();
        $(".shi_center").find("video").hide();   

        $("#J_prismPlayer").hide();
        $("#J_prismPlayer").html('');     

        $(".shi_center").css("z-index","70");
        $(".hei").hide();
        $(".shi_center").find("video").attr("src","");
    });


    //32集视频
    $(".video_table tr").find("td").each(function(index,element){
        $(element).click(function(){
            var src=$(this).find('a').attr("href");
            var vidoe=$(this).find('a').attr("data-href");            
            $('.hui_video ').find('video').attr("src",vidoe);
            window.location.href=src;
            return false;
        });
        $(this).on("mouseenter",function(){
            $(this).find(".detail").finish().fadeIn();
            $(this).siblings().find(".detail").hide();
        });
        $(this).on("mouseleave",function(){
            $(this).find(".detail").finish().hide();
        })
    });
    $(".registerform").Validform({
        tiptype:1
    });
    //倒计时
    //var intDiff = parseInt(300);//倒计时总秒数量
    //function timer(intDiff){
    //    window.setInterval(function(){
    //        var day=0,
    //            hour=0,
    //            minute=0,
    //            second=0;//时间默认值
    //        if(intDiff > 0){
    //            day = Math.floor(intDiff / (60 * 60 * 24));				//一天
    //            hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
    //            minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
    //            second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
    //        }
    //        if (minute <= 9) minute = '0' + minute;
    //        if (second <= 9) second = '0' + second;
    //        $('#day_show').html(day+"天");
    //        $('#hour_show').html('<s id="h"></s>'+hour+'时');
    //        $('#minute_show').html('<s></s>'+minute+'分');
    //        $('#second_show').html('<s></s>'+second+'秒');
    //        intDiff--;
    //    }, 1000);
    //}
});

$(function(){
       var $obj=$(".mediaplayer");
       if($obj.length<=0) return false;
       $obj.each(function(index, el) {
           var url=$(this).attr("data-href");
           var width=$(this).width()||'100%';
           var height=$(this).height();

           var id="mediaplayer_"+index;
           $(this).attr('id',id);
           _initPlayer(id,url,width,height)           
       });    
})

function _initPlayer(id,url,width,height){
            jwplayer(id).setup({ 
                'flashplayer': '/statics/js/ckeditor/plugins/lVideo/player/jwplayer/jwplayer.flash.swf',
                'image': '',
                'id': 'playerID',
                'width': width,
                'height':height,
                'aspectratio':'10:6',
                'file': url
            });
    }











