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
   <li><a href=""><i class="fa fa-user"></i>Account</a></li>
   <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
   <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
   <li><a href=""><i class="fa fa-history"></i>History</a></li>
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
  </ul>    
  <ul class="nav navbar-nav  navbar-right">
   <li class="text-center">Welcome nasya01!</li> 

  <li><a href=""><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
 </div>
 </div></div></div>
</nav> 

<main class="container">
            <div class="row"><div class="col-lg-12">
     <h1 class="heading text-center">Account</h1>
     <div class="line"></div>
     <h5 class="heading text-center">Edit your account details</h5>
    </div>
    
    
   <div class="col-lg-12 col-lg-offset-0 mt2">
   <div class="box_in">
  <div class='diary_entry'>
      <div class='row '>
       <div class='col-md-6 col-xs-2'>
        <div>Details</div>
       </div>
       <div class='col-md-6 col-xs-10'>
        <div class='my_diary_options'>
         <a href='?action=update_pass'><i class='fa fa-check-square-o'></i> Change Password</a>
        </div>
       </div>
      </div>
     </div>
 <div class="row">
 <div class="col-md-8 my_account_details">
  <form action="" method=post class='form_class' accept-charset='UTF-8'>
  <input type=hidden name=action value=updateit><div id=accountbasics class=slab>
  <table class='table mt2 table_borderless'><tr>
      <td align=right><b><a href="">Your name</a></b></td>
       <td><input minlength=3 maxlength=50 name=username value="nasya01"></td>
      </tr><tr>
       <td align=right><b><a href="">Your email-address</a></b></td>
       <td><input minlength=4 maxlength=64 type="email" name="nemail" value=""></td>
      </tr><tr>
       <td align=right><b><a href="">Diary name</a></b></td>
       <td><input minlength=3 maxlength=120 name="name" value="awd28"></td>
      </tr><tr>
       <td align=right><b><a href=";">Language</a></b></td>
       <td><input minlength=3 maxlength=20 type=text name=lang value="English"></td>
      </tr><tr>
       <td align=right><b><a href="">Web page</a></b></td>
       <td><input type=text name=web value=""></td>
      </tr><tr>
       <td align=right><b><a href="">Reminder interval (days)</a></b></td>
       <td><input type=text name=nag value="60"></td>

      <tr>
       <td>&nbsp;</td>
       <td><input type="submit" value="update diary account"></td></tr></form></table> </div> </div>
        <div class="col-md-4">
       <div class="row" style="margin-top:15px;">
        <div class="col-md-3">
         <div>Picture:</div>
        </div>
        <div class="col-md-6">
         <div class="avatar_image_v2"><img src="<?php echo base_url('assets/image.jpg')?>"height="220px" width="150px"></div>
        </div>
        <div class="col-md-3">
         <a href='?action=pictures'><i class="fa fa-pencil-square-o"></i>Change picture</a>
        </div>
       </div>
 </div></div>
 </table>
 <hr>
 <table class='table table_borderless'>
 <tr>
     <td> <h3 style='margin:0;'>Your diary is <b>private</b></h3> </td>
  <td>
     
     <form method=post name=account_update_public action="">
   <b> <a href="javascript:showhelp('public');">Public </a></b>
     <input type=hidden name=action value="account_update_public">
     <label style='margin-left:20px;'>
        <input class=accountupdate prop="toggle_public" val=1 type=radio name=public value=1  onClick="document.account_update_public.submit()">  Yes

        </label>
     <label style='margin-left:15px;'>
     <input class=accountupdate prop="toggle_public" val=0 type=radio name=public value=0 checked=on onClick="document.account_update_public.submit()"> No

  </label>
     </form>
    </td>
   </tr>
   </table>
   <hr>
   <div class='row'>
   <div class='col-lg-12'>
   <div class="col-md-12">
        
   
   </div>Linking your diary to a social media  account lets you login to your diary by clicking the login button without entering your email and password. It does <b>not</b> share your diary or your entries.<h3 style='margin-top:10px;'>Click below to link/unlink:</h3>
     
  <div class="my_diary_third_party">
        <a href="/create/?action=login_google">
         <i class="fa fa-google"></i>Click here to link with Google
        </a>
        </div>
   
   <div class="my_diary_third_party">
        <a href="/create/?action=login_facebook">
         <i class="fa fa-facebook"></i>Click here to link with Facebook
        </a>
        </div>
     <!-- <br>Your diary can be linked to a facebook account if you're logged in to facebook. This will let you bypass typing in your username and password when you login.
     The site will then enable using facebook to validate your identity. You can change this later if you wish. -->
    
   </div></div><hr><div id=notifications class=slab><div class='row'>
  <form method=post name=updatenotifications action="" class="form_class">
   <div class='col-md-4'>
  <input type=hidden name=action value="updatenotifications">
  Message-notifications</div>
  <div class='col-md-8'>
  Get email when someone sends you a message?<br>

  <label style='margin-right:20px'>
  <input type=radio name=wfnot value=1  onClick="document.updatenotifications.submit()"> Yes
  </label>
  <label style='margin-right:20px'>
  <input type=radio name=wfnot value=0 checked=on onClick="document.updatenotifications.submit()"> No
  </label>
  </form>
  </div>
 <div class='col-md-4'>
   Timezone<br><b><small>2019-04-23 07:29:50</b></small></div>
    <div class='col-md-4'><form method=post action="" class="form_class"><select name=otz><option value="-12">UTC-12</option><option value="-11">UTC-11</option><option value="-10">UTC-10</option><option value="-9">UTC-9</option><option value="-8">UTC-8</option><option value="-7">UTC-7</option><option value="-6">UTC-6</option><option value="-5">UTC-5</option><option value="-4">UTC-4</option><option value="-3">UTC-3</option><option value="-2">UTC-2</option><option value="-1">UTC-1</option><option value="0" selected>UTC+0</option><option value="1">UTC+1</option><option value="2">UTC+2</option><option value="3">UTC+3</option><option value="4">UTC+4</option><option value="5">UTC+5</option><option value="6">UTC+6</option><option value="7">UTC+7</option><option value="8">UTC+8</option><option value="9">UTC+9</option><option value="10">UTC+10</option><option value="11">UTC+11</option><option value="12">UTC+12</option></select><input type="hidden" name="action" value="updatetz"> </td>
 </div><div class='col-md-4'><input type=submit value="Update Timezone" class='mobile1'></form>
    </div>
   </div> <div class='row mt1'>
   <div class='col-md-4'>
