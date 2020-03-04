var check = true;
var count = 8;

$(document).ready(function() {
   $(window).scroll(function(){

     let $window = $(this);
     let scrollTop = $window.scrollTop();
     let windowHeight = $window.height();
     let documentHeight = $(document).height();

       if (scrollTop + windowHeight + 10 > documentHeight) {

         if(check){
           check = false;
           $.ajax({

             type: "GET",
             url: "common/page_form/large_header/infinite_sub.php?count="+count,
             // data: "count="+count_value,
             success: function(html){
                 $('.search_member').append(html);
             }
           }); // end of ajax
           count += 8;
           console.log(count);
           setTimeout(function(){check = true;},1000);
         }

      }


    });
  });
