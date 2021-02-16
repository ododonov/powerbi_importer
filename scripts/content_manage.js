$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'scripts/load_content.php',
      success: function(msg){
        insert_code(msg, false)
      }
    })

    $('#import').click(function(){
        var code = $("#code_holder").val();
        if(code == ''){
          alert('Empty code box');
        } else {
          $.ajax({
            type: 'POST',
            url: 'scripts/import_content.php',
            data: {code: code},
            success: function(msg){
              if(msg == 'success'){
                insert_code(code, true);
              }
            }
          });
        }
      });

    $('#delete').click(function(){
      $.ajax({
        type: 'POST',
        url: 'scripts/delete_content.php',
        success: function(msg){
          if(msg == 'success'){
            window.location.href='admin_main.php';
          }
        }
      });
    });

    $('#exit').click(function(){
      window.location.href='index.php';
    });
    
  });


    function insert_code(code, new_flag) {
      if(new_flag){
        var new_div = document.createElement("div");
        new_div.innerHTML = code;
      } else {
        new_div = code;
      }
      $("#import_box").append(new_div);
    }
