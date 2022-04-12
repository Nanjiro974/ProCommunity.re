<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/app.css">
  <link rel="stylesheet" href="{{asset('public/css/nav_bar.css')}}">
  <!-- <link rel="stylesheet" href="css/footer.css"> -->
  <title>anime agile</title>
</head>
<body>


@include('component.nav_bar')

<img class="baniere" src="img/baniere.jpg" alt="afiche">
<br>
<div class="la_une">
  <div class="affiche">
    <img class="afficheimg" src="img/telechargement.jpeg" alt="afiche">
    <p>wakanime</p>
    <p>xx/xx/xxxx</p>
    
    <button><a class="btnvoir" href="/comment">voir plus</a> </button>
    <div class="row2">
    <i class="fa-solid fa-trash-can"></i>
<i class="fa-solid fa-pencil"></i>
    </div>
  </div>

  
</div>


  <br/>

@include('component.footer')



  </body>
</html>
