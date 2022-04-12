<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../../css/app.css">
  <title>register</title>
</head>
<body>


@include('component.nav_bar')


<img class="baniere" src="../../../img/baniere.jpg" alt="afiche">
<h1 class="h1_register">Formulaire dinscriptiion</h1>
<p class="h1_register">information requise</p>
<br>
<div class="register">
 <form action="" method="post">
   <br>
  <label for=""class="row" id="row1">
      <p>Identifiant</p>
      <input  class="regis w50" type="text">
    </label>
    <label for=""class="row">
      <p>Votre email</p>
      <input  class="regis w50" type="text">
    </label>
    <label for=""class="row">
      <p>acepter le email</p>
      <input class="regis"  type="checkbox">
    </label>
    <label for=""class="row">
      <p>Mot de passe</p>
      <input  class="regis w50" type="text">
    </label>
    <button class="btnregis">register</button> 
  </form>
</div>


  <br/>
  @include('component.footer')


  </body>
</html>