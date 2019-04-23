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
  <style>
  body{
      background-repeat: no-repeat !important ;
    background-attachment: fixed !important;
    background-size: cover; 
  }
  </style>
  </head>

<body background="<?php echo base_url('assets/bg1')?>.jpg">
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
      <li><a href="/surf/">Public Diaries</a></li>
      <li><a href="/manage/">Manage your diary</a></li>
<li><a href="/create/">Create your own diary</a></li>
      <li><a href="/about/">About</a></li>
      <li><a href="/faq/">Faq</a></li>

     </ul>

     <ul class="nav navbar-nav navbar-right hidden-lg hidden-md">
      <li><a href="/manage/"><i class="fa fa-user"></i>Login</a></li> 
      <li><a href="/create/"><i class="fa fa-sign-in"></i>Register</a></li>
      <li><a href="/create/?action=login_facebook"><i class="fa fa-facebookx"></i><img src='<?php echo base_url('assets/fb.png')?>' height='16' width='16'> Login with Facebook</a></li>
      <li><a href="/create/?action=login_google"><i class="fa fa-google"></i>Login with Google</a></li>
     </ul>
  <ul id="socbar" class="nav navbar-nav navbar-right social">
  <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.my-diary.org/create/?vcode=8c5d7b1f89061dc18da27d369890463d" class="btn btn-facebook" title="Share on Facebook" target="_blank" >
  <i class="fa fa-facebookx"></i><img src="/images/flogo-250.png" height="16" width="16"></a>
  <a href="https://twitter.com/intent/tweet?text=A+free+online+diary&url=https://www.my-diary.org/create/?vcode=8c5d7b1f89061dc18da27d369890463d" class="" title="Share on Twitter" target="_blank" >
  <i class="fa fa-twitter"></i></a>
  <a href="https://plus.google.com/share?url=https://www.my-diary.org/create/?vcode=8c5d7b1f89061dc18da27d369890463d" class="" title="Share on Google+" target="_blank" >
  <i class="fa fa-google-plus"></i></a>
  <a href="http://www.linkedin.com/shareArticle?mini=true&ro=true&trk=frontpage&title=A+free+online+diary&url=https://www.my-diary.org/create/?vcode=8c5d7b1f89061dc18da27d369890463d" class="" title="Share on Linkedin" target="_blank">
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
  <li><a href="/manage/"><i class="fa fa-user"></i>Login</a></li> 
  <li><a href="/create/"><i class="fa fa-sign-in"></i>Register</a></li>
  <li><a href="/create/?action=login_facebook"><i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"> Login with Facebook</a></li>
  <li><a href="/create/?action=login_google"><i class="fa fa-google"></i>Login with Google</a></li>
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
<p><div id=create-error class=slab>
 <div class="row">
 <div class="col-lg-12">
   <h3>Create diary</h3>
   <form method=post action="/verify/" name="verify" class='form_class'><input type=hidden name=code value="8c5d7b1f89061dc18da27d369890463d">
  <div class="row">
   <div class="col-lg-3">
    <label for="Email">Email</label>
   </div> 
   <div class="col-lg-9">
    anasya.wulan@yahoo.com
    <small style='clear:both;float:left'>You use this to log in. If you forget your password, this is where we can send it.</small>
   </div>
  </div>
  <div class="row">
   <div class="col-lg-3">
    <label for="Diary name">Diary name</label>
   </div> 
   <div class="col-lg-9">
    <input name="diaryname" class="form-control" id="Diaryname" required>
    <small>This is the name of your diary. If your diary is public, others will see this.</small>
   </div>
  </div>
  <div class="row">
   <div class="col-lg-3">
    <label for="Username">Usernamew</label>
   </div> 
   <div class="col-lg-9">
    <input name="username" class="form-control" id="Username" required>
    <small>If your diary is public, this is the name others will know you by.</small>
   </div>
  </div>  
  <div class="row">
   <div class="col-lg-3">
    <label for="Password">Password</label>
   </div> 
   <div class="col-lg-9">
    <input name="password" type="password" class="form-control" id="Password">
    <small>This is the password for your diary. If you leave it blank, a random password will be generated for you.</small>
   </div>
  </div>
  
  <input type=hidden name=action value=create>
  <div class="row">
    <div class="col-lg-3"></div> 
    <div class="col-lg-9">
   <div class="row"> <div class="col-lg-6"> <button type="submit" class="btn btn-default"><i class="fa fa-user-o"></i> Create diary</button></div> 
    <div class="col-lg-6"></div> 
    </div>
   </div> 
   
   
 </form>
 </div></div></div>    
</div></main>  </div>
 </div>
 </div>
</main>

<footer>
    <div class="container">
  <div class="row ">
   <div class="col-lg-4 text-left">
   
    <div style="floaT:left;width:100%;">
    <a href="#" style="floaT:left;"><img src="<?php echo base_url('assets/logo.png')?>" alt="my-diary.org logo" style="width:150px;margin-right:10px;"></a>
    </div>
    Everyone can have their own personal online diary or journal on the Internet - it's free at my-diary.org! We will host your journal online at no cost. Go ahead and create your own private or public diary today.
   </div>
   <div class="col-lg-4 text-left">
   <h4>Subscribe to our Newsletter:</h4>There is also a newsletter.<br>Subscribe or unsubscribe <a href="/news">here.</a><p>If you have any suggestions or problems with this<br/> Internet diary, please let us know.
   </div>
   <div class="col-lg-4 text-left">
   <h4>Feel free to try out the (beta) app for Android</h4><a href="https://play.google.com/store/apps/details?id=no.bellum.diary">my-diary.org app</a><br><small>Google Play and the Google Play logo are trademarks of Google Inc.</small>
   </div>
   </div> 
  <div class="row"> 
  <div class="social_buttons">  
   <div class="col-lg-6"> 
   </div>
   <div class="col-lg-6 text-right"> 
    &copy; my-diary.org. All rights reserved. 
    <br/> <small>Questions/feedback/problems? <a href="/contact/">Contact me</a></small>
   </div> 
  </div>
  </div>
  </footer>
 
            
   
 </footer>
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
