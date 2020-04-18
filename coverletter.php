<!-- Header -->
<?php

require 'connect/header.php';
include 'connect/connect.php';

// Escape user inputs for security

$record = false;
if(isset($_POST['LOCATION'])){
    $record = $_POST['LOCATION'];
 } 
 
$type = false;
if(isset($_POST['JOB_TYPE'])){
    $type = $_POST['JOB_TYPE'];
 }

$cat = false;
if(isset($_POST['CATEGORY'])){
    $cat = $_POST['CATEGORY'];
 }

?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Student tips</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left-std.php';
?>

    <div class="col-lg-8 md-12 sm-12">

        

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">Cover letter</h4>
          <div class="card-body">
            
          <p class="card-text text-justify">John Doe,
          Dublin Road<br>
          Central Call<br>
          Galway<br><br>

          Date: 14/06/2019<br><br>

          Ref: Multilingual IT Seller Support (Summer contract)<br><br>

          Dear Mr John<br><br>

          I am writing in response to your advertisement in the Jooble website for the position of Multilingual Seller Support (Summer contract) and enclose a copy of my CV with details of my skills and qualifications to date.<br><br>
          I have finished third year of the BSc in Sales and Marketing in Galway-Mayo Institute of Technology.<br><br>
          I have developed skills in PHP, SQL, Bootstrap, JavaScrispt, HTLML, CSS, mySQL, video edition. I can use all the Adobe Suite software programs.<br><br> I have also completed and led a number of projects where I have further enhanced my skills in design, creativity, digital media and leadership.<br><br> Comfortable with Mac OSX as well as Windows. I also have work experience as a web and graphic designer where I have developed my communication and teamwork skills, and I am confident that I can be a beneficial addition to your web development team.<br><br>
          I would particularly like to work for your company because I’ve heard of your reputation and enthusiasm for encouraging employee growth through education, training and vast resources.
          I already know that engaged employees produce better work. This internship would provide me with the ideal opportunity to assist your organization and to expand my research skills.<br><br>

          Thank you for taking the time to read and consider my application.<br><br>
          I can be contacted at +353 83 005582. Looking forward to hearing from you at your earliest convenience.<br><br><br><br>



          Yours sincerely,<br><br>

          Christopher Costello.</p>
              <hr> 
              <br>

          <a href="stips.php" class="btn btn-info float-right"><< Back</a>
            <br><br><br><br>
          </div>
        </div>

        

        

    </div>
</div>

</div>
</div>
</div>
</div>
</div>


<br><br><br>
<br>

<?php require 'connect/footer.php';?>