(function () {

	var baseurl=CKEDITOR.plugins.get('lVideo').path+"player";
	function UpdatePreview(){		
		//播放器名称
		var playerName= CKEDITOR.dialog.getCurrent().getContentElement('info', 'skin').getValue();
		var func="createPlayer_"+playerName;
		var f=eval(func);
		//document.getElementById("_video_preview").innerHTML=f();

	}
	function createPlayer_jwplayer(){		//播放器
		var width = CKEDITOR.dialog.getCurrent().getContentElement('info', 'width').getValue()||500;
		var height = CKEDITOR.dialog.getCurrent().getContentElement('info', 'height').getValue()||400;
		//预览视频地址
		var videoUrl=CKEDITOR.dialog.getCurrent().getContentElement('info', 'video_url').getValue()
		var obj="";		
		var playerSwf=baseurl+"/jwplayer/jwplayer.flash.swf";
		var JWEmbem = "<div class='mediaplayer' data-href='"+videoUrl+"' style='width:"+width+"px;height:"+height+"px '><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'" + " width='" + width
			+ "' height='" + height + "'>" + " <param name='movie' value='" + videoUrl + "'>"
			+ " <param name='allowfullscreen' value='true'>" + " <param name='allowscriptaccess' value='always'>"
			+ " <param name='flashvars' value='file=" + videoUrl + "&autostart=" + auto + "'>";
	
		var image = '';
		var filePreUrl='',auto='auto';
		if(filePreUrl && filePreUrl!=''){
			image = "&image="+filePreUrl;
		}
		JWEmbem += " <embed ";
		JWEmbem += " width='" + width + "' height='" + height + "'" + " src='" + playerSwf
			+ "' allowscriptaccess='always'" + " allowfullscreen='true' flashvars='file=" + videoUrl 
			+ "&autostart=" + auto + image +"'/>" + "</object></div>";

		// obj='<embed class="mediaplayer" src="'+videoUrl+'" data-href="'+videoUrl+' width="'+width +'" height="'+height+'"';	
		// obj+='" style="border:1px solid ;text-align:center"><\/embed\>';
		return JWEmbem;
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
															}
														]
												}

												// , {
												// 	type : 'vbox',
												// 	widths : ['280px', '10px'],
												// 	align : 'left',
												// 	children : [{
												// 		type : 'html',
												// 		id : 'preview',
												// 		html : '<div id="_video_preview"  style="width:280px"></div>'
												// 	}]
												// }
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