<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
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

.box_in {
    background: rgba(0, 0, 0, 0.55);
    padding: 20px;
    border: 1px solid rgba(255, 255, 255, 0.55);
    border-radius: 5px;
    overflow: hidden;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); */
}
.box_in1 {
    background: rgba(0, 0, 0, 0.55);
    padding: 20px;
    border: 1px solid rgba(255, 255, 255, 0.55);
    border-radius: 5px;
    overflow: hidden;
}
    .tag {
    background: #000 none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.55);
    border-radius: 5px;
    font-size: 12px;
    left: 15%;
    margin: 0 auto;
    padding: 4px 10px;
    position: absolute;
    text-align: center;
    top: -8px;
    width: 70%;
}
 
 .box_in_small {
    background: rgba(0, 0, 0, 0.55) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.55);
    border-radius: 5px;
    font-size: 12px;
    margin-top: 20px;
    min-height: 165px;
    padding: 33px 15px;
    position: relative;
    text-align: center;
    margin-bottom: 20px;
    border-bottom:2px;
}
 .box_in_small h3{
 color:#fff;
 font-weight:300;
 font-size:20px;
    margin: 0 0 12px;
 }
 body{
    background-repeat: no-repeat !important ;
    background-attachment: fixed !important;
    background-size: cover; 
  }
  a.style_button_b{
    background: rgba(255, 255, 255, 0) none repeat scroll 0 0;
      border: 2px solid #46fbdf;
      border-radius: 5px;
      clear: both;
      color: #46fbdf;
      display: block;
      font-size: 14px;
      font-weight: 300;
      line-height: 29px;
      margin: 15px auto 10px;
      padding: 5px 20px;
      text-align: center;
      width: 180px;
  }
  </style>
  
