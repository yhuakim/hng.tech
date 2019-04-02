<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
 <title>The HNG Internship</title>
  <link rel="stylesheet" href="http://localhost/internship/doll.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="app/img/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
  body {
    background-image: url(app/img/homepage-bg.png);
    background-size: cover;
    font-weight: 300;
    overflow: -moz-scrollbars-vertical;
    overflow-y: hidden !important;
    overflow-x: auto;
  }
  .no-scroll{
    overflow: -moz-scrollbars-vertical;
    overflow-y: hidden !important;
    overflow-x: auto;
  }
  .jumbotron {
     padding: 0rem 0rem !important; 
     margin-bottom: 0rem !important; 
    background-color: #e9ecef;
    border-radius: .3rem;
  }
  .jumbotron {
     padding: 0rem 0rem !important; 
     margin-bottom: 0rem !important; 
    background-color: #e9ecef;
    border-radius: .3rem;
  }
  .active > a{
    border-bottom: 2px solid #00AEFF;
    font-family: Helvetica Neue;
    line-height: normal;
    font-size: 14px;
    text-transform: uppercase;
    color: #00AEFF; 
  }
  .sidenav {
    height: 100%; 
    width: 0; 
    position: fixed; 
    z-index: 1; 
    top: 0; 
    left: 0;
    background-color: #e7eaec; 
    overflow-x: hidden; 
    padding-top: 60px; 
    transition: 0.5s; 
    right: 0;
  }

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000;
    display: block;
    transition: 0.3s;
}
.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    margin-top: 38px;
}

#main {
    transition: margin-left .5s;
    padding: 20px;
}

  @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
  }
  .suum{
    margin-top: -13px;
  }
  @media (min-width: 576px){
    .jumbotron {
       padding: 0rem 0rem !important; 
    }
  }
  .welcome-text{
    margin-top: 50px;
  }
   .nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
     background-color: #ffffff00 !important; 
  }


  

  </style>
  <body>
    <?php 
    $logo       = 'app/img/brand-logo.svg'; 
    $about      = 'about'; 
    $interns    = 'interns'; 
    $support    ='support'; 
    $beAnIntern ='beanintern' ?>
    <div class=" JumboHeaderImg">
          <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img style="margin-left: 87px;" src="<?php echo $logo ?>" alt="logo">
      </a>
    </div>
    <ul class="nav navbar-nav" style="float: right">
      <li class="nav-item <?php if($url == 'about'){echo 'active';}?> ">
      <a class="navbar-link nav-text" href="<?php echo $about ?>">WHAT IS THE INTERNSHIP?</a>
    </li>
    <li class="nav-item <?php if($url == 'interns'){echo 'active';}?> ">
      <a class="navbar-link nav-text" href="<?php echo $interns ?>">THE INTERNS (SO FAR)</a>
    </li>
    <li class="nav-item <?php if($url == 'support'){echo 'active';}?>">
      <a class=" navbar-link nav-text" href="<?php echo $support ?>">SUPPORT THE MISSION</a>
    </li>
    <li class="nav-item <?php if($url == 'beanintern'){echo 'active';}?>">
      <a class=" navbar-link nav-text" href="<?php echo $beAnIntern ?>">BECOME AN INTERN</a>
    </li>
    </ul>
  </div>
</nav>
<div class="container" style="margin-left: 87px;">
  <div class="row">
    <div class="col-md-6">
      <h3 class="hng-text">The HNG Internship</h3>
      <h1 class="display-4"><strong>Perfection is always under construction</strong></h1>
      <p class="lead">The HNG Internship is an ambitious attempt to change the way education is done in Africa.
       It’s the bridge between learning to code, and becoming the best in the world.</p>
    </div>
  </div>
</div>
    <!-- Toon characters-->
<div class="container" style="">
 <div class="row">
    <div class="mt-1 toon-group col-md-6" style="">
      <div class="toon-characters">
        <img class="ladytoon-hidden-phone" src="app/img/blue-lady.svg" alt="lady-toon">
      </div>
      <div class="toon-characters">
        <img class="bag-hidden-phone" src="app/img/bag.svg" alt="bag">
      </div>
      <div class="toon-characters">
        <img class="intern-hidden-phone" src="app/img/new-intern.svg" alt="intern">
      </div>
      <div class="toon-characters">
        <img class="hijab-hidden-phone" src="app/img/hijab.svg" alt="lady with hijab">
      </div>
      <div class="toon-characters">
        <img class="cto-hidden-phone" src="app/img/cto.svg" alt="cto-toon">
     </div>
    </div>

    <div class="smallImg-group">
      <img src="app/img/img-group.svg" alt="small">
    </div>
    <div class="mediumImg-group">
      <img src="app/img/img-medium.svg" alt="medium">
    </div>
     <!--<div class="largeImg-group">
      <img src="app/img/imglarge.svg" alt="large">
    </div> -->
    <div class="mt-3 toon-group col-md-6" style="">
      <div class="toon-characters">
        <img class="bluecamo-hidden-phone" src="app/img/lady-visitor.svg" alt="blue-camo">
      </div>
      <div class="toon-characters" style="">
        <img class="office-hidden-phone" src="app/img/office.svg" alt="office">
      </div>
    </div>
  </div>
</div> 
     <!--floor-->
</div>
  <img src="app/img/floor.svg" width="100%" height=""  style="margin-top: -2%">
    <script type="text/javascript">
      function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    $(".navbar-toggler").prop('disabled',true);

}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $(".navbar-toggler").prop('disabled',false); 
}

    </script>
  </body>
</html>
