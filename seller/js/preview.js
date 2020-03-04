$(document).ready(function() {
    /**
    onchange event handler for the file input field.
    It emplements very basic validation using the file extension.
    If the filename passes validation it will show the image using it's blob URL
    and will hide the input field and show a delete button to allow the user to remove the image
    */
    $('#store_image1').on('change', function() {

        ext = $(this).val().split('.').pop().toLowerCase(); //확장자

        //배열에 추출한 확장자가 존재하는지 체크
        if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#store_image1').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('.image_preview1 img').attr('src', blobURL);
            $('.image_preview1').slideDown(); //업로드한 이미지 미리보기
            // $(this).slideUp(); //파일 양식 감춤
        }
    });

    $('#store_image2').on('change', function() {

        ext = $(this).val().split('.').pop().toLowerCase(); //확장자

        //배열에 추출한 확장자가 존재하는지 체크
        if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#store_image2').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('.image_preview2 img').attr('src', blobURL);
            $('.image_preview2').slideDown(); //업로드한 이미지 미리보기
            // $(this).slideUp(); //파일 양식 감춤
        }
    });


    $('#store_image3').on('change', function() {

        ext = $(this).val().split('.').pop().toLowerCase(); //확장자

        //배열에 추출한 확장자가 존재하는지 체크
        if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#store_image3').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('.image_preview3 img').attr('src', blobURL);
            $('.image_preview3').slideDown(); //업로드한 이미지 미리보기
            // $(this).slideUp(); //파일 양식 감춤
        }
    });


    $('#store_image4').on('change', function() {

        ext = $(this).val().split('.').pop().toLowerCase(); //확장자

        //배열에 추출한 확장자가 존재하는지 체크
        if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#store_image4').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('.image_preview4 img').attr('src', blobURL);
            $('.image_preview4').slideDown(); //업로드한 이미지 미리보기
            // $(this).slideUp(); //파일 양식 감춤
        }
    });

    $('#store_image5').on('change', function() {

        ext = $(this).val().split('.').pop().toLowerCase(); //확장자

        //배열에 추출한 확장자가 존재하는지 체크
        if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            resetFormElement($(this)); //폼 초기화
            window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
        } else {
            file = $('#store_image5').prop("files")[0];
            blobURL = window.URL.createObjectURL(file);
            $('.image_preview5 img').attr('src', blobURL);
            $('.image_preview5').slideDown(); //업로드한 이미지 미리보기
            // $(this).slideUp(); //파일 양식 감춤
        }
    });


  }); //end of ready


  function register_store_pic() {
    var store_image1 = document.getElementById("store_image1");
    var store_image2 = document.getElementById("store_image2");
    var store_image3 = document.getElementById("store_image3");
    var store_image4 = document.getElementById("store_image4");
    var store_image5 = document.getElementById("store_image5");

    if(store_image1.value==="") {
      alert("식당 사진을 업로드해주세요.");
      store_image1.focus();
    } else if (store_image2.value==="") {
      alert("식당 사진을 업로드해주세요.");
      store_image2.focus();
    } else if (store_image3.value==="") {
      alert("식당 사진을 업로드해주세요.");
      store_image3.focus();
    } else if (store_image4.value==="") {
      alert("식당 사진을 업로드해주세요.");
      store_image4.focus();
    } else if (store_image5.value==="") {
      alert("식당 사진을 업로드해주세요.");
      store_image5.focus();
    } else {
      document.form_store_pic.submit();
    } // end of else

  } // end of register_store_pic();

  function update_store_pic() {
    var store_image1 = document.getElementById("store_image1");
    var store_image2 = document.getElementById("store_image2");
    var store_image3 = document.getElementById("store_image3");
    var store_image4 = document.getElementById("store_image4");
    var store_image5 = document.getElementById("store_image5");

    // document.form_store_pic_update.submit();

    if(store_image1.value==="") {
      alert("식당 사진을 업로드해주세요.1");
      store_image1.focus();
      return;
    }

    if (store_image2.value==="") {
      alert("식당 사진을 업로드해주세요.2");
      store_image2.focus();
      return;
    }

    if (store_image3.value==="") {
      alert("식당 사진을 업로드해주세요.3");
      store_image3.focus();
      return;
    }

    if (store_image4.value==="") {
      alert("식당 사진을 업로드해주세요.4");
      store_image4.focus();
      return;
    }

    if (store_image5.value==="") {
      alert("식당 사진을 업로드해주세요.5");
      store_image5.focus();
      return;
    }
      document.form_store_pic_update.submit();



  } // end of update_store_pic();
