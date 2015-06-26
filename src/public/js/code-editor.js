$(document).ready(function(){
    var codeEditor = $('.code-editor');
    for(var i = 0; i < codeEditor.length; i++){
        ace.edit(codeEditor[i].id);
    }
});