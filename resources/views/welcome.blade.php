<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Eğitim</title>
        <link rel="stylesheet" href="css/stil.css" />
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/islem.js"></script>
    </head>
    <body>
      <div class="ortala">
        <div class="mesajlar" id="mesajlar">

        </div>
        <div class="form" method="post" action="#">
          <form id="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <textarea id="veri"></textarea>
            <input type="submit" value="G" />
          </form>
        </div>
      </div>
    </body>
</html>
