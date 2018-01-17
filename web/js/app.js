$(document).on('click', 'button.like', function(){
  that = $(this);
  $.ajax({
    url:'{{ (path("like")) }}',
    type: "POST",
    dataType: "json",
    data: {
      "like": 1
    },
    async: true,
    success: function (data)
    {
      console.log(data)
      $('#ajax-results').html(data.output);

    }
  });
  return false;

});