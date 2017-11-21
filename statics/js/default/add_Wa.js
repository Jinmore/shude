$(function(){
    $("#videolist_wamp").find('.videoItem').each(function(index, el) {
      var $childItem=$(this);
       var val=$($childItem).attr('data-source');
       var videoContainer=$($childItem).find('.prism-player').attr('id');
       _initPLayer(val,' 4.8rem','3.23rem',videoContainer);
    });
    })

  function _initPLayer(VId,width,height,palyContainer){
    console.log(palyContainer)
        var width=width||550+'px';
        var height=height||400+'px';
        var palyContainer=palyContainer||'J_prismPlayer';
        if($("#"+palyContainer).is(':hidden')){
          $("#"+palyContainer).show();
        }
        $.ajax({
        url: '/api.php?op=getauth',
        type: 'GET',
        //async :false,
        data: {'VId':VId},
        success:function(info){
          if(typeof(info)!='object'){
            info=$.parseJSON(info);
          }
          //console.log(typeof(info.code));
          //console.log(typeof(info.code)==1)
          if(info.code=='1'){
            playAuth=info.source;
            var pcover=info.cover;
            //初始化播放器
            var player = new prismplayer({
              id: palyContainer,
              autoplay: false,
              width: width,
              cover:pcover,
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