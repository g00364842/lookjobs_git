<!-- Header -->
<?php require 'connect/header.php';?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Contact us</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
?>
<!-- Content -->

<div class="container">
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                             <a class="text-white" href="jobs.php"><i class="fa fa-search"></i></a>
                            <a class="text-white" href="jobs.php">Find Your Job</a>
                        </div>
                        <div class="home-text">
                            <i class="fa fa-home"></i>
                            <a class="text-white" href="employers.php">Employers</a>
                        </div>
                    </div>
                    
                        <div class="first-row">
                          <div class="col form-group">

                        </div><br>

                        <p class="room-location">
                        <div class="font-weight-bold"> GMIT - GALWAY MAYO INSTITUTE OF TECHNOLOGY</div><br><br>
                        <i class="fa fa-envelope"></i>&nbsp&nbsp&nbsp info@gmit.ie<br>
                        <i class="fa fa-phone"></i> &nbsp&nbsp +353 - 9161214321 <br>
                        <i class="icon_pin"></i>&nbsp&nbsp&nbsp GMIT - Dublin Road, Galway</p>
                        <hr>

                         <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form " data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name " id="name" required data-validation-required-message="name"><br>
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number"><br>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col form-group">
                                    <input type="email" class="form-control" id="e_mail" placeholder="name@example.com" name="e_mail" required data-validation-required-message="e_mail"><br>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col form-group">
                                    <textarea name="query" class="form-control" id="query" name="query" placeholder="Your message" required data-validation-required-message="Please enter a message"></textarea><br>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info mb-2 float-right">Submit</button>
                            </div><br><br>
                        </form><br><br>

                        <div class="container bg-info"><br>
                            <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="border border-light rounded embed-responsive embed-responsive-16by9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d667790.2356702699!2d-9.855385145019907!3d53.54254055331295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485b9132cb2e133f%3A0x5a81260c20e02143!2sGMIT!5e1!3m2!1sen!2sie!4v1585778976791!5m2!1sen!2sie" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br>
                        </div><br></div><br>
                        </div>

                        </div>



</div>
</div><br><br>
<?php require 'connect/footer.php';?>