<b>About yourself:</b>
   </div>
   <div class='col-md-4'>
    <form action="" method=post class="form_class"><textarea class="form-control" name=description rows=6 cols=20 wrap=soft></textarea>
    <input type=hidden name=action value=updateprofile></div><div class='col-md-4'><input type=submit value="Update description" class='mobile1'></form>
   </div>
  </div></div><hr><div id=backup class=slab>
  Here you can download a backup of your diary. When you click the link below, a separate browser window will open. Please be patient while the download is prepared.<br><br>
  <form action="backup.php" method="post" target="_blank">
  <input type=hidden name=action value=backup>
  <input type=submit value="Download Backup">
  </form>
<!--
  <script language="javascript1.2">function backup(){window.open('backup.php','backup','height=400,width=400,resizable,scrollbars');}</script>
  <a href="javascript:backup();"> Download backup.</a><br><br>
-->
  </div><p><div id=notifies class=slab></div><hr><div id=erase class=slab>
          </form>
          <form action="" method=post>
           <input type=hidden name=action value=ERASE>
           <input type=submit value="Erase this diary"><br>
           (note that you will have to re-register as a user after using this)
          </form>
         
<!-- disabled for now
          <form action="" method=post>
           <input type=hidden name=action value=EMPTY>
           <input type=submit value="Empty all diary-entries">
          </form>
-->
  </div></div>
        </div></div>
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
    <br/> <small>Questions/feedback/problems? <a href="">Contact me</a></small>
   </div>
  </div>
  </div>
  </footer>
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

