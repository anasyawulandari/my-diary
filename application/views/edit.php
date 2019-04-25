<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Manage your diary</title>
  <link rel="icon" href="/assets/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
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
     <a href="" class="hidden-lg hidden-sm hidden-md"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo"></a>   
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
      <li class="logo hidden-xs"><a href="" class="logo"><img src="<?php echo base_url('assets/logo_small.png')?>" alt="my-diary.org logo"></a></li>
      <li><a href="">Public Diaries</a></li>
      <li><a href="">Manage your diary</a></li>

      <li><a href="<?php echo base_url().'Mydiary/about';?>">About</a></li>
      <li><a href="/faq/">Faq</a></li>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
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
      <li><a href="<?php echo base_url().'MyEntryControl/myentry';?>"><i class="fa fa-book"></i>My entries</a></li> 
      <li><a href="<?php echo base_url('mydiary/newEntry')?>"><i class="fa fa-plus"></i>Write new entry</a></li>
      <li><a href=""><i class="fa fa-user"></i>Account</a></li>
      <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
      <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
      <li><a href=""><i class="fa fa-history"></i>History</a></li>
      
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
      <li><a href="<?php echo base_url().'Mydiary/logout';?>"><i class="fa fa-sign-out"></i>Logout</a></li>
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
   <li><a href="<?php echo base_url('mydiary/myentry')?>"><i class="fa fa-book"></i>My entries</a></li> 
   <li><a href="<?php echo base_url('mydiary/newEntry')?>"><i class="fa fa-plus"></i>Write new entry </a></li>
   <li><a href="t"><i class="fa fa-user"></i>Account</a></li>
   <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
   <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
   <li><a href=""><i class="fa fa-history"></i>History</a></li>
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
  </ul>    
  <ul class="nav navbar-nav  navbar-right">
   <li class="text-center">Welcome <?php echo $nama?> !</li> 

  <li><a href="<?php echo base_url().'Mydiary/logout';?>"><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
 </div>
 </div></div></div>
</nav> 

<main class="container">
            <div class="row"><div class="col-lg-12">
      <h1 class="heading text-center">Welcome to your diary</h1>
     <div class="line"></div>
     <h5 class="heading text-center">Welcome to your diary</h5>
    </div>
  <div class="col-lg-12 col-lg-offset-0">
     <div class="box_in"><p><h3>Welcome to your diary</h3>
<div id=welcometext class=slab>
<br>This is the user-interface for your diary. On the 'Account'-page, you can change the information about
your diary, such as email-address, diary-name, username and password. <p>Use the links on the top of the page to navigate.</font>
<p>
Under 'Account', you can have information about yourself. If your diary is public, others can see the description you put there.<br>
To make a new entry in your diary, choose 'Write'. To read your previous entries, choose 'Past entries'.
<p>
Click <a href="">here </a>to tell a friend about the diary.
<p>

<p><b>Your diary is private. Others will not see what you write.</b>
<p>
Feel free to try out the (beta) <a target=_new href="https://www.my-diary.org/app/">Android app</a>
<p>
If you have any questions or suggestions, please feel free to mail me at <a href="mailto:support@my-diary.org">support@my-diary.org</a>
or use the <a href="" target=_new>contact-form</a>. There is also a <a href="" target=_new>newsletter</a>.
<p>
</div><h3>Recent changes</h3>
<ul>
 <li>2018-11-11
 <li>There's a new feature, allowing you to block messages from selected users.
</ul>
<ul>
 <li>2017-01-01
 <li>Major redesign of the pages. We're still working on adding themes back.
</ul>
<ul>
 <li>2016-08-07
 <li>The database and frontend have been moved to better and faster servers. Issues with speed should be solved.
</ul>
<ul>
 <li>2015-02-26:
 <li>Moved the "Color prefs" to the "Account" page. This was to make the menu bar better for mobile devices.
</ul>
<ul>
 <li>2015-01-25:
 <li>Messages should now be working for iPhone/iPad users aswell. Silly Apple using nonstandard stuff.
</ul>
<ul>
 <li>2015-01-21:
 <li>Entries submitted without titles will now get their title from the beginning of the entry itself. The entry title can still be edited, though.
</ul>
<ul>
 <li>2015-01-15:
 <li>The "Logout" link was moved to the line below. There's a "history" link that show the most recent logins/logouts with ip-addresses. Everyone now has access to the messaging system.
</ul>
<ul>
 <li>2014-12-19:
 <li>Changed the picture upload function a bit. It now has a progress bar etc.
</ul>
<ul>
 <li>2014-11-24:
 <li>A new messaging-system is being slowly rolled out. As usual, the ones that have
 <a href="/edit/?action=donate">donated</a> get to beta-test new features first.
 <a href="/contact/">Contact me</a> me if you have any questions or comments.
 Please note that during this test-period, these messages might not stay permanently
 and could be deleted at any time.
</ul>
<ul>
 <li>2014-11-10:
 <li>The feedbacks now require people to be logged in. This is partly to (soon) make it possible to block/follow the person sending feedback, but also to prepare for a new messaging system. <a href="/contact/">Let me know</a> what you think, please.
</ul>
<ul>
 <li>2014-10-30:
 <li>Changed the top menu a bit, preparing for the new messaging system. Home link now takes you to the frontpage of the site and the messages link to your messages/feedback. Let me know if anything seems confusing.
</ul>
<ul>
 <li>2014-09-10:
 <li>The date field for new entries has become more flexible. Try it out and let me know.
</ul>
<ul>
 <li>2014-08-19:
 <li>New users can now create their diaries using google and facebook. A feature for linking/unlinking your diary to a google or facebook account is also availabe under <a href="/edit/?action=account">"account"</a>. Let me know what you think of it.
</ul>
<ul>
 <li>2014-08-01:
 <li>You'll now be able to subscribe to diaries without having to fill out username and password every time. Just make sure you're logged in first.
</ul>
<ul>
 <li>2014-07-29:
 <li>Streamlined the pages a bit to show that you're still logged in while browsing the site outside the 'manage'-area.
</ul>
<ul>
 <li>2014-06-11:
 <li>Changed the top menu a bit
</ul>
<ul>
 <li>2012-01-10:
 <li>First release of the my-diary.org <a target=_new href="http://www.my-diary.org/app/">Android application</a>
</ul>
<ul>
 <li>2011-09-27:
 <li>The public section of the diary will now display the user date instead of the submitted date. This way, you can backdate your entries and they will show in the correct order in the public section (if your diary is public).
</ul>
<ul>
 <li>2011-09-24:
 <li>Added a social bar thing for the public diaries. Readers can click to like or share the entries. I'm not really sure if it's something I want there, but it should help increase exposure and generate hits. Let me know what you think about it please.
</ul>
<ul>
 <li>2011-09-20:
 <li>Added some the feedback text to be included in the reply. It was sometimes hard to remember what you had written in the original feedback :)
</ul>
<ul>
 <li>2011-09-11:
 <li>Some changes to the pictures-section. It's now possible to activate or delete pictures. Thumbnails are generated for all pictures.
 A lot of data is cached now, so please give me some feedback if you notice anything odd.
</ul>
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
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 </body>
</html>