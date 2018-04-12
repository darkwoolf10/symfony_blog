// // $(document).on('click', 'button.like', function(){
// //   $.get( "path('like_post')", function(data) {
// //     console.log(data);
// //     alert( "Load was performed." );
// //   })
// // });
//
// $(document).on('click', 'button.like', function(){
//   var id = $(".like").attr("data-post-id");
//   $.ajax({
//     url:id + "/like",
//     type: "POST",
//     dataType: "json",
//     data: {
//     },
//     async: true,
//     success: function (data)
//     {
//       console.log(data);
//       // console.log(data.result)
//       if (data.result == 'success'){
//         $(".fa-heart").css("color", "red");
//         location.reload();
//       } else {
//         $('.like_info').show('slow', function () {
//         })
//       }
//     }
//   });
//   return false;
//
// });

$(document).on('click', 'button.subscribe', function () {
  that = $(this);
  $.ajax({
    type: "POST",
    url: Routing.generate('subscribe'),
    dataType: "json",
    data: {
      "success": "You are subscribe!"
    },
    async: true,
    // beforeSend: function (xhr) {
    //   xhr.setRequestHeader ("Authorization", "Basic " + btoa("admin" + ":" + "1234"));
    // },
    success: function (data)
    {
      console.log(data);
      if(data.result == true) {
        $('.ajax-results').html("Subscribe");
        $('.ajax-results-description').html("You are subscribe");
      } else if (data.result == false){
        $('.ajax-results').html("Unsubscribe");
        $('.ajax-results-description').html("You are unsubscribe");
      }
    },
    error: function () {
      console.log("error");
    }
  });

  return false;
});

$('.transform-title').on('input', function () {
  var msg = $(this).val();
  $('.transform-title-msg').text(msg);
});
