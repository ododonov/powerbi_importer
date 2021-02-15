$(document).ready(function(){
    $('#pass_check').click(function(){
        var password = $("#pass_holder").val();
          $.ajax({
            type: 'POST',
            url: 'scripts/password_check.php',
            data: {password: password},
            success: function(msg){
              if(msg == 'valid'){
                window.location.href='main.php'
              };
              if(msg == 'invalid'){
                alert("Неправильный пароль.");
              }
            }
        });
    });
  });
