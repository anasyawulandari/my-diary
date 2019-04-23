<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 
  <title>Create your own free online diary</title>
  <link rel="icon" href="/assets/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>" />
  </head>

<body  background="<?php echo base_url('assets/bg1')?>.jpg">
 <header class=""> 
 <nav class="navbar navbar-default">
 <div class="container">
  <div class="row">
   <div class="col-lg-12">
    <div class="navbar-header">
     <a href="/" class="hidden-lg hidden-sm hidden-md"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo"></a>   
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
      <li class="logo hidden-xs"><a href="/" class="logo"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo"></a></li>
      <li><a href="">Public Diaries</a></li>
      <li><a href="">Manage your diary</a></li>
<li><a href="">Create your own diary</a></li>
      <li><a href="">About</a></li>
      <li><a href="">Faq</a></li>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
 <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="/?hl=reset" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="flag-icon flag-icon-us"> </span> Language</a>
  <div class="dropdown-menu" aria-labelledby="dropdown09">
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-no"> </span>  Norwegian</a>
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-us"> </span>  English</a>
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-th"> </span>  Thai</a>
  </div>
 </li>

     </ul>

     <ul class="nav navbar-nav navbar-right hidden-lg hidden-md">
      <li><a href=""><i class="fa fa-user"></i>Login</a></li> 
      <li><a href=""><i class="fa fa-sign-in"></i>Register</a></li>
      <li><a href=""><i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height='16' width='16'> Login with Facebook</a></li>
      <li><a href=""><i class="fa fa-google"></i>Login with Google</a></li>
     </ul>
  <ul id="socbar" class="nav navbar-nav navbar-right social">
  <a href="" class="btn btn-facebook" title="Share on Facebook" target="_blank" >
  <i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"></a>
  <a href="" class="" title="Share on Twitter" target="_blank" >
  <i class="fa fa-twitter"></i></a>
  <a href="" class="" title="Share on Google+" target="_blank" >
  <i class="fa fa-google-plus"></i></a>
  <a href="" class="" title="Share on Linkedin" target="_blank">
  <i class="fa fa-linkedin"></i></a>
  
  </ul>
     </div>
    </div>
   </div>
  </div>
 </nav>
 <nav class="navbar navbar-default navbar-small hidden-xs">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
  </div>
  <div id="navbar1" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-left">
  <li class="text-center">Welcome!</li> 
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <li><a href=""><i class="fa fa-user"></i>Login</a></li> 
  <li><a href=""><i class="fa fa-sign-in"></i>Register</a></li>
  <li><a href=""><i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"> Login with Facebook</a></li>
  <li><a href=""><i class="fa fa-google"></i>Login with Google</a></li>
  </ul>
 </div>
</div> </div></div>
</nav> 
</header>

 <main class="container">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="heading text-center">Register to My-Diary.org</h1>
 <div class="line"></div>
 <h5 class="heading text-center">Create your own diary</h5>
 </div>
 <div class="col-lg-8 col-lg-offset-2">
 <div class="box_in">
 <div class="row">
   <div class="col-lg-8 borderleft">
   <h3>Diary Register</h3>
<!--   <p><b>hotmail.com are currently delaying emails there, so try to use an email other than hotmail.com.</b><p> -->
   <p>Your verification code will be sent via email, so the email entered will have to be valid. Diaries are private by default. You can change this after logging in.</p>
   <form action="/create/" method='post' name='create' class='form_class'>
   <div class="row">
   <div class="col-lg-3">
   
   <label for="Email">Email</label>
   </div> <div class="col-lg-9">
   <input type='email' name='email' value="" size='30' class='form-control' required>
   </div></div>
   <input type=hidden name=action value="create">
  <div class="row">
    <div class="col-lg-3"></div> 
    <div class="col-lg-9">
   <div class="row"> <div class="col-lg-6"> <button type="submit" class="btn btn-default"><i class="fa fa-user-o"></i> Create diary</button></div> 
    <div class="col-lg-6"><a href="/manage/"> Already registered? <br>Log in!</a></div> </div> 
    </div>
   </div> 
   <small>Please note that no password is used yet. It will be created when your email-address is verified.<br>
   Read our <a href="/about/">privacy policy</a>
   </small>
   
 </form>
 </div>    
 <div class="col-lg-4">
 <h3>or connect with</h3>
  <a href='/create/?action=login_facebook' class='btn btn-default style_button mb'><i class='fa fa-facebook' aria-hidden='true'></i> Facebook</a>
   <a href='/create/?action=login_google' class='btn btn-default style_button'><i class='fa fa-google-plus' aria-hidden='true'></i> Google</a>
 </div>
</div> 
 </div>
 </div>
 </div>
</main>

<footer>
    <div class="container">
  <div class="row ">
   <div class="col-lg-4 text-left">
   
    <div style="floaT:left;width:100%;">
    <a href="#" style="floaT:left;"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo" style="width:150px;margin-right:10px;"></a>
    </div>
    Everyone can have their own personal online diary or journal on the Internet - it's free at my-diary.org! We will host your journal online at no cost. Go ahead and create your own private or public diary today.
   </div>
   <div class="col-lg-4 text-left">
   <h4>Subscribe to our Newsletter:</h4>There is also a newsletter.<br>Subscribe or unsubscribe <a href="/news">here.</a><p>If you have any suggestions or problems with this<br/> Internet diary, please let us know.
   </div>
   <div class="col-lg-4 text-left">
   <h4>Feel free to try out the (beta) app for Android</h4><a href="">my-diary.org app</a><br><small>Google Play and the Google Play logo are trademarks of Google Inc.</small>
   </div>
   </div> 
  <div class="row"> 
  <div class="social_buttons">  
   <div class="col-lg-6"> 
   </div>
   <div class="col-lg-6 text-right"> 
    &copy; my-diary.org. All rights reserved. 
    <br/> <small>Questions/feedback/problems? <a href="">Contact me</a></small>
   </div> 
  </div>
  </div>
  </footer>
  <!-- Global site tag (gtag.js) - Google Analytics -->

            
   
 </footer>
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

