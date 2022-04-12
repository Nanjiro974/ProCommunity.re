<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/app.css">
  <title>login</title>
</head>
<body>

@include('component.nav_bar')
<img class="baniere" src="img/baniere.jpg" alt="">
<div class="login">
  <form method="post">
    <h1>Sign In</h1>
    <input class="sign" type="text"placeholder="identifiant">

    <input class="sign" type="password"placeholder="mot de passe">

    <button class="logi">login</button>
    <p>Don’t have an account ?<a class="dontcount" href="/register">Sign up.</a></p>
  </form>
    
</div>


  <br/>

  @include('component.footer')

  </body>
</html>