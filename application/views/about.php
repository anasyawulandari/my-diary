<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>What is my-diary.org about?</title>
  <link rel="icon" href="/assets/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
     <a href="" class="hidden-lg hidden-sm hidden-md"><img src="assets/logo_small.png" alt="my-diary.org logo"></a>   
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
      <li class="logo hidden-xs"><a href="<?php echo base_url().'Mydiary/index';?>" class="logo"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo"></a></li>
      <li><a href="/surf/">Public Diaries</a></li>
      <li><a href="/manage/">Manage your diary</a></li>
    <li><a href="/create/">Create your own diary</a></li>
      <li><a href="/about/">About</a></li>
      <li><a href="/faq/">Faq</a></li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="/?hl=reset" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="flag-icon flag-icon-us"> </span> Language</a>
    <div class="dropdown-menu" aria-labelledby="dropdown09">
    <p>   <a class="dropdown-item" href="/?hl=no"><span class="flag-icon flag-icon-no"> </span>  Norwegian</a>
    <p>   <a class="dropdown-item" href="/?hl=en"><span class="flag-icon flag-icon-us"> </span>  English</a>
    <p>   <a class="dropdown-item" href="/?hl=th"><span class="flag-icon flag-icon-th"> </span>  Thai</a>
    </div>
    </li>

     </ul>

     <ul class="nav navbar-nav navbar-right hidden-lg hidden-md">
      <li><a href="/manage/"><i class="fa fa-user"></i>Login</a></li> 
      <li><a href="/create/"><i class="fa fa-sign-in"></i>Register</a></li>
      <li><a href="/create/?action=login_facebook"><i class="fa fa-facebook"></i><img src="<?php echo base_url('assets/fb.png')?>" height='16' width='16'> Login with Facebook</a></li>
      <li><a href="/create/?action=login_google"><i class="fa fa-google"></i>Login with Google</a></li>
     </ul>
        <ul id="socbar" class="nav navbar-nav navbar-right social">
        <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.my-diary.org/about/" class="btn btn-facebook" title="Share on Facebook" target="_blank" >
        <i class="fa fa-facebookx"></i><img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"></a>
        <a href="https://twitter.com/intent/tweet?text=A+free+online+diary&url=https://www.my-diary.org/about/" class="" title="Share on Twitter" target="_blank" >
        <i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/share?url=https://www.my-diary.org/about/" class="" title="Share on Google+" target="_blank" >
        <i class="fa fa-google-plus"></i></a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&ro=true&trk=frontpage&title=A+free+online+diary&url=https://www.my-diary.org/about/" class="" title="Share on Linkedin" target="_blank">
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
        <div id="frontpage-sidead"></div>
        <main class="container">
        <div class="row">
        <div class="col-lg-12">
        <h1 class="heading text-center">About this site</h1>
        <div class="line"></div>
        <h5 class="heading text-center">About this site</h5>
        </div>
        <div class="col-lg-12 col-lg-offset-0">
        <div class="box_in"><h3>About this site</h3><div id=about class=slab>

        This is a free service for anyone who wants to keep a personal online diary, and is
        designed to be fast and easy to use. You won't see much complicated design
        and heavy graphics here.
        <p>

        On the Internet, information is everything. Privacy is essential. I will
        not rent, sell or share your email-address or the information you give me with <b>anyone</b>.

        <p>

        If you decide to make your diary public, be very careful what personal
        information you put in it (eg. mail-adress, name, address).
        <br>There are lots of weird people out there. Trust me.

        <p>
        <a href="https://www.facebook.com/christian.nikolaisen/">I</a> try to have this site as
        secure as possible, and if you discover any problems, please <a href="/contact/">contact me</a>.
        <p></div>
        <p>
        <div id=diarytext class=slab>

        There are many types of diaries, and many choose to share different things. The usual definition is that a
        diary a dated record of what's happened.
        <br>
        Having it online provides many improvements to the old hand-written type.

        <ul>

        <li>It's more secure, since it requires login credentials to use. No longer will siblings, parents or spouses snoop in private diaries.
        <li>It has functions for backups, to prevent loss.
        <li>It's searchable. This makes it a lot easier to find past events from keywords or dates.
        <li>You can use the browsers spell check to get rid of pesky spelling errors.
        <li>You can optionally have your diary public, for the world to read. You can then also get feedback from other users, and have interesting conversations.

        </ul>
        </div>
        <p>

        <div id=typelist class=slab>
        I'll list some types of diaries that people tend to use.
        <ul>

        <li><a href="/about/types/#personal_diary">Personal diary</a>
        <li><a href="/about/types/#diet_diary">Diet diary</a>
        <li><a href="/about/types/#dream_diary">Dream diary</a>
        <li><a href="/about/types/#sleep_diary">Sleep diary</a>
        <li><a href="/about/types/#travel_diary">Travel diary</a>
        <li><a href="/about/types/#fictional_diary">Fictional diary</a>

        </ul>
        </div>

        <p><div id=full class=slab>Click <a href="/about/?full=1">here</a> to see our full privacy policy</div>
        </div>
        </div>
        </div>
        </main>
        <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-8439362526486885",
                enable_page_level_ads: true
            });
        </script> -->

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
        <!-- Global site tag (gtag.js) - Google Analytics
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178721-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-178721-1');
        </script> -->
                    
        
        </footer>
        
        </body>
        </html>