</head>
<body background="<?php echo base_url('assets/bg1')?>.jpg">
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style=" border-bottom: 1px solid white;padding:6px;margin-left:100px ">
<header class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link text-white" href="<?php echo base_url().'Mydiary/about';?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Faq</a>
      </li>
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
    
      
      <ul id="socbar" class="nav navbar-nav navbar-right social">
      <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.my-diary.org/" class="" title="Share on Facebook" target="_blank" >
     <img src="<?php echo base_url('assets/fb.png')?>" height="16" width="16"></a>
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


    <div class="container">
    <div class ="main-content-1">
      <div class="row">
          <div class="col-lg-6">
           <div class="box_in">
            <img src="<?php echo base_url('assets/logo.png')?>" alt="my-diary.org logo">
           </div>
          </div>
         <div class="col-lg-6 mobile1">
            <div class="box_in" style="padding: 18px 20px 0;  min-height: 207px;">
                 
            <div class='row'>
                    <div class='col-lg-8 borderleft'>
                    <h3>Diary Login</h3>
                    <form class='form_class' action="<?=base_url('login_controller/login') ?>" method="post" name="login">
                    <div class='row'>
                    <div class='col-lg-3'>
                        <label for='exampleInputName2'>Username</label>
                    </div>
                    	<div class='col-lg-9'>
                            <input type='text' class='form-control' id='exampleInputName2' name="e">
                            </div></div>
                            <div class='row'>
                                <div class='col-lg-3'>
                                <label for='exampleInputEmail2'>Password</label>
                                </div>	<div class='col-lg-9'>
                                <input type="password" name="p" class='form-control' id='exampleInputEmail2' >
                                </div>
                            </div>
                            <input type="hidden" name=login value="1">
                        <div class='row'>
                                <div class='col-lg-3'></div>	
                                <div class='col-lg-10'>
                            <div class='row'> <div class='col-lg-4'> 
                            
                            <button type='submit' class='btn btn-default'style="color:#46fbdf;"><i class='fa fa-user-o'></i> Login</button></div>	
                            <div class='col-lg-8'><a href="<?php echo base_url().'Mydiary/register';?>"> Not registered? <br>Sign up today</a></div>	
                        </div>	
                        </div>
                            </div>
                    </div> 
                    <div class='col-lg-4'>
                    <h3>or login using</h3>
                    <a href="" class='btn btn-default style_button mb '><i class='fa fa-facebookx' aria-hidden='true'></i><img src='<?php echo base_url('assets/fb.png')?>' height='16' width='16'> Facebook</a>
                    <a href="" class='btn btn-default style_button mb'><i class='fa fa-google-plus' aria-hidden='true'style="color:#46fbdf;"></i> Google</a>
                    </div></div></form></div>  
                    </div>
                </div>
                    
                <div class="row mt">
                        <div class="col-lg-12">
                         <div class="box_in" style="width: 1110px;
                         height: 300px;">
                          <h1 class="heading text-center ">Welcome to the free online diary</h1>
                           <div class="line" ></div>
                           
                           <div class="row ">
                <div class="col-lg-offset-2 col-lg-8 text-center" style="margin-left:180px;weight:1250px>
                <p class="ribet " style="margin-left:100px;weight:1000px">
                Everyone can have their own personal diary or journal on the Internet - it's free at my-diary.org! <br>We will host your journal online at no cost. Go ahead and create your own public or private diary today.<br>Our focus is on security and privacy, and diaries are private by default.       </p>
                <a href="/create/" class="style_button_a" style="margin-left:250px">Create your diary!</a></div>
       
             </div>
                        </div>
                    </div>
                </div>
                 <div class="up" style="margin-top:20px;margin-left:410px;margin-bottom:20px">
                    <a href="https://upnode.no/">Visit upnode.no for premium hosting solutions</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                     <div class="box_in1">
                      <h2 class="heading text-center">- Public diaries -</h2>
                      <div class="line"></div>
                       <div class="row ">
                 
                        <div id="652384" class="col-lg-3">
                         <div class="box_in_small">
                         <div class="tag"><a href="/read/d/652384/blubutterfly221"><i class="fa fa-user"></i> blubutterfly221</div>
                         <h4><i class="fa fa-book"></i>  justkeepswimming</h4></a><a href="/read/e/545889043/first-therapist-encounter">First Therapist encounter</a>
                         <div class="l2"></div>
                         289 entries        </div>
                        </div>
                 
                        <div id="953921" class="col-lg-3">
                         <div class="box_in_small">
                         <div class="tag"><a href="/read/d/953921/boeliebreker"><i class="fa fa-user"></i> Boeliebreker</div>
                         <h4><i class="fa fa-book"></i>  Boeliebreker</h4></a><a href="/read/e/545888972/het-jy-al-n-stuk-gemors-gesien?">Het jy al n stuk gemors gesien?</a>
                         <div class="l2"></div>
                         7 entries        </div>
                        </div>
                 
                        <div id="667293" class="col-lg-3">
                         <div class="box_in_small">
                         <div class="tag"><a href="/read/d/667293/gabriela-alexis"><i class="fa fa-user"></i> Gabriela Alexis</div>
                         <h4><i class="fa fa-book"></i>  A</h4></a><a href="/read/e/545888963/long-time-no-type">Long time No Type</a>
                         <div class="l2"></div>
                         84 entries        </div>
                        </div>
                 
                        <div id="956078" class="col-lg-3">
                         <div class="box_in_small">
                         <div class="tag"><a href="/read/d/956078/souriene"><i class="fa fa-user"></i> souriene</div>
                         <h4><i class="fa fa-book"></i>  her cup of tea</h4></a><a href="/read/e/545888920/i-wish-i-was-a-cactus">i wish i was a cactus</a>
                         <div class="l2"></div>
                         10 entries        </div>
                        </div>
                 
                    <div class="row ">
                     <div class="col-lg-12 "><a href="/surf/" class="style_button_b " style="margin-left:460px">Read public diaries</a></div>
                    </div>
                   </div>
                  </div>
                 </div>
                 
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