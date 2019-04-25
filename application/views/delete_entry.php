<!DOCTYPE html>
<html lang="en">
 <head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  
  <title>Manage your diary</title>
  <link rel="icon" href="/assets/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>"/>
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
     <a href="/" class="hidden-lg hidden-sm hidden-md"><img src="/assets/img/logo_small.png" alt="my-diary.org logo"></a>   
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

      <li><a href="">About</a></li>
      <li><a href="">Faq</a></li>


 <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="flag-icon flag-icon-us"> </span> Language</a>
  <div class="dropdown-menu" aria-labelledby="dropdown09">
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-no"> </span>  Norwegian</a>
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-us"> </span>  English</a>
<p>   <a class="dropdown-item" href=""><span class="flag-icon flag-icon-th"> </span>  Thai</a>
  </div>
 </li>

     </ul>

     <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
      <li><a href=""><i class="fa fa-book"></i>My entries</a></li> 
      <li><a href=""><i class="fa fa-plus"></i>Write new entry</a></li>
      <li><a href=""><i class="fa fa-user"></i>Account</a></li>
      <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
      <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
      <li><a href=""><i class="fa fa-history"></i>History</a></li>
      
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
      <li><a href=""><i class="fa fa-sign-out"></i>Logout</a></li>
     </ul> 
  <ul id="socbar" class="nav navbar-nav navbar-right social">
  <a href="" class="btn btn-facebook" title="Share on Facebook" target="_blank" >
  <i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"></a>
  <a href="" class="" title="Share on Twitter" target="_blank" >
  <i class="fa fa-twitter"></i></a>
  <a href="" class="" title="Share on Google+" target="_blank" >
  <i class="fa fa-google-plus"></i></a>
  <a href="">
  <i class="fa fa-linkedin"></i></a>
  
  </ul>
     </div>
    </div>
   </div>
  </div>
 </nav><nav class="navbar navbar-default navbar-small hidden-xs">
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
  <ul class="nav navbar-nav">
   <li><a href=""><i class="fa fa-book"></i>My entries</a></li> 
   <li><a href=""><i class="fa fa-plus"></i>Write new entry </a></li>
   <li><a href="<?php echo base_url('mydiary/account')?>"><i class="fa fa-user"></i>Account</a></li>
   <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
   <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
   <li><a href=""><i class="fa fa-history"></i>History</a></li>
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
  </ul>    
  <ul class="nav navbar-nav  navbar-right">
   <li class="text-center">Welcome  <?php echo $nama?>!</li> 

  <li><a href=""><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
 </div>
 </div></div></div>
</nav> 

<main class="container">
            <div class="row"><div class="col-lg-12">
 <h1 class="heading text-center">Delete Entry</h1>
 <div class="line"></div>
 <h5 class="heading text-center">confirm delete</h5>
 </div><div class="col-lg-12 col-lg-offset-0 mt2">
 <div class="box_in">
 <h1><font color=white>Please confirm deletion of entry "<?php echo $entry->judul?>"</h1></font>
 <form action="<?= base_url('mydiary/deleteentry/'.$entry->id_entry);?>">
 <input type=hidden name=action value="CONFIRMED_eraseentry">
 <input type=hidden name=entryid value="545894864">
 <input type=submit value="Delete entry ">
 <a href='?action=viewentry&entryid=545894864'> Cancel</a>
  </form>
 </div>
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
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 </body>
</html>