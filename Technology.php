<?php
 

 include 'header.php';

?>


<div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Log In</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class="bx bx-chevrons-right"></i>
                    </li>
                    <li>Log In</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>

    <!-- card -->
    
    <!-- new section -->
    <section class="large-cta-section skrollable skrollable-between">
  <div class="medium-large-wrapper skrollable skrollable-after">
    <div class="medium-text-wrapper">
      <h2 class="h2 large white">Get started <span class="yellow">today</span>.</h2>
      <h3 class="h3 white">Our software is here to empower your business and drive success</h3>
      <a class="cta-link footer-cta-link" href="contact.php" alt="Try NeverBounce for free">Find Us</a>
    </div>
  </div>
  <img class="cta-purple-email skrollable skrollable-after" src="https://neverbounce.com/images/background-images/cta-purple-email.png" alt="email illustration">
  <img src="https://neverbounce.com/images/background-images/cta-left-line.svg" class="cta-left-line" alt="graphic line element">
 
  <img class="cta-blue-email skrollable skrollable-between" src="https://neverbounce.com/images/background-images/cta-blue-email.png" alt="email illustration">
</section>

  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);
.contact-form {
    margin-top: 30px;
}

.contact-form .input-block {
    background-color: rgba(255, 255, 255, 0.8);
    border: solid 1px #FF512F;
    width: 100%;
    height: 40px;
    padding: 25px;
    position: relative;
    margin-bottom: 20px;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.contact-form .input-block.focus {
    background-color: #fff;
    border: solid 1px #fb2900;
}

.contact-form .input-block.textarea {
    height: auto;
}

.contact-form .input-block.textarea .form-control {
    height: auto;
    resize: none;
}

.contact-form .input-block label {
    padding: 0 10px;
    background: #fff;
    position: absolute;
    left: 8px;
    top: 20px;
    display: block;
    margin: 0;
    font-weight: 300;
    z-index: 1;
    color: #999;
    font-size: 18px;
    line-height: 10px;
}

.contact-form .input-block .form-control {
    background-color: transparent;
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    color: #333;
    font-size: 18px;
    height: 40px;
    padding: 0;
    position: relative;
    top: -20px;
    z-index: 2;
}

.contact-form .input-block .form-control:focus label {
    top: 0;
}

.contact-form .square-button {
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmNTEyZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RkMjQ3NiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #ff512f), color-stop(100%, #dd2476));
    background-image: -moz-linear-gradient(left, #ff512f, #dd2476);
    background-image: -webkit-linear-gradient(left, #ff512f, #dd2476);
    background-image: linear-gradient(to right, #ff512f, #dd2476);
    color: #fff;
    font-size: 26px;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 0 60px;
    height: 60px;
    border: none;
    width: 100%;
}

.contact-form .square-button:hover,
.contact-form .square-button:focus {
    background-color: white;
}

@media (min-width: 768px) {
    .contact-wrap {
        width: 60%;
        margin: auto;
    }
}
/*----page styles---*/
.contact-wrap {
    padding: 15px;
}
.large-cta-section {
    background: #1e9fc4 linear-gradient(45deg, #3e3ed0, #1e9fc4 57%, #4fddd5) repeat scroll 0 0;
    box-shadow: 0 6px 12px -4px rgba(54, 56, 66, 0.25) inset;
    text-align: center;
    z-index: 1;
    height: 400px;
    position: relative;
    overflow: hidden;
}
.medium-large-wrapper{
    padding-top: 50px;
}
.h2.large {
    display: inline-block;
    font-size: 5em;
    font-family: "Roboto",sans-serif;
}
.white {
    color: #fff;
}
.h2 > .yellow {
    color: #f5ee33;
    font-weight: 600;
}
.h3 {
    font-family: "Roboto",sans-serif;
    font-size: 1.4em;
    font-weight: 300;
    line-height: 1.8rem;
    margin-top: 10px;
    margin-bottom: 40px;
}



.cta-link {
    background: #fff none repeat scroll 0 0;
    border-radius: 4px;
    color: #1e9fc4;
    letter-spacing: 2px;
    line-height: 1rem;
    margin-left: 1em;
    margin-right: 1em;
    margin-top: 4em;
    padding: 0.88rem 1.5em;
    text-decoration: none;
    text-transform: uppercase;
    transition: background 0.2s ease-in-out 0s;
    vertical-align: middle;
}
a.cta-link:hover{
    background: #f5ee33;
    text-decoration: none;
}
.cta-purple-email {
    left: 0;
    position: absolute;
    top: 5em;
    z-index: 0;
    transform: translate3d(0px, 0%, 0px);
}
.cta-blue-email {
    bottom: -45px;
    position: absolute;
    right: 15%;
    width: 15em;
    z-index: 0;
    transform: translate3d(86.875px, -8.6875%, 0px);
}

.cta-left-line {
    left: 0;
    opacity: 0.7;
    pointer-events: none;
    position: absolute;
    top: -38em;
    z-index: 0;
}
.cta-teal-airplane {
    opacity: 0.8;
    pointer-events: none;
    position: absolute;
    right: 10px;
    top: 3em;
    width: 15em;
    z-index: 4;
}
.made-with-love {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 12px;
    font-family: arial;
    color: #666;
}

.made-with-love i {
    font-style: normal;
    color: #F50057;
    font-size: 14px;
    position: relative;
    top: 2px;
}

.made-with-love a {
    color: #666;
    text-decoration: none;
}

.made-with-love a:hover {
    text-decoration: underline;
}
  </style>

    <!-- end new  -->
   
  <section class="wrapper technology">
    <div class="container-fostrap">
        <div>
        <h4 class="heading">
            Is technology adaptation giving tremors across your Organization?
            </h4>
        
        <a href="contact.php" class="fostrap-logo"><img src="assets/images/click.png" alt="HTML tutorial"></a>
           
           
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                          
                            <img src="assets/images/cloud-1.gif"  style="height: 150px; width:250px;"/>
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href=""> Any to Any Migration
                                </h4>
                                <p class="">
                                Seamlessly transfer your data, applications, and configurations between different platforms, regardless of the source and destination. Say goodbye to complex migration challenges and ensure a smooth transition with our efficient and reliable solution
                                </p>
                            </div>
                            <div class="card-read-more">
                            <a href="contact.php" class="btn btn-link btn-block">
                                  Find US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                           
                            <img src="assets/images/06536ecf34e982ce94830965cbf58011_w200.gif" style="height: 150px; width:250px;" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#"> Implementation

                                  </a>
                                </h4>
                                <p class="">
                                Our team of experts will guide you through every step, from initial planning to final deployment Maximize efficiency and minimize downtime with our professional implementation services. we ensure a seamless integration of our software into your existing systems
                                </p>
                            </div>
                            <div class="card-read-more">
                            <a href="contact.php" class="btn btn-link btn-block">
                                  Find US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                    <div class="card">
                           
                           <img src="assets/images/DevotedEthicalFlyingfox-max-1mb.gif"style="height: 150px; width:250px;" />
                         </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Cloud Architecture
                                  </a>
                                </h4>
                                <p class="">
                                The power of cloud architecture and unlock unparalleled scalability and flexibility for your business.Our cloud architecture solution provides a robust and secure infrastructure that enables seamless data storage, rapid deployment, and effortless scalability
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="contact.php" class="btn btn-link btn-block">
                                  Find US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

.technology {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%; 
  background: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
 
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}
  </style>
    <!-- end card -->


    <!-- new services -->
    
    <section id="our-services">
  <div class="container">
    <div class="desc">
      <div class="heading">
        <h1>MINDSTORM SERVICES
</h1>
      </div>
      <div class="text">
        <p> </p>
      </div>
    </div>
    <div class="services">

      
      <div class="column" id="column-1">
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-flask">

            </i>
            <p class="service-txt">
            Billing Software
            </p>                       
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-bullhorn">

            </i>
            <p class="service-txt">
            Hotel Management
            </p>
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon far fa-lightbulb">

            </i>
            <p class="service-txt">
            CRM
            </p>
          </div>
        </div>
      </div>

      <div class="column" id="column-2">
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-wrench">

            </i>
            <p class="service-txt">
              HRM
            </p>
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-database">

            </i>
            <p class="service-txt">
              FINCAP
            </p>
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-chart-pie">

            </i>
            <p class="service-txt">
            E-Commerce
            </p>
          </div>
        </div>
      </div>

      <div class="column" id="column-2">
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-tasks">

            </i>
            <p class="service-txt">
            Tech Solutions
            </p>                            
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-certificate">

            </i>
            <p class="service-txt">
            Creative Endeavors
            </p>
          </div>
        </div>
        <div class="service ">
          <div class="service-desc">
            <i class="service-icon">

            </i>
            <p class="service-txt">
            Data Analytics Initiatives
            </p>
          </div>
        </div>
      </div>
      
      <div class="column" id="column-2">
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-tasks">

            </i>
            <p class="service-txt">
            Development Programs
            </p>                            
          </div>
        </div>
        <div class="service">
          <div class="service-desc">
            <i class="service-icon fas fa-certificate">

            </i>
            <p class="service-txt">
            Supply Chain Improvements
            </p>
          </div>
        </div>
        <div class="service ">
          <div class="service-desc">
            <i class="service-icon">

            </i>
            <p class="service-txt">
            Marketing Campaigns
            </p>
          </div>
        </div>
      </div>
      
      
      
    </div>
    <div class="clear-fix"></div>
  </div>
  
</section>
    <!-- end services  -->
<style>
    /*start global */

@import url('https://fonts.googleapis.com/css?family=Roboto');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

.container {
    max-width: 1170px;
    margin: auto;
    padding-right: 15px;
    padding-left: 15px;
}

.heading h1:after {
    content: '';
    display: block;
    width: 8px;
    height: 2px;
    background: #BABABA;
    margin-top: 4px;
    
}

.clear-fix {
    clear: both;
}

.hidden {
    visibility: hidden !important;
}

/* end global */

/* start of our services section */

#our-services {
    background: #f6f6f6;
    min-height: 100vh;
    padding-top: 25vh;
}

/* OUR SEERVICES LEFT SIDE */

#our-services .desc {
    width: 33%;
    float: left;
}

#our-services .desc .heading h1 {
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 1.4px;
    margin-bottom: 30px;
}

#our-services .desc .text {
    color: #BABABA;
}

