$(function(){
  $("#form").submit(function(){
    var veri=$("#veri").val();
    var token=$("#token").val();
      $.ajax({
        url: '/ajaxtest',
        type: 'POST',
        data: {_token: token},
        dataType: 'POST',
        success: function (data) {
            $("#mesajlar").html(data.msg);
        }
    });
    return false;
  });
});
