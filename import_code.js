$(document).ready(function(){
    $('#import').click(function(){
        var code = $("#code_holder").val();
        if(code == ''){
          alert('Empty code box');
        } else {
          $.ajax({
            type: 'POST',
            url: 'import.php',
            data: {code: code},
            success: function(msg){
              if(msg == 'valid'){
                insert_new_code(code);
              }
            }
          });
        }
      });
    });

    function insert_new_code(code) {
      var new_div = document.createElement("div");
      new_div.innerHTML = code;
      $("body").append(new_div);
    }
