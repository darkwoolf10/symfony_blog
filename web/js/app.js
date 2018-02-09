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
$('.transform-title').on('input', function () {
  var msg = $(this).val();
  $('.transform-title-msg').text(msg);
});
