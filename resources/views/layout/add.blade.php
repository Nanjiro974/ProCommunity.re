<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/app.css">
  <title>edit</title>
</head>
<body>

@include('component.nav_bar')
<img class="baniere" src="img/baniere.jpg" alt="">
<div class="login">
  <form method="post">
    <h1>ajouter un post</h1>
    <input class="sign" type="text"placeholder="titre">
    <input class="sign" type="text"placeholder="date">
    <input class="sign" type="text"placeholder="poster">

    <button class="logi">ajouter</button>
  </form>
    
</div>


  <br/>

  @include('component.footer')

  </body>
</html>