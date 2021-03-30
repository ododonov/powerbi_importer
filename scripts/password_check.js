$(document).ready(function(){
    $(document).on('keypress',function(e) {
      if(e.which == 13) {
      try_authorize();
    }
  });

    $('#pass_check').click(function(){
        try_authorize();
    });
  });

  function try_authorize() {
    var login = $("#login_holder").val();
    var password = $("#pass_holder").val();
      $.ajax({
        type: 'POST',
        url: 'scripts/password_check.php',
        data: {login: login,
               password: password},
        success: function(msg){
          if(msg == 'admin'){
            window.location.href='admin_main.php'
          };
          if(msg == 'user'){
            window.location.href='user_main.php'
          };
          if(msg == 'invalid'){
            alert("Неправильный логин или пароль.");
          }
        }
    });
  }
