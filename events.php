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
<style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.clearfix::after,
.calendar ol::after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

/* ================
Calendar Styling */
.calendar {
  border-radius: 10px;
}

.month {
  font-size: 2rem;
}

@media (min-width: 992px) {
  .month {
    font-size: 3.5rem;
  }
}

.calendar ol li {
  float: left;
  width: 14.28571%;
}

.calendar .day-names {
  border-bottom: 1px solid #eee;
}

.calendar .day-names li {
  text-transform: uppercase;
  margin-bottom: 0.5rem;
}

.calendar .days li {
  border-bottom: 1px solid #eee;
  min-height: 8rem;
}

.calendar .days li .date {
  margin: 0.5rem 0;
}

.calendar .days li .event {
  font-size: 0.75rem;
  padding: 0.4rem;
  color: white;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  border-radius: 4rem;
  margin-bottom: 1px;
}

.calendar .days li .event.span-2 {
  width: 200%;
}

.calendar .days li .event.begin {
  border-radius: 1rem 0 0 1rem;
}

.calendar .days li .event.end {
  border-radius: 0 1rem 1rem 0;
}

.calendar .days li .event.clear {
  background: none;
}

.calendar .days li:nth-child(n+29) {
  border-bottom: none;
}

.calendar .days li.outside .date {
  color: #ddd;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
  min-height: 100vh;
  background-color: #3ca55c;
  background-image: linear-gradient(147deg, #3ca55c 0%, #b5ac49 100%);
}

    </style>


    <div class="col-lg-8 md-12 sm-12">



        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">Upcoming events</h4>
          <div class="card-body">
            <h5 >Tech Careers Expo - Limerick</h5><br>
            <h6 class="font-weight-bold">27th June 2020</h4><hr>
            <p class="card-text">

            The Expo is a great opportunity for job seekers to meet IT companies that are hiring in person. The event will take place at the Limerick Strand Hotel on 27th June 2020 and will be the largest, specialised, tech careers event of the year, featuring the top companies in the tech & IT sectors at home and abroad.</p>

            <hr>
                <a href="https://www.eventbrite.ie/e/tech-careers-expo-tickets-76912999853" target="_blank" class="btn btn-info float-right">Learn more >></a>
              
          </div>
        </div>
      
      <div class="card d-none d-lg-block shadow mb-3 bg-light">
          <div class="card-header">
            <h3>Event's Calendar</h3>
          </div>
        <div class="card-body"> 
          <div class="container">
                    <p class="card-text">
    <div class="container py-5">

  <!-- Calendar -->
  <div class="calendar d-none d-lg-block shadow bg-white p-5 d-none d-lg-block">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
      <h5 class="month font-weight-bold mb-0 text-uppercase">June 2020</h5><br>
    </div><br><br>
    <ol class="day-names list-unstyled">
      <li class="font-weight-bold text-uppercase">Mon</li>
      <li class="font-weight-bold text-uppercase">Tue</li>
      <li class="font-weight-bold text-uppercase">Wed</li>
      <li class="font-weight-bold text-uppercase">Thu</li>
      <li class="font-weight-bold text-uppercase">Fri</li>
      <li class="font-weight-bold text-uppercase">Sat</li>
      <li class="font-weight-bold text-uppercase">Sun</li>
    </ol>

    <ol class="days list-unstyled">
      <li>
        <div class="date">1</div>
      </li>
      <li>
        <div class="date">2</div>
      </li>
      <li>
        <div class="date">3</div>
      </li>
      <li>
        <div class="date">4</div>
      </li>
      <li>
        <div class="date">5</div>
      </li>
      <li>
        <div class="date">6</div>
      </li>
      <li>
        <div class="date">7</div>
      </li>
      <li>
        <div class="date">8</div>
      </li>
      <li>
        <div class="date">9</div>
      </li>
      <li>
        <div class="date">10</div>
      </li>
      <li>
        <div class="date">11</div>
      </li>
      <li>
        <div class="date">12</div>
      </li>
      <li>
        <div class="date">13</div>
      </li>
      <li>
        <div class="date">14</div>
      </li>
      <li>
        <div class="date">15</div>
      </li>
      <li>
        <div class="date">16</div>
      </li>
      <li>
        <div class="date">17</div>
      </li>
      <li>
        <div class="date">18</div>
      </li>
      <li>
        <div class="date">19</div>
      </li>
      <li>
        <div class="date">20</div>
      </li>
      <li>
        <div class="date">21</div>
      </li>
      <li>
        <div class="date">22</div>
      </li>
      <li>
        <div class="date">23</div>
      </li>
      <li>
        <div class="date">24</div>
      </li>
      <li>
        <div class="date">25</div>
      </li>
      <li>
        <div class="date">26</div>
      </li>
      <li>
        <div class="date">27</div>
        <div class="event bg-info">Careers Expo - Limerick</div>
      </li>
      <li>
        <div class="date">28</div>
      </li>
      <li>
        <div class="date">29</div>
      </li>
      <li>
        <div class="date">30</div>
      </li>
      <li class="outside">
        <div class="date">1</div>
      </li>
      <li class="outside">
        <div class="date">2</div>
      </li>
      <li class="outside">
        <div class="date">3</div>
      </li>
      <li class="outside">
        <div class="date">4</div>
        </li>
      <li class="outside">
        <div class="date">5</div>
      </li>
    </ol>
  </div><br>
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


<br><br><br>

<br>

<?php require 'connect/footer.php';?>