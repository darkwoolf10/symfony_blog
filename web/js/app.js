// // $(document).on('click', 'button.like', function(){
// //   $.get( "path('like_post')", function(data) {
// //     console.log(data);
// //     alert( "Load was performed." );
// //   })
// // });
//
$(document).on('click', 'button.like', function(){
  $.ajax({
    // url:id + "/like",
    url: Routing.generate('like', {postId: $(".like").attr("data-post-id")}),
    type: "POST",
    dataType: "json",
    async: true,
    success: function (data)
    {
      if (data.result == 'success') {
        $('.heart').css('color', 'red');
        var count = parseInt($('#like_count').html(), 10);
        $('#like_count').html(count+1);
      } else {
        $('.heart').css('color', 'black');
        var count = parseInt($('#like_count').html(), 10);
        $('#like_count').html(count-1);
      }
    }
  });
  return false;

});

$(document).on('click', 'button.subscribe', function () {
  $.ajax({
    type: "POST",
    url: Routing.generate('subscribe'),
    dataType: "json",
    async: true,
    success: function (data)
    {
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
