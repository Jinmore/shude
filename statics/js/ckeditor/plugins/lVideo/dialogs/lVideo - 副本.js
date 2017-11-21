(function () {

	var baseurl=CKEDITOR.plugins.get('lVideo').path+"player";
	function UpdatePreview(){		
		//播放器名称
		var playerName= CKEDITOR.dialog.getCurrent().getContentElement('info', 'skin').getValue();
		var func="createPlayer_"+playerName;
		var f=eval(func);
		document.getElementById("_video_preview").innerHTML=f();

	}
	function createPlayer_jwplayer(){		//播放器
		var width = CKEDITOR.dialog.getCurrent().getContentElement('info', 'width').getValue()||500;
		var height = CKEDITOR.dialog.getCurrent().getContentElement('info', 'height').getValue()||400;
		//预览视频地址
		var videoUrl=CKEDITOR.dialog.getCurrent().getContentElement('info', 'video_url').getValue()
		var obj="";
		var playerJs=baseurl+"/jwplayer/jwplayer.js";
		var playerSwf=baseurl+"/jwplayer/jwplayer.flash.swf";
		//
		obj+="\<script src='"+playerJs+"'\>\</script\>\<script src='"+baseurl+"/jwplayer/jwplayer.html5.js'\>\</script\>";
		obj +="\<script src='"+baseurl+"\/jwplayer\/jwpsrv.js'>\<\/script\>";

		obj+='<div id="mediaplayer" ></div>';
		//配置
		var cgf="\<script type=\"text/javascript\"\>jwplayer('mediaplayer').setup({			'flashplayer': '"+playerSwf+"','image': '','id': 'playerID','width': '"+width+"','height':'"+height+"','aspectratio':'10:6','file': '"+videoUrl+"'});\<\/script\>"

		obj +=cgf;
			
		console.log(videoUrl+"----w:"+width+"---------h"+height+"---path:"+obj);

		return obj;
	}
    function HelloWorldDialog(editor) { 
        return {
            title: '添加视频',
            minWidth: 300,
            minHeight: 80,
            buttons: [
            CKEDITOR.dialog.okButton,
            CKEDITOR.dialog.cancelButton],
            contents:
            [{
                    id: 'info',
                    label: '视频地址',
                    title: '',
                    elements:
                    [
                        {
                           	type : 'vbox',
							widths : ['280px', '30px'],
							align : 'left',
							children : [{
										type : 'hbox',
										widths : ['280px', '30px'],
										align : 'left',
										children : [{
											type : 'text',
											id : 'video_url',
											label : '视频文件的URL',
											onChange : UpdatePreview
													}			
													]     
										}]                    
                        },
                        {
							type : 'hbox',
							widths : ['280px', '10px'],
							align : 'left',
							children : [{
								type : 'vbox',
								widths : ['280px', '10px'],
								align : 'left',
								children : [
												{
													type : 'select',
													id : 'skin',
													'default' : 'jwplayer',
													label : '选择播放器',
													items : [
															['default', 'jwplayer'],
																													
															],
															onChange : UpdatePreview
															}, {
																type : 'text',
																id : 'width',
																style : 'width:95px',
																label : '宽度',
																onChange : UpdatePreview
															}, {
																type : 'text',
																id : 'height',
																style : 'width:95px',
																label : '高度',
																onChange : UpdatePreview
															}, {
																type : 'checkbox',
																id : 'auto',
																'default' : true,
																label : editor.lang.flash.chkPlay,
																onChange : UpdatePreview
															}
														]
												}

												, {
													type : 'vbox',
													widths : ['280px', '10px'],
													align : 'left',
													children : [{
														type : 'html',
														id : 'preview',
														html : '<div id="_video_preview" ></div>'
													}]
												}
											]
						}
					]
            }],
            onOk: function () {
               // this.commitContent(editor);
               editor.setData(editor.getData() + createPlayer_jwplayer())
            },
            resizable: CKEDITOR.DIALOG_RESIZE_HEIGHT
        };
    }
 
    CKEDITOR.dialog.add('lVideo', function (editor) {
        return HelloWorldDialog(editor);
    });
})();