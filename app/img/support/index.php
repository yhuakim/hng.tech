<?php include '../header.php';?>
<style type="text/css">
*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
img {
  max-width:100%;
}

.card-grid {
  width:100%;
  margin-top: 11%;
}
.card-grid:after {
  content: "";
  display: table;
  clear: both;
}
.card:hover{
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
  border: 1px solid rgba(0, 174, 255, 0.5);
}



.card-wrap {
  float:left;
  width:100%;
  padding:5px;
}
@media (min-width: 500px) {
  .card-wrap {
    width:50%;
  }
}
@media (min-width: 720px) {
  .card-wrap {
    width:25%;
  }
}


.card {
  background-color:white;
  border-radius:5px;
  border:1px solid #ccc;
  border-bottom:2px solid #ccc;
}
.card > div {
  padding:0 1em;
}
</style>
<div class="container">
  <h1 class="display-4 support-head-text"><strong>Support the Mission</strong></h1>
</div>
<div class="row support-intro">
  <div class="container">
    <div class="col-md-7 " style="margin-bottom: 32px;">
      <div class="hng-title">The HNG Internship</div>
      <div class="support-quote">
        “the interns use this money to finance their participation in the internship”
      </div>
      <div class="support-text">
        The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship. The interns use this money to finance their participation in the internship. You can support in multiple ways - the most important way is to take on one of our interns in your organisation.<br> <br>

        Outside of that, you can co-finance an internship. We will use your product as part of the internship then (it’s good to have your product in front of 4,000 learning developers), and probably be the first tool they ever use.<br><br>

        Or you can just contribute directly (we are a non-profit and tax deductable). We have two addresses you can contribute to - For Everyone or Female-Only.”
      </div>
    </div>
    <div class="col-md-5">
      <img class="support-picture" src="../app/img/man-woman.png" />
    </div>
</div>
</div> 
<div class="row learn">
  <div class="container">
    <div class="card-grid">
      <div class="card-wrap">
        <div class="">
          <div>
            <p class="structure">Want to contribute?</p>
            <hr class="hr2"/><br>
            <p class="structure-sub">The HNG Internship does not earn any money.</p>
          </div>
        </div>
      </div>
      <div class="card-wrap">
        <div class="card">
           <img src="../app/img/stripe.svg" alt="stripe" class="learn-icon">
          <div>
          <h6 class="learn-icon-text" style="padding-top: 0px;">The HNG Internship does not earn any money.</h6>
          <div class="arrow">
            <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
            </svg>
          </div>
          </div>
        </div>
      </div>
      <div class="card-wrap">
        <div class="card">
            <img src="../app/img/paystack.svg" alt="stripe" class="learn-icon">
          <div>
            <h6 class="learn-icon-text" style="padding-top: 14px;">The HNG Internship does not earn any money.</h6>
            <div class="arrow" style="margin-top: 39px;">
              <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="card-wrap">
        <div class="card">
            <img src="../app/img/coin.svg" alt="stripe" class="learn-icon" style="margin-top: 24px;">
          <div>
            <h6 class="learn-icon-text" style="margin-top: -20px;">The HNG Internship does not earn any money.</h6>
            <div class="arrow" style="margin-top: 39px;">
              <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- <div class="container" style="margin-top: 124px;">
  <div class="col-md-3 mobil">
    <p class="structure">Want to contribute?</p>
    <hr class="hr2"/><br>
    <p class="structure-sub">The HNG Internship does not earn any money.</p>
  </div>
  <div class="col-md-2">
      <div class="learn-box">
        <img src="../app/img/stripe.svg" alt="stripe" class="learn-icon">
        <h6 class="learn-icon-text" style="padding-top: 0px;">The HNG Internship does not earn any money.</h6>
        <div class="arrow">
          <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
          </svg>
        </div>

      </div>
  </div>
  <div class="col-md-2  mobil">
    <div class="learn-box">
        <img src="../app/img/paystack.svg" alt="stripe" class="learn-icon">
        <h6 class="learn-icon-text" style="padding-top: 14px;">The HNG Internship does not earn any money.</h6>
        <div class="arrow" style="margin-top: 39px;">
          <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
          </svg>

        </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="learn-box">
        <img src="../app/img/coin.svg" alt="stripe" class="learn-icon" style="margin-top: 24px;">
        <h6 class="learn-icon-text" style="margin-top: -20px;">The HNG Internship does not earn any money.</h6>
        <div class="arrow" style="margin-top: 39px;">
          <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
          </svg>
        </div>
    </div>
  </div>
</div> -->
</div>

<div class="row sponsor">
  <div class="container">
    <div class="col-md-12" style="">
      <p class="sponsor-heading">Sponsor underrepresented groups</p>
    </div>
    <div class="col-md-5">
      <img src="../app/img/woman-dot.png">
    </div>
    <div class="col-md-6 mobile " style="margin-top: -73px; z-index: 1;">
      <div>
        <div class="support-list" style="margin-bottom: 10px">
          <img src="../app/img/fem.svg" alt="1" class="number">
          <div class="checked-text"><strong>Female Developers and Designers</strong><br>
          <!-- <div class="checked-text"> -->
            The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.<br>
            <p style="margin-top: 10px; margin-bottom: 30px; cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter"><img src="../app/img/arrow-circle.svg"> Get started</p>
          </div>
        </div>
        <div class="support-list" style="margin-top: 97px;">
          <img src="../app/img/user-interface.svg" alt="2" class="number">
          <div class="checked-text"><strong>User Interface Designers</strong><br>
          <!-- <div class="checked-text"> -->
            The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.<br>
            <p style="margin-top: 10px; margin-bottom: 30px cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter"><img src="../app/img/arrow-circle.svg"> Get started</p>
          </div>
        </div>
        <div class="support-list" style="margin-top: 97px;">
          <img src="../app/img/tools.svg" alt="3" class="number">
          <div class="checked-text"><strong>Sponsor via software or tool</strong><br>
          <!-- <div class="checked-text"> -->
            The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.<br>
            <p style="margin-top: 10px; margin-bottom: 30px; cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter"><img src="../app/img/arrow-circle.svg"> <span>Get started</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="row learn lea">
  <div class="col-md-12" style="margin-top: 126px; margin-bottom: 40px;">
    <p class="helping-text">Helping thousands of interns realize their tech careers paths</p><br>
    <p class="helping-text2">The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship. The interns use this money to finance their participation in the internship.</p>
  </div>
  <div class="col-md-2" style="margin-right: 57px"><img src="../app/img/hng.svg"></div>
  <div class="col-md-2" style="margin-right: 57px"><img src="../app/img/akwa.svg"></div>
  <div class="col-md-2 mobile" style="margin-right: 57px"><img src="../app/img/oracle.svg"></div>
  <div class="col-md-2" style=""><img src="../app/img/figma.svg"></div>
  <div class="col-md-2 mobile2" ><img src="../app/img/bluechip.svg"></div>
</div>
</div>

<?php include '../footer.php';?>