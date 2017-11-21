CKEDITOR.plugins.add('lVideo', {
	requires: ['dialog'],
    init: function (editor) {
        var pluginName = 'lVideo';
        CKEDITOR.dialog.add(pluginName, this.path + 'dialogs/lVideo.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton(pluginName,
        {
            label: '添加视频',
            command: pluginName,
            icon: this.path + 'images/lVideo.png'
        });
    }
});