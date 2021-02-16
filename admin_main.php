<!DOCTYPE html>
<html>
<head>
  <title>Power Bi Import</title>
  <link rel = "stylesheet" href = css/style.css>
  <script
		src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous">
  </script>
  <script src = 'scripts/content_manage.js'></script>
</head>

  <body>
    <div class = 'box'>
      <input type = 'button' id = 'exit' value = 'Выход'></input>
    </div>
    <form method = 'POST' action = '' >
      <input id = 'code_holder' autocomplete="off"></input>
      <br>
      <input type = 'button' id = 'import' value = 'Вставить код'></input>
      <input type = 'button' id = 'delete' value = 'Очистить'></input>
    </form>
    <div id = 'import_box'></div>
  </body>
</html>
