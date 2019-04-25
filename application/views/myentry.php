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
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <style>
  body{
    background-repeat: no-repeat !important ;
    background-attachment: fixed !important;
    background-size: cover; 
  }
  .style_button_d{
    background: rgba(255, 255, 255, 0) none repeat scroll 0 0;
    border: 2px solid #46fbdf;
    border-radius: 5px;
    color: #46fbdf;
    display: block;
    font-size: 14px;
    font-weight: 300;
    line-height: 29px;
    padding: 0 20px;
    text-align: center;
    width: 160px;
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
      <li><a href="/">Manage your diary</a></li>

      <li><a href="">About</a></li>
      <li><a href="">Faq</a></li>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
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
   <li><a href=""><i class="fa fa-book"></i>My entries</a></li> 
   <li><a href=""><i class="fa fa-plus"></i>Write new entry </a></li>
   <li><a href=""><i class="fa fa-user"></i>Account</a></li>
   <li><a href=""><i class="fa fa-envelope"></i>Messages</a></li>
   <li><a href=""><i class="fa fa-gift"></i>Donate</a></li>
   <li><a href=""><i class="fa fa-history"></i>History</a></li>
   <li><a href=""><i class="fa fa-edit"></i>Languages</a></li>
  </ul>    
  <ul class="nav navbar-nav  navbar-right">
   <li class="text-center">Welcome</li> 

  <li><a href=""><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
 </div>
 </div></div></div>
</nav> 

<main class="container">
            <!-- <div class="row"><div class='alert alert-success mt1' role='alert'>Erased successful: me..</div>-->
            <div class="col-lg-12"> 
      <h1 class="heading text-center">Entries</h1>
     <div class="line"></div>
     <h5 class="heading text-center">Manage your entries</h5>
    </div> 
      <div class='col-lg-12 mt2'>
     <div class='box_in search_form'>
       <div class='row'>
       <div class='col-md-12'>
        <form class='form_class' method='post' action="">
         <div class='col-md-2'>
         <a href="<?php echo base_url().'Mydiary/newEntry';?>" class='style_button_d'><i class='fa fa-plus'></i> Write new entry</a>
         </div>
         <div class='col-md-3'>
         <div style='line-height: 32px;text-align:center;'> 0 entries</div>
         </div>
         <div class='col-md-1'></div> 
         <div class='col-md-4'>
         <input type='text' name='search' value="" class='form-control' id='exampleInputName2' placeholder='keywords'>
         </div>   
         <div class='col-md-2'>
         <input type=hidden name=action value="lookup">
         <button type='submit' class='btn btn-default'><i class='fa fa-search'></i> Search</button>
         </div>
        </form>
       </div>    
      </div>   
     </div>
                </div><div class='col-lg-12 mt2'>
 <div class='box_in' style='padding:20px 50px 15px;'>

 
 <?php if($entri != null) foreach($entri as $row){ ?>
 <div>
 <h2><?= $row->judul?></h2>
 <?= $row->isi?> </br>
 <?= $row->timestamp?>
 <a href= "<?php echo base_url('Mydiary/editentry/').$row->id_entry?>" class="btn btn-primary">
Edit</a>
<a href= "<?php echo base_url('Mydiary/deleteentry/').$row->id_entry?>" class="btn btn-primary">
Hapus</a>
 </div>
<?php } ?> 

 </div></div></div>
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
   <h4>Feel free to try out the (beta) app for Android</h4><a href="</small>
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

 </body>
</html>