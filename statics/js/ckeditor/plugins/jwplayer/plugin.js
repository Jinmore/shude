
CKEDITOR.plugins.add('jwplayer', {
    requires: ['dialog'],
    init: function(editor) {
        var pluginName = 'jwplayer';
        CKEDITOR.dialog.add(pluginName, this.path + 'dialogs/jwplayer.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand('jwplayer'));
        editor.ui.addButton('jwplayer', {
            label: '添加视频',
            command: 'jwplayer',
            icon: this.path + 'jwplayer/jwPlayer.gif'
        });
    }
});