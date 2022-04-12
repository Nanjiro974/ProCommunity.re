<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/app.css">

  <title>anime agile</title>
</head>
<body>


@include('component.nav_bar')

<img class="baniere" src="img/baniere.jpg" alt="afiche">
<br>
<div class="div_comment">
    <h1 class="h1_register">commentaire</h1>

<div class="la_une">
  
      <img class="img_comment" src="img/baniere.jpg" alt="image du manga">
      <br><br><br>
      <div>
      <p>titre</p>
      <p>date</p>
      </div>
    </div>
    <textarea name="comment" placeholder="comentaire" cols="100" rows="5"></textarea>
    <button class="btn_comment">comment</button>
  </div>


  <br/>

@include('component.footer')



  </body>
</html>
