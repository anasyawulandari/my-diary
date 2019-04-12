<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/nav1"> -->
    <title>The Online Diary - It's free! - Private or public, your choice!</title>
    <style>
      .container{
        width:100%;
        height: 100%;
        margin:auto;
    } 
    .nav-link{
     
        margin-right:55px;
        font-size: 14px;
        line-height:20px;
      
    }
   .nav-link:hover{
        color:  #46fbdf !important;
        text-decoration: none;
    }
    .navbar-nav > li > a {
        padding-bottom: 12px;
        padding-top: 12px;
       text-align:center;
       margin-left:-40px;
      
    }
    .navbar{
      margin-right:100px;
    }
    nav .social a {
      border: 1px solid #ffffff;
      border-radius: 50%;
      color: #ffffff;
      float: left;
      font-size: 14px;
      line-height: 23px ;
      margin: 18px 0 0 6px; 
      padding: 3px;
      width: 34px;
      margin-top:15px;
      text-align: center;
      position:relative;
    
}
nav a {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
}
#socbar a{
  text-align:center;
  margin-top:0px;

}
div.dropdown-menu {
    background: #0e0e0e;
}
 
    </style>
</head>
<body background="assets/bg1.jpg" >

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style=" border-bottom: 1px solid white;padding:6px;margin-left:100px ">
<header class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Public Diaries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Manage your diary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Create your own diary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Faq</a>
      </li>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-white" href="#" id="dropdown09"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flag-icon flag-icon-us"> </span> Language</a> 
        
        <div class="dropdown-menu" aria-labelledby="dropdown09">
        <p>   <a class="dropdown-item" href="/?hl=no"><span class="flag-icon flag-icon-no"> </span>  Norwegian</a>
<p>   <a class="dropdown-item" href="/?hl=en"><span class="flag-icon flag-icon-us"> </span>  English</a>
<p>   <a class="dropdown-item" href="/?hl=th"><span class="flag-icon flag-icon-th"> </span>  Thai</a>
        </div>
      </li>
    </ul>
    
      
      <ul id="socbar" class="nav navbar-nav navbar-right social">
      <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.my-diary.org/" class="" title="Share on Facebook" target="_blank" >
     <img src="assets/fb.png" height="16" width="16"></a>
      <a href="https://twitter.com/intent/tweet?text=A+free+online+diary&url=https://www.my-diary.org/" class="" title="Share on Twitter" target="_blank" >
      <i class="fa fa-twitter"></i></a>
      <a href="https://plus.google.com/share?url=https://www.my-diary.org/" class="" title="Share on Google+2" target="_blank" >
      <i class="fa fa-google-plus"></i></a>
      <a href="http://www.linkedin.com/shareArticle?mini=true&ro=true&trk=frontpage&title=A+free+online+diary&url=https://www.my-diary.org/" class="" title="Share on Linkedin" target="_blank">
      <i class="fa fa-linkedin"></i></a>
        </ul>
  </div>
  </header> 
</nav>


</body>
</html>