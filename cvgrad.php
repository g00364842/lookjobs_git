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

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Students Tips</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left-std.php';
?>

    <div class="col-lg-8 md-12 sm-12">

        <div class="card shadow mb-3 bg-light">
          <div class="card-header">
            <h3>The graduate's guide to CVs</h3>
          </div>
        <div class="card-body">
        <div class="container"> 
          <h5 class="card-title font-weight-bold">What graduates need to know about writing a CV, the information to include and how to choose the right CV format.</h5>
          <p class="card-text">A CV is a document that outlines your background and experience so that employers can assess your suitability for a job. (It's short for curriculum vitae, but no-one calls them that any more.) Many employers – including around a third of graduate recruiters in Ireland – ask for job applications in the format of CV and covering letter.</p>
          <p class="card-text">From your point of view, the purpose of the CV is simple: to get you an interview.</p>

          <h5 class="card-title font-weight-bold">How employers use CVs</h5>
          <p class="card-text">It helps to think ahead. As a starting point, it's a good idea – early on in your job search – to create a basic CV that you can draw on whenever you have a job application to make. Compile your personal information under standard headings and update your details whenever you gain new experience or a new skill.</p>
          <p class="card-text">Then, when you are applying for a specific job, you will have time to customise the CV to fit that job and employer. Adapt the information to emphasise the skills and experience that are most relevant to the job you're applying for. Make sure you meet all the employer’s criteria, and make it easy for them to see this.</p>

          <h5 class="card-title font-weight-bold">What to include in a CV</h5>
          <p class="card-text">There are different ways of presenting the information on your CV, but it should always include certain key elements.</p>

          <h5 class="card-title">Personal details</h5>
          <p class="card-text">Keep them brief and make sure they don't take up too much space. For example, why not put your email header and mobile number in the header with your URL LinkedIn profile and address in the footer? Your name should be what jumps out at the reader followed</p>

          <h5 class="card-title font-weight-bold">Career objective/personal profile (optional)</h5>
          <p class="card-text">This should aim, in a concise way, what you are aiming for at this stage and what skills and qualities you have to offer in relation to your objective. It is useful here to mention your interest in a specific job or target a particular employment sector.</p>

          <h5 class="card-title font-weight-bold">Educational qualifications</h5>
          
          <p class="card-text">Presented in reverse chronological order (most recent first). Provide grades (or expected grades) and dates. For example</p>
          <ul>
            <li><p class="card-text">Give the full title of your degree, e.g. Bachelor of Business Studies, not BBS. Ensure the spelling is correct.</p></li>
            <li><p class="card-text">Give the full title of your degree, e.g. Bachelor of Business Studies, not BBS. Ensure the spelling is correct.</p></li>
            <li><p class="card-text">Give the title of your project or thesis and elaborate if it is relevant to the job</p></li>
            <li><p class="card-text">Show the time frame of your degree.</p></li>
            <li><p class="card-text">Show your overall grades and relevant subjects</p></li>
            <li><p class="card-text">Refer to achievements, skills or learning outcomes that you have obtained.</p></li>
            <li><p class="card-text">Employment or work experience</p></li>
            <li><p class="card-text">Also most recent first. Include paid work and unpaid internships. Remember:</p></li>
          </ul>
          <h5 class="card-title font-weight-bold">Employers are interested in any work experience, whether immediately relevant or not.</h5>
          <p class="card-text">Don't forget any part-time/vacation /voluntary work experience that you may have.</p>
          <ul>
            <li><p class="card-text">Give evidence of what you have achieved and how you have made a difference. Did you take on extra responsibilities? What did you learn? Did you receive training?</p></li>
            <li><p class="card-text">Present your interests, voluntary work, involvement in clubs and societies in the same format as your work experience to giver it more value.</p></li>
            <li><p class="card-text">It may be useful to divide your experience into experience directly related to the role advertised,</p></li>
            <li><p class="card-text">Appropriate usage of language is important, positive words and action verbs should be accentuated, such as 'managed', 'achieved', delivered etc.</p></li>
            <li><p class="card-text">Provide details of how your reached decision, planned activities and worked with other to achieve results.</p></li>
            <li><p class="card-text">Additional information</p></li>
            <li><p class="card-text">This could include skills, interests and achievements: anything that will highlight your employability and make you stand out.</p></li>
          </ul>

          <h5 class="card-title font-weight-bold">Referees</h5>
          <p class="card-text">Names of referees and contact details (check with them first). At graduate level this will usually be one academic and one employer or personal referee.</p>

          <h5 class="card-title font-weight-bold">CV formats</h5>
          <p class="card-text">There are different formats of CV. Use your university careers service to check out examples of CVs but never copy a CV template exactly: employers can tell. If you're using a sample CV, make sure you adapt it to the job and your own circumstances.</p>

          <p class="card-text">A graduate CV should be fairly short. Try to keep it to one page of A4 – two as an absolute maximum.</p>

          <p class="card-text">There are three main ways to present this information, depending on whether you want to promote your skills, your experiences or a combination of the two. In each case, you should put your name and contact details at the top. (You don't need to include the word 'CV'.)</p>

          <h5 class="card-title">Chronological CV</h5>
          <p class="card-text">This is the traditional, and most common, type of CV. It's most relevant if you have worked previously or have a lot of work experience. This presents information in date order under the headings 'Education' and 'Employment' (or 'Work experience').</p>

          <h5 class="card-title font-weight-bold">List your education first (in reverse chronological order).</h5>
          <p class="card-text">Then add your work experience and employment history. Start with your present or most recent job and work backwards.</p>
          <p class="card-text">Include a 'Further information' section at the end.</p>
          <h5 class="card-title font-weight-bold">Skills-based CV</h5>
          <p class="card-text">This is useful at graduate level where you may not have a lot of work experience.</p>

          <h5 class="card-title font-weight-bold">Arrange your key skills under three to five headings such as ‘Communication skills’ and ‘Teamwork’. Then write about your relevant experience and accomplishments under each skill heading.</h5>
          <p class="card-text">After the last skill heading, add a brief paragraph listing your work experience (dates, employer and job titles only).</p>
          <p class="card-text">Include your education in a separate section at the end of the CV.</p>
          <h5 class="card-title font-weight-bold">Combination CV</h5>
          <p class="card-text">This combines elements of the chronological and skills-based CV, and can be useful if you want to highlight employers as well as your personal qualities.</p>

          <h5 class="card-title font-weight-bold">Different types of CV for different situations</h5>
          <p class="card-text">There may be occasions where a different type of CV is required. Your careers service can help you with this.</p>

          <h5 class="card-title font-weight-bold">CVs for academic jobs</h5>
          <p class="card-text">These tend to be longer, and will include additional sections such as teaching experience and publications.</p>

          <h5 class="card-title font-weight-bold">CVs for the USA</h5>
          <p class="card-text">The convention in America is to provide a 'resume' which should be one page long.</p>

          <h5 class="card-title font-weight-bold">CVs for other countries</h5>
          <p class="card-text">Conventions vary, so take advice from your careers service. CVs in the UK follow the same format as those you send to Irish employers.</p>

          <h5 class="card-title font-weight-bold">How to write a personal statement for a CV</h5>
          <p class="card-text">Many people include a personal statement or career objective at the beginning of their CV. This is a short (usually one-sentence) summary of your experience and aspirations. Used well, it can help you stand out. Unfortunately, it is often not used well and can sound phoney if you're not careful, so only do this if you're sure you can be specific, avoid cliches and add value. Make sure that there is evidence elsewhere in the CV for any claims you are making.</p>

          <p class="card-text">These statements can be useful if you are sending a speculative application, as it allows the recruiter at a glance to see who you are and what you are looking for.</p>

          <h5 class="card-title font-weight-bold">CV checklist</h5>
          <ul>
          <li><p class="card-text">Have you included a current phone number and an email address that you check regularly?</p></li>
          <li><p class="card-text">If including term time and home contact details, have you provided the relevant dates?</p></li>
          <li><p class="card-text">Is your CV relevant to the career sector or employer you are applying to?</p></li>
          <li><p class="card-text">If you're emailing your CV, have you saved it with your own name? If it's just 'CV.doc' it could get lost in a pile of others.</p></li>
          <li><p class="card-text">Have you included a cover letter?</p></li>
          </ul>

          <h5 class="card-title font-weight-bold">CV tips</h5>
          <ul>
          <li><p class="card-text">Provide clearly written content presented in a clean and efficient style.</p></li>
          <li><p class="card-text">Make it easy for recruiters to find the information they need. Assume your CV will be scanned in 30 seconds. This means that clear presentation will put you ahead.</p></li>
          <li><p class="card-text">Tailor your CV for the job you are applying for.</p></li>
          <li><p class="card-text">Always include a covering letter with your CV.</p></li>
          <li><p class="card-text">Make sure you can account for any chronological gaps in your CV – you may get asked about this at interview.</p></li>
          <li><p class="card-text">Most university careers services run CV workshops that will help you to get started. They may also give you one-to-one advice on your own CV.</p></li>
          </ul>

          <hr>
          <br>

          <a href="stips.php" class="btn btn-info float-right"><< Back</a>

          </div>
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