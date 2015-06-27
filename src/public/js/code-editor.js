$(document).ready(function(){
    var codeEditor = $('.code-editor');
    for(var i = 0; i < codeEditor.length; i++){
        $(codeEditor[i]).css('min-height', '300px');
        var editor = CodeMirror.fromTextArea(codeEditor[i], {
            lineNumbers: true,
            mode: "htmlmixed"
        });

    }
});