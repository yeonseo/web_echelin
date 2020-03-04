$(document).ready(function(){

  for(var i=0; i<5; i++) {

var fileTarget = $('.filebox'+'i' '.upload-hidden'+'i');

fileTarget.on('change', function(){
    if(window.FileReader){
        // 파일명 추출
        var filenameture = filename.concat(i);
         filenameture = $(this)[0].files[0].name;
    }

    else {
        // Old IE 파일명 추출
        var filenameture = filename.concat(i);
         filenameture = $(this).val().split('/').pop().split('\\').pop();
    };

    $(this).siblings('.upload-name'+'i').val(filenameture);
});

//preview image
var imgTarget = $('.preview-image'+'i' '.upload-hidden'+'i');

imgTarget.on('change', function(){
    var parent = $(this).parent();
    parent.children('.upload-display'+'i').remove();

    if(window.FileReader){
        //image 파일만
        if (!$(this)[0].files[0].type.match(/image\//)) return;

        var reader = new FileReader();
        reader.onload = function(e){
            var src = e.target.result;
            parent.prepend('<div class="upload-display"+'i'><div class="upload-thumb-wrap"+'i'><img src="'+src+'" class="upload-thumb"+'i'></div></div>');
        }
        reader.readAsDataURL($(this)[0].files[0]);
    }

    else {
        $(this)[0].select();
        $(this)[0].blur();
        var imgSrc = document.selection.createRange().text;
        parent.prepend('<div class="upload-display"+'i'><div class="upload-thumb-wrap"+'i'><img class="upload-thumb"+'i'></div></div>');

        var img = $(this).siblings('.upload-display'+'i').find('img');
        img[0].style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enable='true',sizingMethod='scale',src=\""+imgSrc+"\")";
    }
});

} //end of for

});