/* OUR SERVICES RIGHT SIDE */

#our-services .services {
    width: 67%;
    float: left;
}

#our-services .services .column {
    float: left;
    margin-right: 60px;
    transform: rotate(45deg);
    transition: transform 0.3s ease;
}

#our-services .services .column .service {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 120px;
    height: 120px;
    background: #2200aa;
    transition: all 0.1s ease;
    margin-bottom: 7px;
}

p.service-txt {
    color: white;
    font-size: 11px;
}

#our-services .services .column .service:hover {
    background: #01bef0;
    color: #fff;
}

#our-services .services .column .service:hover .service-icon {
    color: #fff;
}

#our-services .services .column .service .service-desc {
    transform: rotate(-45deg);
    text-align: center;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: bold;
    transition: transform 0.3s ease;
}

#our-services .services .column .service .service-desc .service-icon  {
    font-size: 20px;
    margin-bottom: 5px;
    color: #f57469;
}

/* end of our services section */

/* media query */

@media all and (max-width: 967px) {
    #our-services {
        padding-top: 60px;
    }
    
    #our-services .desc {
        width: 100%;
        float: none;
        margin-bottom: 30px;
    }
    
    #our-services .services {
        width: 100%;
    }
    
    #our-services .services .column {
        transform: rotate(0deg);
        margin-right: 10px;
    }
    
    #our-services .services .column .service .service-desc {
        transform: rotate(0deg);
    }
}
</style>


<script>
    /*global $*/
$(document).ready(function () {
    "use strict";
    var heading = $('#our-services .desc .heading h1'),
        txt = $('#our-services .desc .text'),
        serviceItem = $('#our-services .services .column .service'),
        tl = new TimelineLite();

    tl
        .from(heading, 0.3, {opacity : 0, y : -20}, '+=0.3')
        .from(txt, 0.3, {opacity : 0, y : -20})
        .staggerFrom(serviceItem, 0.2, {x : -10, autoAlpha : 0}, 0.1);
    
});
</script>

<!-- moving cloud  -->



<!-- end moving cloud -->

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/meanmenu.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/custom.js"></script>
</body>

</html>



<?php 


include 'footer.php';

?>